<html>
  <head>
    <title>Профиль</title>
    <meta charset="utf-8">
    <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
    ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
      body {
        font-size: 20px;
        font-family: Roboto, sans-serif;
      }
      table {
        margin: 100px auto 0;
        border-spacing: 20px;
        border: 2px dashed black;
      }
      td {
        max-width: 380px;
      }
      th, td:first-child {
        text-align: right;
      }
    </style>
  </head>
  <body>
    <?php
      $name = 'Антон';
      $age = '21';
      $mail = 'hs.revision@gmail.com';
      $address = 'Челябинск';
      $info = 'Неплохо знаю HTML и CSS, изучаю JS и PHP. Главная цель - стать Full Stack разработчиком.';
    ?>
    <table>
      <tr>
        <th>Профиль пользователя Антон:</th>
      </tr>
      <tr>
        <td>Имя</td>
        <td><?= $name ?></td>
      </tr>
      <tr>
        <td>Возраст</td>
        <td><?= $age ?> год</td>
      </tr>
      <tr>
        <td>E-Mail</td>
        <td><a <?= 'href="mailto:'.$mail.'"' ?>><?= $mail ?></a></td>
      </tr>
      <tr>
        <td>Город</td>
        <td><?= $address ?></td>
      </tr>
      <tr>
        <td>Краткая информация</td>
        <td><?= $info ?></td>
      </tr>
    </table>
  </body>
</html>
