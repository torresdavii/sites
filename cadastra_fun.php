﻿<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> ROCK N´ROLL </h1>
					<h1> Amplificadores </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<p align="right"> Olá <?php include "valida_login.php";?> </p>
					<?php include "menu_local.php"; ?>               
				</div>
			</div>
			<div id="conteudo_especifico">
				
				<h1> CADASTRO DE FUNCIONÁRIOS </h1>
			
				<form method="post" action="processa_cadastra_fun.php">
					
					 
				    <h2> Nome: </h2>
						<input type="text" name="nome" required> 
					<p> Função: 						
					
						<input type="radio" name="funcao" value="estoquista" checked> Estoquista
						<input type="radio" name="funcao" value="vendedor"> Vendedor  
					</p>
			
					<h2> Login: </h2> 
						<input type="text" name="login" required>  
					
							
					<h2> Senha: </h2>   
						<input type="password" name="senha" required> 
					
					<p> <input id="botao" type="submit" value="Cadastrar Funcionário">  </p>
							
				</form>
								
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>