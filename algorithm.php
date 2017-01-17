<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>Алгоритм</title>
</head>
<body style="font-family: Roboto, sans-serif; font-size: 20px;">
  <?php
    $x = $_GET['x'];
    echo $x.'<br>';
    $a = 1; $b = 1;

    while (true) {
      if ($a <= $x) {
        if ($a == $x) {
          echo "Задуманное число входит в числовой ряд.";
          break;
        }
        else {
          $tmp = $a;
          $a += $b;
          $b = $tmp;
        }
      }
      else {
        echo "Задуманное число НЕ входит в числовой ряд.";
        break;
      }
    }
  ?>
</body>
</html>
