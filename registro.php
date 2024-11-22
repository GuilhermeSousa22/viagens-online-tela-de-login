<?php
$pdo = new PDO('mysql:host=localhost;dbname=cadastro-usu', 'root', '');


if(isset($_POST['acao'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['csenha'];
    $salvar = $pdo->prepare("INSERT INTO `usuario` VALUES (null,?,?,?,?)");

    $salvar->execute(array($nome,$email,$senha,$confirmarsenha));
}

?>

<!DOCTYPE html>
<html lang="Pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viagens Online</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <div class= container>
        <div class="login">
            <div class="registro">
                <p>Registro</p>
            </div>

            <form action="" method="post">
            <div class="email-reg">
                <input type="email" id="email" name="email" placeholder="E-MAIL">
            </div>
            <div class="nome">
                <input type="text" id="nome" name="nome" placeholder="NOME COMPLETO">
            </div>
            <div class="senha-reg">
                <input type="password" id="senha" name="senha" placeholder="SENHA">
                </div>
                <div class="confirmar senha">
                <input type="password" id="confirmar senha" name="csenha" placeholder="CONFIRMAR SENHA">
                </div>
            <div>    

                <!-- <div class="btn-criar">
                <P>Criar conta </p>
                </div> -->
                <input type="submit" name="acao" value="Criar conta" class="btn-login" >
                </form>
                
            
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>