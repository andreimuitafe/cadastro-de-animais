<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $_SESSION['nome'] = htmlspecialchars($_POST['nome']);
    $_SESSION['idade'] = htmlspecialchars($_POST['idade']);
    $_SESSION['adocao'] = htmlspecialchars($_POST['adocao']);
    $_SESSION['tipo'] = htmlspecialchars($_POST['tipo']);
    $_SESSION['outroTipo'] = isset($_POST['outro-tipo']) ? htmlspecialchars($_POST['outro-tipo']) : '';
    $_SESSION['vacinas'] = isset($_POST['vacinas']) ? $_POST['vacinas'] : [];
    $_SESSION['cor'] = htmlspecialchars($_POST['cor']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['telefone'] = htmlspecialchars($_POST['telefone']);
    $_SESSION['energia'] = htmlspecialchars($_POST['energia']);
    $_SESSION['redeSocial'] = htmlspecialchars($_POST['rede_social']);
    $_SESSION['raca'] = htmlspecialchars($_POST['raca']);
    $_SESSION['castrado'] = htmlspecialchars($_POST['castrado']);
    $_SESSION['temperamento'] = htmlspecialchars($_POST['temperamento']);
    $_SESSION['horarioPasseio'] = htmlspecialchars($_POST['horario-passeio']);

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $fotoTemp = $_FILES['foto']['tmp_name'];
        $fotoNome = $_FILES['foto']['name'];
        $fotoDestino = 'uploads/' . basename($fotoNome);

        if (move_uploaded_file($fotoTemp, $fotoDestino)) {
            $_SESSION['foto'] = $fotoDestino;
        } else {
            $_SESSION['foto'] = 'Erro ao enviar a foto';
        }
    }

    header("Location: exibe-dados.php");
    exit();
}
?>
<!-- 
 
andrei

 referências:
 https://www.w3schools.com/php/default.asp
 https://www.youtube.com/watch?v=WE0OLNYE00E
 
 Renan e Ryan Coxinha ajudaram bastante :D
 Utilizei o XAMPP. -->
