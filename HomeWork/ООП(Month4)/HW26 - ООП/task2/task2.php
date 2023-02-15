<?php

class User
{
    public string $email;
    public string $fullName;
    public string $login;
    public string $password;

    public function __construct($email, $fullName, $login, $password)
    {
        $this->email = $email;
        $this->login = $login;
        $this->fullName = $fullName;
        $this->password = $password;
    }

    public function login()
    {
        echo "Hello Dear " . $this->fullName . " ! Your emal: " . $this->email . "\n";
    }
}

function process($arr): void
{
    while (true) {
        echo "Login: ";
        $login = trim(fgets(STDIN));
        echo "Password: ";
        $password = trim(fgets(STDIN));

        foreach ($arr as $user) {
            if (($user->login == $login) && ($user->password) == $password) {
                $user->login();
                die("Bay Bay!!!");
            }
        }
        echo "Mistake\n";
    }
}

function getUsers(): array
{
    $users = file('Users.txt');
    $users = array_map('trim', $users);
    foreach ($users as $user => $value) {
        $signIn[$user] = explode(",", $value);
    }
    return $signIn;
}

$users = getUsers();
for ($i = 0; $i < count($users); $i++) {
    $user[$i] = new User($users[$i][0], $users[$i][1], $users[$i][2], $users[$i][3]);
}

process($user);

