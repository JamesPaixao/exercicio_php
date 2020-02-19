<?php 
    
    // Definindo todas as saídas de dados padronizados para o português brasileiro
    setlocale(LC_ALL, "pt_BR");

    // CONSTANTES PARA ERROS 
    define("ERRO_CAIXA_VAZIA", "<span class='msg'>Por favor, inserir dados nas caixas de texto, o sistema não pode realizar o cálculo!</span>");
    const ERRO_CARACTER_INVALIDO = "<span class='msg'>Não foi possível calcular, pois o caracter digitado é inválido. Digite apenas números!</span>";
    const ERRO_OPCAO_DESMARCADA = "<span class='msg'>Selecione uma opção de cálculo!</span>";
    const ERRO_DIVISAO = "<span class='msg'>Erro de divisão por 0. Não é possível calcular quando o divisor é 0!</span>";
    const ERRO_TABUADA_ZERO = "<span class='msg'>Erro de tabuada por 0. Não existe tabuada do 0!</span>";
?>