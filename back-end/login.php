<?php
include("conexao.php");

// Verifica se os dados foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM cadastro WHERE EMAIL = '$email' AND PASSWORD = '$password'";
    $result = mysqli_query($mySQLi, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../front-end/views/home.html");
        exit();
    } else {
        header("Location: ../front-end/views/login.html?error=invalid_credentials");
        exit();
    }
}
?>
