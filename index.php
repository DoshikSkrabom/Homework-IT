<!DOCTYPE html>
<html lang="ru">
<link rel="icon" href="icon.ico" type="image/x-icon">
<link href="style.css" rel="stylesheet">

<header>
    <h1><?php bloginfo('name'); ?></h1>
</header>

<div class="topnav">
    <p class="background_2"> 
    <a class="active" href="index">Главная</a>
    <a href="images">Картиночки</a>
    <a href="video">Видео</a>
    <a href="music">Музычка</a>  
</div>
<body>
    <h1><b>Самая Главная Страница<b></h1>
    <div id="content">
        <aside>
            <nav>
                <ul>
                    <li><a class="active" href="index">Главная</a></li>
                    <li><a href="images">Картиночки</a></li>
                    <li><a href="video">Видео</a></li>
                    <li><a href="music">Музычка</a></li>
                </ul>
            </nav>
        </aside>
        <p>Страница для бытия главным.</p>
    </div>

    <?php get_footer(); ?>

    <footer> 
        <p>dariaryzhova103@gmail.com</p> 
        <p>2024</p> 
    </footer> 
</body> 
</p> 
</html>