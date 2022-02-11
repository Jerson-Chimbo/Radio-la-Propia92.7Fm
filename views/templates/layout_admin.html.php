<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/main.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-sup">
                <div class="logo">
                    <a href="/"><img src="/public/asset/img/propia.jfif" alt="radio"></a>
                    <span class="slogan">La radio mas grande del planeta</span>
                </div>
            </div>
            <?php if(isset($_SESSION['admin'])): ?>
            <nav class="header-in">
                <div class="cuadrado"> <a href="/admin/add/noticias"> Inresar Noticias </a></div>
                <div class="cuadrado"> <a href="/admin/list/noticias"> Opciones de Noticias </a></div>
                <div class="cuadrado"> <a href="/admin/add/servicios">Servicios</a></div>
                <div class="cuadrado-ul"> <a href="/admin/add/servicios">Salir</a></div>
                
            </nav>
        </div>
        <?php endif; ?>
        <main class="main">

                <?= $content ?>

        </main>
        <footer class="footer">
                <aside class="footer-sup">
                    <div class="uno">Radio La Propia 92.7 FM 
                        siguiendo de cerca todas el deporte ecuatoriano. 
                        Llevamos 36 años junto a ti siendo la radio líder en sintonía.</div>
                    <div class="nav-footer">
                        <div><a href=""> Inicio </a></div>
                        <div><a href=""> Quienes Somos </a></div>
                        <div><a href=""> Programación</a> </div>
                        <div><a href=""> Serviciós </a></div>
                        <div><a href=""> Contactanos </a> </div>
                    </div>
                    <div ><h3>Redes Sociales</h3>
                        <div class="redes-sociales redes">
                        <img src="/public/asset/img/facebook.jfif" alt="facebook">
                        <img src="/public/asset/img/instagram.jfif" alt="instagram">
                        <img src="/public/asset/img/what.jfif" alt="WhatSapp">
                        </div>
                        
                </div>
                </aside>
                <div class="footer-inf ">
                    &copy; 2022 Radio La Propia 92.7FM. Todos los derechos reservados.
                </div>
        </footer>
    </div>
</body>
</html>