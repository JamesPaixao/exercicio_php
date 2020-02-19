<?php
    $nota1 = '';
    $nota2 = '';
    $nota3 = '';
    $nota4 = '';
    $media = '';
    // Verificando se o formulário foi submetido
    // isset() = verifica a existência de um elemento, variável ou formulários
    if(isset($_GET['btn_calcular'])) {
        
    // Recebe todos os valores recebidos pelo usuário, que são enviados pelo <form> [metodo GET]
    $nota1 = $_GET['txt_nota1'];
    $nota2 = $_GET['txt_nota2'];
    $nota3 = $_GET['txt_nota3'];
    $nota4 = $_GET['txt_nota4'];
    
    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
    }
?>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Calculo de Médias</title>
        <style>
            #container_conteudo{
                padding-top: 150px;
                box-sizing: border-box;
            }
            #div_media{
                width: 500px;
                height: 467px;
                background-color:forestgreen;
                margin-left: auto;
                margin-right: auto;
                border: solid 2px white;
            }
            #div_titulo{
                width: inherit;
                height: 40px;
            }
            #div_form{
                width: inherit;
                height: 350px;
                background-color: aliceblue;
            }
            #div_resultado{
                width: inherit;
                height: 37px;
                padding-top: 20px;
            }
            h1{
                font-family: "Times New Roman";
                font-size: 30px;
                text-align: center;
                color: white;
            }
            p{
                font-family: "Times New Roman";
                font-size: 23px;
                text-align: center;
                color: white;
                padding-bottom: 10px;
            }
            .form_notas{
                margin-left: 100px;
                padding: 30px;
                box-sizing: border-box;
            }
            #btn_calcular{
                margin-top: -20px;
                margin-left: 230px;
                background-color: palegreen;
                color: forestgreen;
                font-weight: bold;
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
                    <div id="div_media">
                        <div id="div_titulo">
                            <h1>Cálculo de Médias</h1>
                        </div>
                        <div id="div_form">
                            <form name="form" method="get" action="">
                                <div class="form_notas">
                                 Nota 1:
                                <input type="text" name="txt_nota1" value="<?=$nota1?>">
                                </div>
                                <div class="form_notas">
                                Nota 2:
                                <input type="text" name="txt_nota2" value="<?=$nota2?>">
                                </div>
                                <div class="form_notas">
                                Nota 3:
                                <input type="text" name="txt_nota3" value="<?=$nota3?>">
                                </div>
                                <div class="form_notas">
                                Nota 4:
                                <input type="text" name="txt_nota4" value="<?=$nota4?>">
                                </div>
                                <input type="submit" name="btn_calcular" value="Calcular" id="btn_calcular">
                            </form>   
                        </div>
                        <div id="div_resultado">
                            <p>A média é: <?php echo($media) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <h1>James Paixão ©</h1>
        </footer>
    </body>
</html>