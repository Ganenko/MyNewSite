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


<?php

require_once("connection.php");

class MyController extends Db
{
    public function getAllRecords()
    {
        $pictures = [];

        //
        if (isset($_POST['submit'])) {
            $mymodel = $this->loadModel('my_model_class.php', 'MyModel');
            $pictures = $mymodel->getAllRecordsModel();
            require 'view.php';
            return;
        }

        if (isset($_POST['btnDel'])) {
            $id=$_POST['btnDel'];
            $mymodel = $this->loadModel('my_model_class.php', 'MyModel');
            $mymodel->RecordModelDel($id);
            echo "  <div class='alert alert-success alert-dismissible fade show'>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <strong>Success!</strong> Выбранное Вами изображение успешно удалено!
  </div>";
            //require 'del_view.php';
           // return;
        }

        require 'view.php';
        return;


    }
}
?>


</body>
</html>
