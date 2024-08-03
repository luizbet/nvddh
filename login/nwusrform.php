<?php

    if(isset($_POST['submit']))
    {
        print_r('Nome: ' - $_POST['nome']);
        print_r('<br>');
        print_r('Nome: ' - $_POST['sobrenome']);
        print_r('<br>');
        print_r('Nome: ' - $_POST['usrname']);
        print_r('<br>');
        print_r('Nome: ' - $_POST['email']);
        print_r('<br>');
        print_r('Nome: ' - $_POST['senha']);
        print_r('<br>');
        print_r('Nome: ' - $_POST['biousr']);
        print_r('<br>');
        print_r('Nome: ' - $_POST['lattesusr']);
        print_r('<br>');
        print_r('Nome: ' - $_POST['lattesid']);
        print_r('<br>');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVDDH - Novo usuário</title>
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
            height: 600px;
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
            height: 575px;
            border: 3px solid #CC5655;
            border-radius: 10px;
        }               
        legend{
            font-size: 20px;
            border: 3px solid #CC5655;
            background-color: #CC5655;
            padding: 10 px;
            text-align: center;
            border-radius: 8px;
            color: white;
        }
        .inputNome {
            position: absolute;
            width: 148px;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .inputSobrenome {
            position: absolute;
            left: 50%;
            width: 148px;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .inputUserName {
            position: absolute;
            width: 306px;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .inputUserEmail {
            position: absolute;
            width: 306px;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .inputUserSenha {
            position: absolute;
            width: 148px;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .inputUserConfsenha {
            position: absolute;
            left: 50%;
            width: 148px;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .inputUserBio {
            position: absolute;
            width: 306px;
            height: 100px;
            outline: none;
            background: none;
            border: 1px solid #858682;
        }
        .inputUserLattes {
            position: absolute;
            width: 306px;
            outline: none;
            background: none;
            border: none;
            border-bottom: 1px solid #858682;
        }
        .button{
            position: absolute;
            top: 550px;
            font-family: 'Monserrat';
            background-color: #CC5655;
            border: none;
            padding: 10px;
            width: 312px;
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
        <form action="nwusrform.php" method="POST">
            <fieldset>
                <legend><b>Novo usuário</b></legend>
                <br><br>
                <div>
                    <input type="text" placeholder="Nome" name="nome" id="nome" class="inputNome" required>
                    <input type="text" placeholder="Sobrenome" name="sobrenome" id="sobrenome" class="inputSobrenome" required>
                </div>
                <br><br><br>
                <div>
                    <input type="text" placeholder="Nome de usuário" name="usrname" id="username" class="inputUserName" required>
                </div>
                <br><br><br>
                <div>
                    <input type="email" placeholder="E-mail" name="email" id="email" class="inputUserEmail" required>
                </div>
                <br><br><br>
                <div>
                    <input type="password" placeholder="Senha" name="senha" id="senha" class="inputUserSenha" required>
                    <input type="password" placeholder="Confirme a senha" name="confsenha" id="confsenha" class="inputUserConfsenha" required>
                </div>
                <br><br><br>
                <div>
                    <textarea name="biousr" id="biousr" placeholder="Bio" class="inputUserBio" spellcheck="true" wrap="hard" style="resize: none;"></textarea>
                </div>
                <br><br><br><br><br><br><br>
                <div>
                    <input type="url" placeholder="Link do Lattes" name="lattesusr" id="lattesusr" class="inputUserLattes">
                </div>
                <br><br><br>
                <div>
                    <input type="text" placeholder="Id do Lattes" name="lattesid" id="lattesid" class="inputUserLattes">
                </div>
                <br><br><br>
                <input type="submit" name="submit" id="submit" class="button">
                <br>
            </fieldset>
        </form>
    </div>
</body>
</html>