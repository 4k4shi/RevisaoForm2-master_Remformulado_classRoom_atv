<?php

// Limpar dados para evitar possíveis scripts
function __e($input) {
    @$input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
function limparVetor($varPost) {
    $arrayLimpo = [];
    foreach ($varPost as $indice => $valor) {
        $arrayLimpo[$indice] = __e($valor);
    }
    return $arrayLimpo;
}

// Verificar se o formulário foi enviado
function formEnviado($postArray) {
    global $dados;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Limpar post
        $dados = limparVetor($postArray);
        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}

// Criar mensagem de erro
function gerarMensagensErro($postArray) {
    global $mensagem_erro;
    if (isset($postArray["prato_principal"]) && $postArray["prato_principal"] == "") {
        $mensagem_erro["prato_principal_vazio"] = "Informe um prato principal";
    }
    if(!isset($postArray["confirmar"]) || $postArray["confirmar"] == "off") {
        $mensagem_erro["não_confirmou"] = "faça a confirmação";
    }
    if(!isset($postArray["acompanhamento"]) || $postArray["acompanhamento"] == ""){
        $mensagem_erro["acompanhamento_vazio"] = "Marque ocompanhamento";
    }
    if(!isset($postArray["nome"]) || $postArray["nome"] == ""){
        $mensagem_erro["nome_vazio"] = "Marque ocompanhamento";
    }
    if(!isset($postArray["nome"]) || $postArray["nome"] == ""){
        $mensagem_erro["nome_vazio"] = "Insira o nome";
    }
    if(!isset($postArray["endereco"]) || $postArray["endereco"] == ""){
        $mensagem_erro["endereco_vazio"] = "insira o endereço";
    }
    if(!isset($postArray["telefone"]) || $postArray["telefone"] == ""){
        $mensagem_erro["telefone_vazio"] = "Insira o telefone";
    }
}
