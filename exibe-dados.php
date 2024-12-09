<?php
session_start(); 
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : 'N/A';
$idade = isset($_SESSION['idade']) ? $_SESSION['idade'] : 'N/A';
$adocao = isset($_SESSION['adocao']) ? $_SESSION['adocao'] : 'N/A';
$tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'N/A';
$outroTipo = isset($_SESSION['outroTipo']) ? $_SESSION['outroTipo'] : '';
$vacinas = isset($_SESSION['vacinas']) ? $_SESSION['vacinas'] : [];
$cor = isset($_SESSION['cor']) ? $_SESSION['cor'] : 'N/A';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'N/A';
$telefone = isset($_SESSION['telefone']) ? $_SESSION['telefone'] : 'N/A';
$energia = isset($_SESSION['energia']) ? $_SESSION['energia'] : 'N/A';
$redeSocial = isset($_SESSION['redeSocial']) ? $_SESSION['redeSocial'] : 'N/A';
$raca = isset($_SESSION['raca']) ? $_SESSION['raca'] : 'N/A';
$castrado = isset($_SESSION['castrado']) ? $_SESSION['castrado'] : 'N/A';
$temperamento = isset($_SESSION['temperamento']) ? $_SESSION['temperamento'] : 'N/A';
$horarioPasseio = isset($_SESSION['horarioPasseio']) ? $_SESSION['horarioPasseio'] : 'N/A';
$foto = isset($_SESSION['foto']) ? $_SESSION['foto'] : '';
?>

<!DOCTYPE html> <!-- valeu renannnnnnn-->

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cadastro</title>
    <link rel="stylesheet" href="exibe-dados.css">
</head>
<body>
    <div class="container">
        <h1>🐾 Dados do Cadastro 🐾</h1>
        <ul>
            <li><strong>Nome do Animal:</strong> <?php echo $nome; ?></li>
            <li><strong>Idade do Animal:</strong> <?php echo $idade; ?> anos</li>
            <li><strong>Data de Adoção:</strong> <?php echo $adocao; ?></li>
            <li><strong>Tipo do Animal:</strong> <?php echo $tipo == 'Outro' ? $outroTipo : $tipo; ?></li>

            <?php if (!empty($vacinas)): ?>
                <li><strong>Vacinas Tomadas:</strong> <?php echo implode(', ', $vacinas); ?></li>
            <?php endif; ?>

            <li><strong>Cor preferida do perfil:</strong> <span style="background-color: <?php echo $cor; ?>; padding: 5px; color: white;"><?php echo $cor; ?></span></li>
            <li><strong>E-mail do Dono:</strong> <?php echo $email; ?></li>
            <li><strong>Telefone para Contato:</strong> <?php echo $telefone; ?></li>
            <li><strong>Nível de Energia:</strong> <?php echo $energia; ?></li>
            <li><strong>Rede Social do Pet:</strong> <?php echo $redeSocial; ?></li>
            <li><strong>Raça do Animal:</strong> <?php echo $raca; ?></li>
            <li><strong>O Animal é Castrado?</strong> <?php echo $castrado; ?></li>
            <li><strong>Temperamento do Animal:</strong> <?php echo $temperamento; ?></li>
            <li><strong>Horário Preferido para Passeio:</strong> <?php echo $horarioPasseio; ?></li>

            <?php if ($foto): ?>
                <li><strong>Foto do Animal:</strong></li>
                <li><img src="<?php echo $foto; ?>" alt="Foto do Animal" class="animal-foto"></li>
            <?php endif; ?>
        </ul>
        <button onclick="window.location.href='index.html'">Voltar para Página Inicial</button>
        <button type="button" id="devsButton" onclick="window.location.href='desenvolvedores.html'">👨‍💻 Conheça os Devs</button>
    </div>
</body>
</html>
<!-- andrei-->
