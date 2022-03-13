<?php

//echo " you send data with " . $_SERVER["REQUEST_methtod"] . "Requset";
if ($_SERVER['REQUEST_METHOD'] == 'PSOT') {

    $admins = array("Ahmet", "mehmet", "zeynap", "ali");
    $username = $_POST["username"];

    if (in_array($admins, $username)) {
        echo " wellcome to my Admin panel page " .  $username . "to cnterol panel Admin";
    } else {
        echo "sorry is username is not existed in our client area";
    }
} else {
    echo  "sorry you cant get into this page diractly ";
}
    





//echo "your username is " . $_GET["username"]; // different between " " and ' '
//echo "your password is " . $_GET["password"];
