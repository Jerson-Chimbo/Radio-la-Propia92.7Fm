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
                    <img src="/public/asset/img/propia.jfif" alt="radio">
                    <span class="slogan">La radio mas grande del planeta</span>
                </div>
                <div class="redes">
                    <img src="/public/asset/img/facebook.jfif" alt="facebook">
                    <img src="/public/asset/img/instagram.jfif" alt="instagram">
                    <img src="/public/asset/img/what.jfif" alt="WhatSapp">
                </div>
            </div>
            <nav class="header-in">
                <div class="cuadrado">Inicio</div>
                <div class="cuadrado">Quienes Somos</div>
                <div class="cuadrado">Programación</div>
                <div class="cuadrado">Serviciós</div>
                <div class="cuadrado ultimo">Contactanos</div>
            </nav>
        </div>
        <main class="main">
                <?= $content ?>
        </main>
        <footer class="footer">
                <aside class="footer-sup">
                    <div>Radio La Propia 92.7 FM 
                        siguiendo de cerca todas el deporte ecuatoriano. 
                        Llevamos 36 años junto a ti siendo la radio líder en sintonía.</div>
                    <div class="nav-footer">
                        <div>Inicio</div>
                        <div>Quienes Somos</div>
                        <div>Programación</div>
                        <div>Serviciós</div>
                        <div>Contactanos</div>
                    </div>
                    <div><h3>Redes Sociales</h3>
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                </div>
                </aside>
                <div class="footer-inf">
                    &copy; 2022 Radio La Propia 92.7FM. Todos los derechos reservados.
                </div>
        </footer>
    </div>
</body>
</html>