<?php
include("conexao.php");

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$date = $_POST['birth_date'];
$country = $_POST['country'];
$city = $_POST['city'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeat_password'];

if (!validarSenha($password)) {
    echo "<script>alert('A senha deve conter tanto letras quanto números. Por favor, tente novamente.');</script>";
    echo "<script>window.location.href='../front-end/views/cadastro.html?error=invalid_password';</script>";
    exit();
}

if ($password != $repeatpassword) {
    echo "<script>alert('As senhas não coincidem. Por favor, tente novamente.');</script>";
    echo "<script>window.location.href='../front-end/views/cadastro.html?error=password_mismatch';</script>";
    exit();
} else {
    //Valida se o usuário existe no banco
    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($mySQLi, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Parece que você já está cadastrado, por favor, faça o login.');</script>";
        echo "<script>window.location.href='../front-end/views/login.html?error=registration_successful';</script>";
        exit();
    } else {
        $sql = "INSERT INTO cadastro (NAME, LAST_NAME, DATE_BIRTH, COUNTRY, CITY, EMAIL, PASSWORD, REPEAT_PASSWORD) 
                VALUES ('$firstname', '$lastname', '$date', '$country', '$city', '$email', '$password', '$repeatpassword')";
    
        if ($mySQLi->query($sql) === TRUE) {
            // Redireciona para a página de login
            echo "<script>alert('Cadastro realizado com sucesso. Clique em OK para prosseguir.');</script>";
            echo "<script>window.location.href='../front-end/views/login.html?success=registration_successful';</script>";
            exit();
        } else {
            // Redireciona de volta para a página de cadastro com mensagem de erro
            echo "<script>alert('Falha no cadastro de usuário, por favor, verifique.');</script>";
            echo "<script>window.location.href='../front-end/views/cadastro.html?error=registration_failed';</script>";
            exit();
        }
    }

}

function validarSenha($senha) {
    // Verifica se a senha contém pelo menos uma letra e um número
    return preg_match('/[A-Za-z]/', $senha) && preg_match('/\d/', $senha);
}

?>
