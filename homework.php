<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
<style>
  table {
    width: 75%;
    margin:auto;
    background-color: #ffffcc;
  }
  th, td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #ffff66;;
  }
  caption {
    font-weight: bold;
    margin-bottom: 10px;
    background: #cc99ff;
  }
</style>

<table>
  <caption>График работы докторов, каб. 333</caption>
  <thead>
    <tr>
      <th>П.н.</th>
      <th>Фамилия, имя</th>
      <th>График</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>Аксенти Елена</td>
      <td>
        <?php
        $dayOfWeek = date('N');
        if ($dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5) {
          echo '8:00-12:00';
        } else {
          echo 'Нерабочий день';
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Петрова Мария</td>
      <td>
        <?php
        if ($dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6) {
          echo '12:00-16:00';
        } else {
          echo 'Нерабочий день';
        }
        ?>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
