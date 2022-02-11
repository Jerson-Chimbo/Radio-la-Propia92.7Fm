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
                <div class="redes">
                <a href="https://www.facebook.com/lapropiafm927/about/?ref=page_internal" target="_blank"><img src="/public/asset/img/facebook.jfif" alt="facebook"></a>
                    <a href="https://instagram.com/lapropiafm?utm_medium=copy_link" target="_blank"><img src="/public/asset/img/instagram.jfif" alt="instagram"></a>
                    <a href="https://wa.link/9b616r" target="_blank"><img src="/public/asset/img/what.jfif" alt="WhatSapp"></a>
                    
                </div>
            </div>
            <nav class="header-in">
                <div class="cuadrado"> <a href="/"> Inicio </a></div>
                <div class="cuadrado"> <a href="/quienes-somos"> Quienes Somos</a></div>
                <div class="cuadrado"> <a href="/programacion"> Programación</a></div>
                <div class="cuadrado"> <a href="/servicios"> Serviciós</a></div>
                <div class="cuadrado ultimo"> <a href="/contactos"> Contactos</a></div>
            </nav>
        </div>
        <main class="main">

                <?= $content ?>

        </main>
        <footer class="footer">
                <aside class="footer-sup">
                    <div class="uno">Radio La Propia 92.7 FM 
                        siguiendo de cerca todas el deporte ecuatoriano. 
                        Llevamos 36 años junto a ti siendo la radio líder en sintonía.</div>
                    <div class="nav-footer">
                        <div><a href="/"> Inicio </a></div>
                        <div><a href="/quienes-somos"> Quienes Somos </a></div>
                        <div><a href="/programacion"> Programación</a> </div>
                        <div><a href="/servicios"> Serviciós </a></div>
                        <div><a href="/contactos"> Contactos </a> </div>
                    </div>
                    <div ><h3>Redes Sociales</h3>
                    <a href="https://www.facebook.com/lapropiafm927/about/?ref=page_internal" target="_blank"><img src="/public/asset/img/facebook.jfif" alt="facebook"></a>
                    <a href="https://instagram.com/lapropiafm?utm_medium=copy_link" target="_blank"><img src="/public/asset/img/instagram.jfif" alt="instagram"></a>
                    <a href="https://wa.link/9b616r" target="_blank"><img src="/public/asset/img/what.jfif" alt="WhatSapp"></a>
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