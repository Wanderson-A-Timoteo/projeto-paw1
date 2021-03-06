<!DOCTYPE html>
<?php

    include("functions/functions.php");

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Belle Lingerie | Página Inicial</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
</head>
<body>
    <div class="main_wrapper">
        <div class="header_wrapper">
        <img src="images/logomarca.png" alt="Logomarca" id="logo">
        </div>
        
        <!--Cabeçalho -->
        <div class="menubar">
            <ul id="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Todos Produtos</a></li>
                <li><a href="#">Minha Conta</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
            <div id="form"> 
                <form action="result.php" method="get" enctype="multpart/form-data">
                <input type="text" name="user_query" id="" placeholder="Pesquisar Produtos">
                <input type="submit" value="Pesquisar" name="search">
                </form>
            </div>
        </div>

        <div class="content_wrapper">
            <div id="sidebar">
                <div id="sidebar_title"> Categorias </div>
                    <ul id="cats">
                        <?php
                            getCats();
                        ?>
                    </ul>

                    <div id="sidebar_title"> Marcas | Modelos </div>
                        <ul id="cats">
                        <?php
                            getMarca();
                        ?>
                        </ul>
                </div>
            <div id="content_area">content area</div>
            <div id="footer">rodape</div>
        </div>
    </div>
</body>
</html>