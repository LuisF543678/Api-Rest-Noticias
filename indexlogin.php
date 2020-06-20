<?php

    include_once 'includes/user.php';
    include_once 'includes/user_session.php';
    //include_once 'formulario.php';
    echo '<script src="assets/sweetalert2.js"></script>';
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])) {
        //echo "Hay session";
        $user->setUser($userSession->getCurrentUser());
        include_once 'formulario.php';
    } else if (isset($_POST['username']) && isset($_POST['password'])) {
        //echo "validacion de login";
        $userForm = $_POST['username'];
        $passForm = $_POST['password'];

        if($user->userExists($userForm, $passForm)) {
            //echo "Usuario validado";
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            include_once 'formulario.php';
        } else {
            $errorLogin = "<script>Swal.fire('nombre de usuario y/o password incorrectos')</script>";
            include_once 'vistas/login.php';
        }
    } else {
        //echo "login";
        include_once 'vistas/login.php';
    }

?>