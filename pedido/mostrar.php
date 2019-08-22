<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post

formEnviado($_POST);

// 
gerarMensagensErro($dados);

if(!empty($mensagem_erro)){
	foreach ($mensagem_erro as $nomeErro => $valorErro) 		
		echo $valorErro."<br>";
	echo "<a href='javascript:history.back()'><-Voltar</a>";
}else{
	foreach ($dados as $nome => $valores) 
		if($nome == "adicional"){
			echo "Adicionais: <br/>";
			foreach ($ad as $adNome => $adValores) 
				echo "<p style='margin: 0px 0px 0px 20px;'>".$adValores."</p>";
		}else{
			if($nome == "confirmar"){
				if($valores == "on"){
					echo "Condição: aceito<br/>";
				}elseif($valores == "off"){
					echo "Condição:  negado<br/>";
				}
			}else{
				echo $nome.": ".$valores."<br>";
			}
		}
}

?>