<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis Variantes</title>
</head>
<body>
  <?php
    $site = "KingStore";
    $$site = "Roupas";
    echo "$site <br>";
    echo "$KingStore <br>";
  ?>
</body>
</html>