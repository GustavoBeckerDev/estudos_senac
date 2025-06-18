<?php

require_once 'config/database.php';

class User
{
    private $conn;
    private $table = 'users';

    public $id;
    public $username;
    public $email;
    public $user_password;

    public function __construct() 
    {
        $database = new Database();
        $this->conn = $database->getConection();
    }

    public function register($username, $email, $user_password)
    {

        // SANITIZAÇÃO DE DADOS
        $username = htmlspecialchars(strip_tags($username));
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        //VALIDAR EMAIL
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        // VERIFICAR SE O USUÁRIO JÁ EXISTE
        if ($this->userExists($username,$user_password)){
            return false;
        }
        
        // HASH DA SENHA
        $passwordhash = password_hash($user_password, PASSWORD_DEFAULT);

        // QUERY PARA INSERÇÃO DOS DADOS NA TABELA
        $query = "INSERT INTO" . $this->table . "(username, email, user_password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        return $stmt->execute([$username, $email, $passwordhash]);
    }

    public function Login($username, $user_password)
    {
        $query = "SELECT id, username, email, user_passoword FROM " . $this->table . "WHERE username = ? OR email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt-> execute([$username, $username]);

        if ($stmt->rowCount()>0){
            $row = $stmt->fetch();
            if (password_verify($user_password, $row['user_password'])){
                $this->id = $row['id'];
                $this->username = $row['username'];
                $this->email = $row['email'];
                return true;
            }
        }
        return false;
    }

    public function userExists($username, $email)
    {
        $query = "SELECT id FROM " . $this->table . " WHERE username = ? OR email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $email]);
        return $stmt->rowCount()>0;
    }

    public function getUserById($id)
    {
        $query = "SELECT id, username, email FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch();
        }
        return false;
    }
}

?>