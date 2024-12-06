<?php
class Login {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function authenticate($username, $password) {
        $query = "SELECT * FROM Login WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            return $user; 
        } else {
            return false;
        }
    }
}
