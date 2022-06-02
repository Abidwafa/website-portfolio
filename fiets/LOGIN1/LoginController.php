<?php

class LoginController{

    private PDO $connection;

    public function __construct()
    {
        $host = '127.0.0.1';
        $database = 'login';
        $user = 'root';
        $password = '';

        $this->connection = new PDO("mysql:host=$host;dbname=$database",
                                     $user, $password);
    }

    public function Login(string $user, $password) : bool
    {
        $this->ValidateUser($user);
        $this->ValidatePassword($password);
        return $this->CheckPassword($user, $password);
    }

    private function ValidateUser(string $user)
    {
        if (strlen(trim($user)) == 0)
        {
            throw new Exception('Geef een Gebruiksnaam op');
        }
    }

    private $table = 'loginUser';

    private function ValidatePassword(string $password)
    {
        if (strlen(trim($password)) == 0)
        {
            throw new Exception('Geef een Wachtwoord op');
        }
    }

    private function CheckPassword(string $user, string $password) : bool
    {
        $statement = $this->connection->Prepare
                ("select password from $this->table where gebruiksnaam like :id");
        $statement->execute(
            [
              ":id" => $user
            ]);
        $result = $statement->fetch();
        return $result != null && password_verify($password,$result['password']);
    }

    public function CreateUser(string $user, string $password,
                           string $repeatedPassword,
                            string $fullName, string $email)
    {
        $this->ValidateUser($user);
        $this->ValidatePassword($user);
        $this->ValidateRepeatedPassword($password, $repeatedPassword);
        $this->CheckIfUserExists($user);

        $statement = $this->connection->Prepare(
"insert into $this->table (gebruiksnaam, password, klant_naam, email) values (:gebruiksnaam, :password, :klant_naam, :email)");
        $statement->execute(
            [":gebruiksnaam" => trim($user),
             ":password" => password_hash(trim($password), PASSWORD_DEFAULT),
             ":klant_naam" => trim($fullName),
             ":email" => trim($email)
             ]);
    }

    private function ValidateRepeatedPassword(string $password,
                                          string $repeatedPassword)
    {
        if (trim($password) != trim($repeatedPassword))
        {
            throw new Exception('Wachtwoorden moeten hetzelfde zijn');
        }
    }

    private function CheckIfUserExists(string $user)
    {
        $statement =
          $this->connection->Prepare("select 1 from $this->table where gebruiksnaam = :id");
        $statement->execute([":id" => $user]);
        if ($statement->fetch() == 1)
        {
            throw new Exception("User $user bestaat al!");
        }
    }

}

?>