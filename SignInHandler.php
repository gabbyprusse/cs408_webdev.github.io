<?php
session_start();

require_once 'Dao.php';
require_once 'SIcontrol.php';

$dao = new Dao();

// ERROR HANDLERS
$errors = [];
$user = $_POST['user'];
$pwd = $_POST['pwd'];

        // empty input
        if (user_empty($user)){
            $errors["emptyInput"] = "Fill in username";
        }
        // empty input
        if (pwd_empty($pwd)){
            $errors["emptyInput"] = "Fill in password";
        }


        $result = $dao->getUser($user);
        // checks if user and pwd are false
        if (!validatePwd($pwd, $result["pwd"]) || !validateUsername($result)) {
            $errors["login_incorrect"] = "Incorrect login";
        }

        if (count($errors) > 0) {
            $_SESSION['authenticated'] = false;
            $_SESSION["errors_signin"] = $errors;
            header("Location: ../SignIn.php");
        } else {
            $_SESSION['authenticated'] = true;
            $_SESSION['userId'] = $result['id'];
            $_SESSION['user_username'] = htmlspecialchars($result['username'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401);
            $_SESSION['goal'] = $result['goal'];

            header("Location: Profile.php");
        }
