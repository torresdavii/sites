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
					<p align="right"> Olá <?php include "valida_login.php"; ?> </p>
					<?php include "menu_local.php"; ?>               
				</div>
			</div>
			<div id="conteudo_especifico">
				<h1> RELATÓRIOS </h1>
				<ul type="none">
					<li><a href="rel_funcionarios_ativos.php">Relatório de Funcionários Ativos</a></li>
					<li><a href="rel_funcionarios_inativos.php">Relatório de Funcionários Inativos</a></li>
					<li><a href="rel_estoque.php">Relatório de amplificadores em estoque</a></li>
					<li><a href="rel_fornecedores.php">Relatório de fornecedores</a></li>
					<li><a href="rel_total_vendas.php">Faturamento total do mês</a></li>				
				</ul> 
			
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