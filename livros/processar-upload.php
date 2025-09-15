<?php

/* Já vou deixar comentado aqui pra eu mesmo não esquecer:
como ele usa uma biblioteca, precisa instalar ela pelo terminal com o comando:
composer require smalot/pdfparser, e pra usar o comando
obviamente precisa do composer instalado */
include "./include/conexao.php";

// Verifica se o arquivo foi enviado
if (!isset($_FILES["arquivo"])) {
  die("Nenhum arquivo enviado");
}

// ====================
// 1. Extrair texto do PDF
// ====================
$autoload = __DIR__ . '/../vendor/autoload.php';

if (!file_exists($autoload)) {
  die("❌ Erro: o arquivo <code>vendor/autoload.php</code> não foi encontrado.<br>
         Execute <code>composer install</code> ou <code>composer require smalot/pdfparser</code> para instalar as dependências.");
}

require $autoload;

// depois: imports (sempre no topo, fora de funções e condicionais)
use Smalot\PdfParser\Parser;

// exemplo de uso com try/catch
try {
  $parser = new Parser();
  $pdf = $parser->parseFile($_FILES["arquivo"]["tmp_name"]);
} catch (Exception $e) {
  echo "❌ Erro ao processar o PDF: " . $e->getMessage();
}


$parser = new Parser();
$pdf = $parser->parseFile($_FILES["arquivo"]["tmp_name"]);

// Tenta pegar metadados
$detalhes = $pdf->getDetails();
$texto = $pdf->getText();

// Usa título dos metadados, ou um pedaço do texto inicial
if (!empty($detalhes['Title'])) {
  $busca = trim($detalhes['Title']);
} else {
  // pega as primeiras 10 palavras do texto como fallback
  $busca = implode(" ", array_slice(explode(" ", $texto), 0, 10));
}

// ====================
// 2. Consulta API Google Books
// ====================
$busca_url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($busca) . "&maxResults=1";
$response = @file_get_contents($busca_url);
$data = json_decode($response, true);

if (isset($data["items"][0]["volumeInfo"])) {
  $info = $data["items"][0]["volumeInfo"];
  $titulo = $info["title"] ?? "Sem título";
  $autor = isset($info["authors"]) ? implode(", ", $info["authors"]) : "Autor desconhecido";
  $capa = $info["imageLinks"]["thumbnail"] ?? null;
} else {
  $titulo = $busca;
  $autor = "Autor desconhecido";
  $capa = null;
}

// ====================
// 3. Salvar arquivo no servidor
// ====================
$diretorio = "uploads/";
if (!is_dir($diretorio)) {
  mkdir($diretorio, 0777, true);
}

$nome_pdf = time() . "_" . basename($_FILES["arquivo"]["name"]);
$caminho_pdf = $diretorio . $nome_pdf;

if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminho_pdf)) {
  $sql = "INSERT INTO livros (titulo, autor, arquivo, tipo_arquivo, capa) VALUES (?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $tipo_pdf = $_FILES["arquivo"]["type"];
  $stmt->bind_param("sssss", $titulo, $autor, $caminho_pdf, $tipo_pdf, $capa);

  if ($stmt->execute()) {
    echo "📚 Livro cadastrado! Veja no <a href='./catalogo.php'>catálogo</a>";
  } else {
    echo "Erro SQL: " . $stmt->error;
  }
} else {
  echo "Erro ao enviar arquivo.";
}
