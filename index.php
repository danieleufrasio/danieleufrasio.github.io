<?php

ob_start();
require('./sheep_core/config.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Landing Page MSFLIX</title>
</head>
<body>
    <div class="holder">
        <header id="header">

          
            <div class="container">

               
                <nav class="navbar">
             

                 <div class="menulogo">

                    <a href="index.php" title="MSFLIX EAD Maycon Silveira" class="logo">MS<span style="color:#fa676d">FLIX</span></a>
                    <button type="button" class="menu-celular">
                        <i class="fas fa-bars"></i>
                    </button>
                 </div>
                <div class="menu-principal">
                    <ul class="ul-menu">
                        <li class="item-menu">
                            <a href="" class="link-menu" title="Home">Home</a>
                        </li>

                        <li class="item-menu">
                            <a href="" class="link-menu" title="Cursos">Cursos</a>
                        </li>
                
                   
                        <li class="item-menu">
                            <a href="" class="link-menu" title="Blog">Blog</a>
                        </li>
                 
                     
                        <li class="item-menu">
                            <a href="" class="link-menu" title="Canal">Canal</a>
                        </li>
                    </ul>
                </div>
                <div class="header-btns">
                    <a href="" class="btn btn-login">Login</a>
                    <a href="" class="btn btn-start">EAD</a>
                </div>
                
            
            </nav>

            <div class="banner">

                <div class="banner-esquerdo">
                    <h1 class="banner-titulo">Seja um programador <span>completo front-end e back-end</span></h1>
                   
                    <p class="banner-text">Aprenda a programar programando</p>

                    <form action="filtros/criar.php" method="post" class="header-form">
                        <div class="form-item">
                            <input type="email" name="email" class="form-control" placeholder="Digite o seu melhor email">
                            <button type="submit" class="submit-btn">Participe</button>
                        </div>
                    </form>
                    <ul class="social-links">
                        <li>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>

                </div>

                <div class="banner-direito">
                    <img src="assets/img/bg.jpg" alt="EAD MAYCONSILVEIRA.COM.BR">
                </div>

            </div>
                
            

            </div>
           

        </header>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>

