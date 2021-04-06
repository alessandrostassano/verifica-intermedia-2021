<?php

require './class/User.php';
require './lib/searchFunctions.php';
require './lib/JSONReader.php';




$taskUser = JSONReader("./dataset/users-management-system.json");


if (isset($_GET['searchID']) && trim($_GET['searchID'] !== '')) {
    $searchText = trim(filter_var($_GET['searchID'], FILTER_SANITIZE_STRING));
    $taskUser = array_filter($taskUser, searchID($searchText));
} else {
    $searchID = "";
}


if (isset($_GET["status"])) {
    $searchStatus = $_GET["status"];
    $taskList = array_filter($taskList, searchStatus($searchStatus));
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        input.form-control {
            padding: 2px;
            line-height: 100%;
            font-size: 1.5rem;
        }
    </style>
</head>

<form action="index.php" method="GET">
<body>
    
    <header class="container-fluid bg-secondary text-light p-2">
        <div class="container">
            <h1 class="display-3 mb-0">
                User management system
            </h1>
            <h2 class="display-6">user list</h2>
        </div>
    </header>
    <div class="container">
        <table class="table">
            <tr>
                <th >id</th>
                <th >nome</th>
                <th >cognome</th>
                <th >email</th>
                <th cellspan="2" >età</th>
            </tr>
            <tr>
            
        
                <th>
                    <input class="form-control" type="text" name="searchID">
                </th>

                <th>
                    <input class="form-control" type="text" name="searchNome">
                </th>

                <th>
                    <input class="form-control" type="text" name="searchCognome">
                </th>

                <th>
                    <input class="form-control" type="text" name="searcEmail">
                </th>

                <th>
                    <input class="form-control" type="text" name="searchEta">
                </th>
                <th>
                    <button class="btn btn-primary">cerca</button>
                </th>
            </tr>
            <?php 
                foreach ($taskUser as $key => $task) 
                    { 
                        $user = new User();
                        $user -> id = $task["id"];
                        $user -> firstName = $task["firstName"];
                        $nameLowercase = strtolower($task ["lastName"]);
                        $uppercasename = ucfirst($nameLowercase);
                        $user -> lastName = $uppercasename;
                        $user -> email = $task["email"];
                        $user -> birthday = $task["birthday"];
                    
            ?>
            <tr>
                <td><?= $user -> id ?></td>
                <td><?= $user -> firstName ?></td>
                <td><?= $user -> lastName ?></td>
                <td><?= $user -> email ?></td>
                <td><?= $user -> getAge($user->birthday) ?></td>
                <td><?= $user->isAdult($user->getAge($user -> birthday)) ?></td>
                <!--[] Implementare il metodo **getAge** che permette di ottenere l'età dell'utente-->
            </tr>
            <?php } ?>        
        </table>
    </div>
</body>
</form>

</html>