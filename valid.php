<?php

$usertest = "testeur";
$password = "test";

if (isset($_POST['login']) && isset($_POST['password'])){

    if ($usertest == $_POST['login'] && $password == $_POST['password']) 
        {
            session_start();
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];

            header('location: stagefact1.php');
    }
    else{
        header('location: connet.php');
    }
}

else{
    echo "Login et/ou mot de passe non valide";
}


?>