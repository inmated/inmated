<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Алгоритм</title>
  <meta charset="utf-8">
  <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
  ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body style="font-family: Roboto, sans-serif; font-size: 20px;">
  <?php
    $input_variable = $_GET['x'];
    echo 'Число: '.$input_variable.'<br>';
    $first_variable = 1; $second_variable = 1;

    while (true) {
      if ($first_variable <= $input_variable) {
        if ($first_variable == $input_variable) {
          echo "Задуманное число входит в числовой ряд.";
          break;
        }
        else {
          $tmp = $first_variable;
          $first_variable += $second_variable;
          $second_variable = $tmp;
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
