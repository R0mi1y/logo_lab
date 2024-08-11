<?php
    namespace model;
    use \PDO as PDO;
    
    class connector {
        const USER = "root";
        const PASS = "";
        const HOST = "localhost";
        const PORT = "3306";
        const DB = "logolab";
        const PATH = "mysql:host=".self::HOST.":".self::PORT.";dbname=".self::DB;
        
        public static function getConnection() {
            try {
                $pdo = new PDO(self::PATH, self::USER, self::PASS);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\Exception $e) {
                echo("Erro ao conectar no banco de dados");
            }
            
            return $pdo;
        }
        
        public static function getUserByPass($usr){
            $email = $usr->getEmail();
            $pass = $usr->getPassword();
            
            $sql = "select * from user where email = ? and password = ?";
            
            $pdo = self::getConnection();
            $pstm = $pdo->prepare($sql);
            $pstm->execute(array($email, $pass));
            $result = $pstm->fetchAll();
            
            if (isset($result[0]['id'])){
                @$usr->setId($result[0]);
                @$usr->setUsername($result[0]['name']);
                @$usr->setEmail($result[0]['email']);
                @$usr->setPassword($result[0]['password']);
                @$usr->setType($result[0]['type']);
            }
            
            return $usr;
        }
        
        public static function registerUser($user){
            date_default_timezone_set('America/Sao_Paulo');

            $password = $user->getPassword();
            $username = $user->getUsername();
            $email = $user->getEmail();
            $phone = $user->getPhone();
            $cpf = $user->getCpf();
            $birthdate = $user->getBirthdate();
            $currentDate = date('Y-m-d H:i:s');

            $sql = "insert into user (name, password, email, phone, cpf, birthdate, account_created_date, type) values (?, ?, ?, ?, ?, ?, ?, 'user');";
            
            $pdo = self::getConnection();
            $pstm = $pdo->prepare($sql);
            $pstm->execute(array($username, $password, $email, $phone, $cpf, $birthdate, $currentDate));
            
            return $user;
            
        }
        
        public static function validUser($username, $email, $cpf) {
            $sql = "select id from user where name = ?;";
            
            $pdo = self::getConnection();
            $pstm = $pdo->prepare($sql);
            $pstm->execute(array($username));
            
            $result = $pstm->fetchAll();
            
            if (!isset($result[0])){
                $sql = "select id from user where email = ?;";
            
                $pdo = self::getConnection();
                $pstm = $pdo->prepare($sql);
                $pstm->execute($email);
                
                $result = $pstm->fetchAll();
                
                if (!isset($result[0])){
                    $sql = "select id from user where cpf = ?;";
            
                    $pdo = self::getConnection();
                    $pstm = $pdo->prepare($sql);
                    $pstm->execute(array($cpf));
                    
                    $result = $pstm->fetchAll();
                    
                    if (!isset($result[0])){
                        return null;
                    } else {
                        return "CPF Já Cadastrado!";
                    }
                } else {
                    return "E-mail Já Cadastrado!";
                }
            } else {
                return "Nome Já Cadastrado!";
            }
        }
    }
?>