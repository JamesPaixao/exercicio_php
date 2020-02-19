<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Home</title>
        <style>
            #titulo h1{
                color: rgb(171, 34, 24);
            }
            #titulo h1::selection{
                background-color: white;
            }
            #texto p, #texto li{
                text-align: center;
                font: "Times New Roman";
                font-size: 25px;
                margin-top: 20px;
                margin-left: 20px;
                margin-right: 20px;
                list-style: upper-roman;
                color: #590e09;
            }
            #imagem{
                margin-left: 450px;
                padding-top: 40px;
                box-sizing: border-box;
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
                    <div id="titulo">
                        <h1>Seu site de operações matemáticas!</h1>
                    </div>
                    <div id="texto">
                        <p>Este site tem o único intuito de lhe mostrar algumas operações matemáticas básicas que lhe serão úteis. Divirta-se escolhendo uma das opções abaixo:</p>
                        <p>
                            - Média
                        </p>
                        <p>
                            - Calculadora Simples
                        </p>
                        <p>
                            - Tabuada
                        </p>
                        <p>
                            - Par e ímpar
                        </p>
                    </div>
                    <div id="imagem">
                        <img src="imagens/exemplo.gif" title="gif_geometrico">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <h1>James Paixão ©</h1>
        </footer>
    </body>
</html>