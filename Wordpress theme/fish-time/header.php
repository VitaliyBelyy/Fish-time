<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>
<body class="clearfix">
    <header class='<?php echo ( is_home() || is_front_page() ) ? ' mainpage' : 'secondary' ?>'>
        <div class="wrap-info-header full-width">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <nav>
                            <ul class="top-btn-header">
                                <li><a href="#">Главная</a></li>
                                <li class="current-menu-item"><a href="#">Акции</a></li>
                            </ul>
                        </nav>
                        <div class="basket-order">
                            <span class="count">0</span>
                            <div class="wrap-list-order">
                                <ul>
                                    <li>Зеленый дракон 99 грн.
                                        <span class="delete-item"></span>
                                    </li>
                                    <li>Америка Ролл 69 грн.
                                        <span class="delete-item"></span>
                                    </li>
                                    <li>Зеленый дракон 99 грн.
                                        <span class="delete-item"></span>
                                    </li>
                                </ul>
                                <a href="#">Заказать</a>
                            </div>
                        </div>
                        <ul class="phone-number-header">
                            <li>093 456 78 90</li>
                            <li>093 456 78 90</li>
                            <li>093 456 78 90</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-mobile">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <div class="burger-icon">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                            <div class="basket-order">
                                <span class="count">0</span>
                                <div class="wrap-list-order">
                                    <ul>
                                        <li>Зеленый дракон 99 грн.
                                            <span class="delete-item"></span>
                                        </li>
                                        <li>Америка Ролл 69 грн.
                                            <span class="delete-item"></span>
                                        </li>
                                        <li>Зеленый дракон 99 грн.
                                            <span class="delete-item"></span>
                                        </li>
                                    </ul>
                                    <a href="#">Заказать</a>
                                </div>
                            </div>
                            <nav>
                                <a href="#">Главная</a>
                            </nav>
                            <a href="#" class="call"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-pick-up-menu">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-4 col-xs-4"></div>
                    <div class="col-md-9 col-sm-8 col-xs-8">
                        <div class="pick-info">
                            <div class="logo"></div>
                            <a href="#">Подобрать меню</a>
                            <p><span>Бесплатная доставка</span> от 200 грн.</p>
                            <a href="#" class="call"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <aside class="mobile-sidebar">
        <div class="top">
            <div class="logo"></div>
            <div class="toggle-icon" id="sidebar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        <ul>
            <li><a href="#">Роллы</a></li>
            <li><a href="#">Гарячие роллы</a></li>
            <li><a href="#">Сладкие роллы</a></li>
            <li><a href="#">Суши</a></li>
            <li><a href="#">Сеты</a></li>
            <li><a href="#">Рис\Лапша</a></li>
            <li><a href="#">Напитки</a></li>
        </ul>
    </aside>