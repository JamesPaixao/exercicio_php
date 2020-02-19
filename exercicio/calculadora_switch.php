
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Calculadora - Switch</title>
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
            #container_calculadora{
                width: 500px;
                min-height: 570px;
                height: auto;
                background-color: darkslategray;
                margin-left: 450px;
            }
            #titulo{
                width: 100%;
                height: 50px;
            }
            #valores{
                width: 100%;
                height: 100px;
                background-color: black;
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
                    <div id="container_calculadora">
                        <div id="titulo">
                            <h1>Calculadora Simples</h1>
                        </div>
                        <div id="valores">
                            <div class="input_valores">
                                Valor 1:
                                <input type="text" name="valor1" value="<?= $valor1 ?>">
                            </div>
                            <div class="input_valores">
                                Valor 2:
                                <input type="text" name="valor2" value="<?= $valor2 ?>">
                            </div>
                        </div>
                        <div id="operacoes">
                            <div id="opcoes">
                                <div class="input_opcoes">
                                    <input type="radio" name="rdo_operacoes" value="soma" <?php if($operacao == 'soma') echo('checked');?>>Soma
                                </div>
                                <div class="input_opcoes">
                                    <input type="radio" name="rdo_operacoes" value="subtracao" <?= $chk_subtrair ?>>Subtração
                                </div>
                                <div class="input_opcoes">
                                    <input type="radio" name="rdo_operacoes" value="multiplicacao" <?= $operacao == 'multiplicacao' ? 'checked' : '';?>>Multiplicação
                                </div>
                                <div class="input_opcoes">
                                    <input type="radio" name="rdo_operacoes" value="divisao" <?= $operacao == 'divisao' ? 'checked' : '';?>>Divisão
                                </div>
                                <input type="submit" name="btn_calcular" value="Calcular" id="btn_calcular">
                            </div>
                            <div id="resultado">
                                <!--Faz arredondamento de valores e ajusta casas decimais -->
                                <?= round($resultado, 2) ?>
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