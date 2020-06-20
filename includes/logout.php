<?php

    include_once 'user_session.php';

    $userSession = new UserSession();
    $userSession-> closerSession();

    header("location:../indexlogin.php");
    //    header("location:../index.php");


?>