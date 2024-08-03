<?php

    include("dbconn.php");

    if(isset($_POST['usrname']) && strlen($_POST['usrname']) > 0)
    {
        if (!isset($_SESSION))
        session_start();

        $_SESSION['usrname'] = $mysqli->escape_string($_POST['usrname']);
        $_SESSION['senha'] = md5(md5($_POST['senha']));

        $sql_code = "SELECT senha, usrname, codigo FROM nvddhusrs WHERE usrname = '$_SESSION[usrname]'"; 
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        if($total == 0) {
            $erro[] = "Este usuário não pertence ao nosso banco de dados.";
        }else {
                if($dado['senha' == $_SESSION['senha'])
                {
                    $_SESSION['usrlogon'] = $dado['codigo']
                
                }else{
                    $erro[] = "Senha incorreta";
                }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVDDH - Login</title>
    <style>
        @font-face {
            font-family: 'Monserrat';
            src: url('../fonts/Montserrat-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body{
            font-family: 'Monserrat';
            color: white;
            background-color: #FFFEF8;
        }
        .box{
            position: absolute;
            width: 350px;
            height: 350px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            border-radius: 10px;
            background-color:  #E7E6DD;
        }
        fieldset{
            position: center;
            width: 315px;
            height: 325px;
            border: 3px solid #CC5655;
            border-radius: 10px;
        } 
        legend{
            font-size: 20px;
            border: 3px solid #CC5655;
            background-color: #CC5655;
            padding: 10 px;
            text-align: center;
            border-radius: 10px;
            color: white;
        }
        .inputUserName {
            width: 99%;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .inputUserSenha {
            width: 99%;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .linkstyle {
            font-size: 15px;
        }
        .button{
            font-family: 'Monserrat';
            background-color: #CC5655;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #AD4543;
            cursor: ;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Login</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" placeholder="Nome de usuário" name="username" id="username" class="inputUserName" required>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input type="password" placeholder="Senha" name="senha" id="senha" class="inputUserSenha" required>
                </div>
                <br><br><br>
                <a href="http://" class="linkstyle">Esqueceu a sua senha?</a>
                <br><br><br>
                <input type="submit" name="submit" id="submit" class="button">
                <br>
        </fieldset>
        </form>
    </div>
</body>
</html>