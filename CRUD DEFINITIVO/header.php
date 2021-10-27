<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/css8.css">   
    
    
</head>
<body>
    <div class="header">
        <div class="logo"><img src="IMAGENS/logo.png" alt="logo" width="100px"></div>
            <div class="CT">    
                <nav class="dp-menu">
                    <ul>    
                    <li><a href="#">Menu</a>
                        <ul>
                            <li><a href="?pagina=jogo">Jogo</a></li>
                            <li><a href="?pagina=serie">Série</a></li>
                            <li><a href="?pagina=filme">filme</a></li>
                            <li><a href="?pagina=cadastro">Cadastro</a></li>
                        </ul>
                        </li>
                
                    <li><?php if(isset($_SESSION['login'])){ ?>
                    <a href="logout.php">
                    <?php
                    echo $_SESSION['usuario']; ?>(sair)</a>
                    <?php } ?></li>
                    
                    </ul>
                </nav>
            </div>
    </div>
</body>

