<!DOCTYPE html>
<html lang="en">
<head>
    <title>Регистрация пользователя</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        #ff {
            margin-left: 200px;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post">
        <h2>Тестовая кнопка "ALL RECORDS"</h2>
        <button type="submit" class="btn btn-primary" name="submit">ALL_RECORDS</button>
        <button id='ff' type="submit" class="btn btn-primary" name="submit_3">HideTable</button>
    </form>
</div>
<br>
<?php


if (sizeof($pictures)) {
    echo "<div id='frame' style='visibility: visible' align='center'><form method='POST'><table border='3px' align='center' style='color: red'><tr><th style='text-align: center;color:darkgreen'>Id</th>
<th style='text-align: center;color:darkgreen' >Name</th><th style='text-align: center;color:darkgreen' >Size</th><th style='text-align: center;color:darkgreen' >Path
</th><th style='text-align: center;color:darkgreen'>Pictur</th><th style='color:purple'>Deleteng</th></tr>";
    foreach ($pictures as $key => $row) {
        echo "<tr><td width='50px' align='center'>{$row->id}<td width='100px' align='center'>{$row->name}<td width='100px' align='center'>{$row->size}<td>{$row->imagepath}<td width='200px' align='center'>
<img src='.\images\\".$row->name."' height='60px' width='100px' ></td>";
        echo "<td> <button type=\"submit\" 
            class=\"btn btn-primary\" name=\"btnDel\" 
            value='{$row->id}'>Удалить?</button></td>";
        echo "</tr>";
    }
    echo "</table></div><br>";
    echo "  <div class='alert alert-success alert-dismissible fade show'>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <strong>Информация!</strong>Количество загруженных изображений = <b style='color: red'>".sizeof($pictures)."</b> !!!
  </div>";
}
?>
</body>
</html>