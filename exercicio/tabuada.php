<?php 
    require_once('funcoes/variaveis_e_constantes.php');
    require_once('funcoes/calculos.php');
    
    $tabuada = '';
    $contador = '';
    $operacao = (integer) 0;
    $situacao = false;
    
    if(isset($_POST['botao_calcular'])){
        $tabuada = $_POST['tabuada'];
        $contador = $_POST['contador'];
        if($tabuada == "" || $contador == "")
            echo(ERRO_CAIXA_VAZIA);
        elseif(!is_numeric($tabuada) || !is_numeric($contador))
            echo(ERRO_CARACTER_INVALIDO);
        elseif($tabuada == 0)
            echo(ERRO_TABUADA_ZERO);
        else{
            $situacao = true;   
        }
    }
?>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Tabuada</title>
        <style>
            body{
                color: darkslategrey;
                font: "Times New Roman";
                font-size: 18px;
                font-weight: bolder;
                overflow-x: scroll; 
                overflow-y: scroll; 
                white-space: nowrap; 
            }
            #container_conteudo{
                padding-top: 150px;
                box-sizing: border-box;
            }
            #container_tabuada{
                width: 500px;
                min-height: 500px;
                height: auto;
                background-color: darkslategray;
                margin-left: 450px;
            }
            #titulo{
                width: 100%;
                height: 50px;
            }
            #operacoes{
                width: 100%;
                height: 200px;
                background-color: white;
            }
            #resultado{
                width: 100%;
                height: 250px;
                background-color: seagreen;
                overflow-x: hidden; 
                overflow-y: scroll; 
                white-space: nowrap;
                color: white;
                text-align: center;
                padding: 5px;
                box-sizing: border-box;
                line-height: 1;
            }
            #text_tabuada{
                padding-top:50px;
                padding-left: 100px;
                box-sizing: border-box;
            }
            #text_contador{
                padding-top: 50px;
                padding-left: 100px;
                box-sizing: border-box;
            }
            #botao_calcular{
                color: white;
                background-color: darkslategrey;
                margin-left: 230px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Operações Matemáticas</h1>
            <div id="menu">
                <div id="icone_menu">
                    <div id="submenu">
                        <div class="submenu_item">
                            <a href="pagina_inicial.php"><p>Home</p></a>
                        </div>
                        <div class="submenu_item">
                            <a href="media.php"><p>Média</p></a>
                        </div>
                        <div class="submenu_item">
                            <a href="calculadora_if.php"><p>Calculadora If</p></a>
                        </div>
                        <div class="submenu_item">
                            <a href="calculadora_switch.php"><p>Calculadora Switch</p></a>
                        </div>
                        <div class="submenu_item">
                            <a href="tabuada.php"><p>Tabuada</p></a>
                        </div>
                        <div class="submenu_item">
                            <a href="par_impar.php"><p>Par e Ímpar</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="conteudo">
            <div class="container">
                <div id="container_conteudo">
                    <form name="form" method="post" action="">
                        <div id="container_tabuada">
                            <div id="titulo">
                               <h1>Tabuada</h1>                        
                            </div>
                            <div id="operacoes">
                                <div id="text_tabuada">
                                    Tabuada:
                                    <input type="text" name="tabuada" value="<?= $tabuada ?>">
                                </div>
                                <div id="text_contador">
                                    Contador:
                                    <input type="text" name="contador" value="<?= $contador ?>">
                                </div>
                                <input type="submit" name="botao_calcular" value="Calcular" id="botao_calcular">
                            </div>
                            <div id="resultado">
                                <?php $situacao == true ? $operacao = calcula_tabuada($tabuada, $contador) : ''; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <h1>James Paixão ©</h1>
        </footer>
    </body>
</html>