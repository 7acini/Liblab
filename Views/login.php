<!DOCTYPE html>
        <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Views/public/assets/css/style.css">
        <link rel="shortcut icon" type="image/jpg" href="images/art.png">
        <title>Login</title>
        <script src="js/script.js"></script>
        <script src="js/TopResponsivo.js"></script>
	</head>
    <body class="body" onload="document.form1.email.focus()">
        <div class="topnav" id="myTopnav">
            <a href="/" class="active"><i><b>LIB-LAB</b></i></a>
            <a href="/cadastro" class="right">Cadastrar</a>
            <a href="javascript:void(0);" class="icon" onclick="topResp()">
                <img src="images/menu.png" alt="menu" class="icomenu">
            </a>
        </div> 
		<div>
    		<form name="form1" id="form1" method="POST" action="/" onsubmit="return validaLog()"> 
    			<h1>Login</h1>
    			<label for="email">Email:</label>
    			<input type="text" name="email" minlength="5" maxlength="100" size="40" placeholder="Email" id="email" autocomplete="on">
    			<label for="pwd">Senha:</label>
    			<input type="password" name="pwd" minlength="5" maxlength="50" size="25" placeholder="Senha" id="pwd" onmouseover="focoSenha()"><br>
    			<input type="submit" name="submit" id="submit" value="Logar"><br>
    			<a href="cad01.php">Não tem conta? Cadastre-se</a>
    		</form>
    	</div>
	</body>
</html>