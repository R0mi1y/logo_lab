<?php
    namespace model;

    class user{
        private $username;
        private $password;
        private $email;
        private $birthdate;
        private $address;
        private $phone;
        private $id;
        private $type;
        private $cpf;
        private $imgPath;

        //constructor
        public function __construct(){
        
        }

        public function define($username, $password, $email, $birthdate, $address, $phone, $id, $type){
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->birthdate = $birthdate;
            $this->address = $address;
            $this->phone = $phone;
            $this->id = $id;
            $this->type = $type;
        }
        
        // Getters
        public function getUsername() {
            return $this->username;
        }
        
        public function getPassword() {
            return $this->password;
        }
    
        public function getEmail() {
            return $this->email;
        }
        
        public function getBirthdate() {
            return $this->birthdate;
        }
    
        public function getAddress() {
            return $this->address;
        }
        
        public function getPhone() {
            return $this->phone;
        }
        
        public function getId() {
            return $this->id;
        }
        
        public function getType() {
            return $this->type;
        }
        
        public function getCpf() {
            return $this->cpf;
        }
        
        public function getImgPath(){
                return $this->imgPath;
        }

        // Setters
        public function setUsername($username) {
            $this->username = $username;
        }
        
        public function setPassword($password) {
            $this->password = $password;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function setBirthdate($birthdate) {
            $this->birthdate = $birthdate;
        }
        
        public function setAddress($address) {
            $this->address = $address;
        }
        
        public function setPhone($phone) {
            $this->phone = $phone;
        }
        
        public function setId($id) {
            $this->id = $id;
        }
        
        public function setType($type) {
            $this->type = $type;
        }
        
        public function setCpf($cpf) {
            $this->$cpf = $cpf;
        }

        public function setImgPath($imgPath) {
                $this->imgPath = $imgPath;
        }
        
        public function validPass(){
            connector::getUserByPass($this);

            if($this->getId() != null){
                return true;
            }  else {
                return false;
            }
        }

        public function register(){
            return connector::registerUser($this);
        }

    }
?>