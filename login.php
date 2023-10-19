<?php
//inicializa sessão do usuário
session_start();


//declara variaveis de conexão
$servername = "localhost"; //endereço do servidor local do mysql
$database = "forms"; //nome do banco de dados
$username = "root"; //nome do usuario
$password = ""; // senha do banco de dados

//abrir conexao
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Falha de conexão: ") . mysqli_connect_error();
}

//pega os dados de email e senha digitados pelo usuário no formulário
$email = $_POST["login"];
$senha = $_POST["password"];
//monta string sql capaz de consultar  todos os usuários com o email digitado pelo usuário
$sql = "SELECT * FROM usuario WHERE email='$email'";
//executa instrução no banco de dados
$res = mysqli_query($con, $sql);
//verifica se a instrução retornou algum registro
if ($row = mysqli_fetch_array($res)) {
    //confirmar se a senha é igual no BD
    if ($row["senha"] == $senha) {
        //se a senha for válida, mostra a mensagem de bem vindo em seguida pelo nome do usuário e um link para o menu
        echo "Seja bem vindoª ";
        echo $row["nome"];
        echo "<br/>";
        echo "<a href='index.php'>Menu</a>";
        //guarda o nome de usuário na sessão logada
        $_SESSION["nome"] = $row["nome"];
    } else {
        //se a senha não é igual, mostra mensagem de senha inválida
        echo "Senha inválida";
    }
} else {
    //se não encontrou nenhum registro na tabela para aquele usuário, mostra mensagem de erro
    echo "Usuário inválido";
}
mysqli_close($con);
?>