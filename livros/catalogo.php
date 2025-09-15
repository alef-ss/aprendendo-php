<?php
include "./include/conexao.php";
$sql = "SELECT id, titulo, autor, arquivo, capa FROM livros ORDER BY data_upload DESC";
$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo</title>
</head>
<body>
  <div class="catalogo">
    <?php while($row = $resultado->fetch_assoc()): ?>
      <div class="livro">
        <?php if ($row['capa']): ?>
          <img src="<?php echo $row['capa']; ?>" alt="Capa de <?php echo htmlspecialchars($row['titulo']); ?>">
        <?php else: ?>
          <div style="width: 100%; height: 250px; background: #ccc; display: flex; align-items: center; justify-content: center;">Sem capa</div>
        <?php endif; ?>

        <h2><?php echo htmlspecialchars($row['titulo']); ?></h2>
        <p><?php echo htmlspecialchars($row['autor']); ?></p>
        <a href="<?php echo $row['arquivo']; ?>" target="_blank">Abrir PDF</a>
      </div>
      <?php endwhile; ?>
  </div>
</body>
</html>