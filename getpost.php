<?php
     $name = $email = $pass = "";
     $name_error = $email_error = $pass_error = "";

     if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["name"])){
            $name_error = "name is required";
        }else{
            $name = testinput($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $email_error = "email is required";
        }else{
            $email = testinput($_POST["name"]);
        }

        if(empty($_POST["password"])){
            $pass_error = "password is required";
        }else{
            $pass = testinput($_POST["email"]);
        }
     }
?>