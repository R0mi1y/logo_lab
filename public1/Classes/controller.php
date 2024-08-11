<?php
    include 'config.php';

    if(isset($_POST["register"])) {
        
        $password = $_POST["password"];
        $password_confirmation = $_POST["password_confirmation"];
        
        if ($password == $password_confirmation) {
            $username = $_POST["name"];
            
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $cpf = $_POST["cpf"];

            if (model\connector::validUser($username, $email, $cpf) == null) {

                $birthdate = $_POST["birth_date"];
                
                $user = new model\User();

                $user->setPassword($password);
                $user->setEmail($email);
                $user->setUsername($username);
                $user->setPhone($phone);
                $user->setCpf($cpf);
                $user->setBirthdate($birthdate);
        
                $user->register();
                header("Location: login.php?password=".$password."&email=".$email);
            } else {
                $msm = model\connector::validUser($username, $email, $cpf);
            }
        } else {
            $msm = "Senhas incompatíveis";
        }
    }
?>