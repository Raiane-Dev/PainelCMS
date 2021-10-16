<?php
    include('config.php');
    include('MySql.php');
    require('Controller.php');
    require('Model.php');
    include('templateLeitor.php');

    $controller = new Controller();

    include('views/modelos/header.php');
    $controller->index();
    include('views/modelos/footer.php');

?>