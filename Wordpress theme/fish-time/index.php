    <?php get_header(); ?>
    <aside class="goods-menu">
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
    <main class="homepage">
        <div class="wrap-filter full-width">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-search full-width">
                            <select name="select-number-of-people" id="select-number-of-people">
                                <option selected>Кол-во человек</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                            <select name="select-category" id="select-category">
                                <option selected>Категория</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                            <select name="select-budget" id="select-budget">
                                <option selected>Бюджет</option>
                                <option>100</option>
                                <option>250</option>
                            </select>
                            <a href="#" class="btn-to-find">Найти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <section class="product-wrapper">
                        <header>
                            <h5>Маки Сякэ</h5>
                        </header>
                        <div class="thumbnail-wrapper">
                            <img src="images/sushi.png" alt="sushi">
                        </div>
                        <footer>
                            <span class="product-price">39грн</span>
                            <a href="#" class="add">в корзину</a>
                            <a href="#" class="remove"></a>
                        </footer>
                    </section>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <section class="product-wrapper">
                        <header>
                            <h5>Маки Сякэ</h5>
                        </header>
                        <div class="thumbnail-wrapper">
                            <img src="images/sushi.png" alt="sushi">
                        </div>
                        <footer>
                            <span class="product-price">39грн</span>
                            <a href="#" class="add">в корзину</a>
                            <a href="#" class="remove"></a>
                        </footer>
                    </section>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <section class="product-wrapper">
                        <header>
                            <h5>Маки Сякэ</h5>
                        </header>
                        <div class="thumbnail-wrapper">
                            <img src="images/sushi.png" alt="sushi">
                        </div>
                        <footer>
                            <span class="product-price">39грн</span>
                            <a href="#" class="add">в корзину</a>
                            <a href="#" class="remove"></a>
                        </footer>
                    </section>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <section class="product-wrapper">
                        <header>
                            <h5>Маки Сякэ</h5>
                        </header>
                        <div class="thumbnail-wrapper">
                            <img src="images/sushi.png" alt="sushi">
                        </div>
                        <footer>
                            <span class="product-price">39грн</span>
                            <a href="#" class="add">в корзину</a>
                            <a href="#" class="remove"></a>
                        </footer>
                    </section>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <section class="total">
                        <div class="total-count">
                            <span>Итого: 599грн</span>
                        </div>
                        <div class="functional-buttons">
                            <a href="#" class="total-add">В корзину</a>
                            <a href="#" class="total-remove">Сбросить</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>