<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500&amp;subset=cyrillic" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-1.8.2.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}" defer></script>
        <script src="{{ asset('js/os-detection.js') }}" defer></script>
        <script src="{{ asset('js/jquery.colorbox.js') }}" defer></script>
        <script src="{{ asset('js/jquery.uniform.min.js') }}" defer></script>
        <script src="{{ asset('js/slick.min.js') }}" defer></script>
        <script src="{{ asset('js/html5shiv.js') }}" defer></script>
        <script src="{{ asset('js/jquery.matchHeight-min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.maskedinput.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>

    <div class="at-gWrapper">
        <div class="at-cWrapper">
            <div class="wrapper-cell">
                <div class="js-width-sync">
                    <div class="at-index-banner-wrap">
                        <div class="at-index-banner js-index-banner">
                            <div>
                                <img src="images/media/index-banner.png" alt="">

                                <div class="slide-content">
                                    <div class="name">
                                        Автозапчасти - наша тема <br/>
                                        и мы делаем ее лучше!
                                    </div>

                                    <div class="text">
                                        Разработка интернет сайтов автозапчастей,<br/>
                                        авто каталогов и автоматизация авто бизнеса
                                    </div>

                                    <a class="slide-button" href="#">
                                        Подробнее
                                    </a>
                                </div>
                            </div>

                            <div>
                                <img src="images/media/index-banner.png" alt="">

                                <div class="slide-content">
                                    <div class="name">
                                        Автозапчасти - наша тема <br/>
                                        и мы делаем ее лучше!
                                    </div>

                                    <div class="text">
                                        Разработка интернет сайтов автозапчастей,<br/>
                                        авто каталогов и автоматизация авто бизнеса
                                    </div>

                                    <a class="slide-button" href="#">
                                        Подробнее
                                    </a>
                                </div>
                            </div>

                            <div>
                                <img src="images/media/index-banner.png" alt="">

                                <div class="slide-content">
                                    <div class="name">
                                        Автозапчасти - наша тема <br/>
                                        и мы делаем ее лучше!
                                    </div>

                                    <div class="text">
                                        Разработка интернет сайтов автозапчастей,<br/>
                                        авто каталогов и автоматизация авто бизнеса
                                    </div>

                                    <a class="slide-button" href="#">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="at-car-picker">
                        <div class="at-mainer">
                            <h3>Подбор по модели автомобиля</h3>
                            <div class="light-text">
                                Выбрав автомобиль вы сможете получить список запчастей подходящих к вашему автомобилю.
                            </div>

                            <div class="selector">
                                <div class="part" style="width: 153px;">
                                    <div class="at-custom-select-wrap">
                                        <div class="js-select-custom-drop">
                                            <select class="js-select">
                                                <option value="0">Выберите год</option>
                                            </select>
                                        </div>

                                        <div class="select-drop" style="display: none;">
                                            <div class="select-drop-inner">
                                                <table>
                                                    <tr>
                                                        <td class="year">1980-е</td>
                                                        <td><a href="#">1980</a></td>
                                                        <td><a href="#">1981</a></td>
                                                        <td><a href="#">1982</a></td>
                                                        <td><a href="#">1983</a></td>
                                                        <td><a href="#">1984</a></td>
                                                        <td><a href="#">1985</a></td>
                                                        <td><a href="#">1986</a></td>
                                                        <td><a href="#">1987</a></td>
                                                        <td><a href="#">1988</a></td>
                                                        <td><a href="#">1989</a></td>
                                                    </tr>
                                                </table>
                                                <table>
                                                    <tr>
                                                        <td class="year">1990-е</td>
                                                        <td><a href="#">1990</a></td>
                                                        <td><a href="#">1991</a></td>
                                                        <td><a href="#">1992</a></td>
                                                        <td><a href="#">1993</a></td>
                                                        <td><a href="#">1994</a></td>
                                                        <td><a href="#">1995</a></td>
                                                        <td><a href="#">1996</a></td>
                                                        <td><a href="#">1997</a></td>
                                                        <td><a href="#">1998</a></td>
                                                        <td><a href="#">1999</a></td>
                                                    </tr>
                                                </table>
                                                <table>
                                                    <tr>
                                                        <td class="year">2000-е</td>
                                                        <td><a href="#">2000</a></td>
                                                        <td><a href="#">2001</a></td>
                                                        <td><a href="#">2002</a></td>
                                                        <td><a href="#">2003</a></td>
                                                        <td><a href="#">2004</a></td>
                                                        <td><a href="#">2005</a></td>
                                                        <td><a href="#">2006</a></td>
                                                        <td><a href="#">2007</a></td>
                                                        <td><a href="#">2008</a></td>
                                                        <td><a href="#">2009</a></td>
                                                    </tr>
                                                </table>
                                                <table>
                                                    <tr>
                                                        <td class="year">2010-е</td>
                                                        <td><a href="#">2010</a></td>
                                                        <td><a href="#">2011</a></td>
                                                        <td><a href="#">2012</a></td>
                                                        <td><a href="#">2013</a></td>
                                                        <td><a href="#">2014</a></td>
                                                        <td><a href="#">2015</a></td>
                                                        <td><a href="#">2016</a></td>
                                                        <td><a href="#">2017</a></td>
                                                        <td><a href="#">2018</a></td>
                                                        <td><a href="#">2019</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="part">
                                    <select class="js-select">
                                        <option value="">Выберите марку</option>
                                        <option value="">Выберите марку</option>
                                        <option value="">Выберите марку</option>
                                    </select>
                                </div>
                                <div class="part">
                                    <select class="js-select">
                                        <option value="">Выберите модель</option>
                                        <option value="">Выберите модель</option>
                                        <option value="">Выберите модель</option>
                                    </select>
                                </div>
                                <div class="part">
                                    <select class="js-select" disabled>
                                        <option value="">Тип кузова</option>
                                        <option value="">Тип кузова</option>
                                        <option value="">Тип кузова</option>
                                    </select>
                                </div>
                                <div class="part">
                                    <select class="js-select" disabled>
                                        <option value="">Двигатель</option>
                                        <option value="">Двигатель</option>
                                        <option value="">Двигатель</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="at-mainer">
                        <h2>Выберите группу</h2>

                        <ul class="at-index-cats">
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-1.png')">
                                    <div class="name">Запчасти для ТО</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-2.png')">
                                    <div class="name">Тормозная система</div>
                                    <a href="#">Тормозные колодки</a><br/>
                                    <a href="#">Тормозной диск</a><br/>
                                    <a href="#">Тормозной барабан</a><br/>
                                    <a href="#">Тормозной суппорт </a><br/>
                                    <a href="#">Колесный тормозной цилиндр</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-3.png')">
                                    <div class="name">Двигатель</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-4.png')">
                                    <div class="name">Подвеска и Рулевое</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-5.png')">
                                    <div class="name">Коробка передач</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-6.png')">
                                    <div class="name">Охлаждение и Отопление</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-7.png')">
                                    <div class="name">Электрика и Освещение</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-8.png')">
                                    <div class="name">Кузов</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                            <li>
                                <div class="at-index-cat-thumb"
                                     style="background-image: url('images/media/index-cat-9.png')">
                                    <div class="name">Смазки и Жидкости</div>
                                    <a href="#">Масляный фильтр</a><br/>
                                    <a href="#">Воздушный фильтр</a><br/>
                                    <a href="#">Топливный фильтр</a><br/>
                                    <a href="#">Фильтр салона</a><br/>
                                    <a href="#">Свечи зажигания</a><br/>

                                    <div class="show-more"><a href="#">Показать все</a></div>
                                </div>
                        </ul>

                        <div class="at-index-cats-mob-list">
                            <a href="#">Тормозная система</a>
                            <a href="#">Коробка передач</a>
                            <a href="#">Кузов</a>
                        </div>

                        <h2 class="at-index-brands-title">Подбор запчастей по автомобилю</h2>

                        <div class="at-index-brands">
                            <div class="at-toggler js-brands-lists-toggle">
                                <a class="selected" href="javascript:void(0);" data-type="thumbs"></a>
                                <a href="javascript:void(0);" data-type="list"></a>
                                <div class="clear"></div>
                            </div>

                            <div class="container thumbs">
                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-1.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">ACURA</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-2.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">SSANGYONG</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-3.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">NISSAN</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-4.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">RENAULT</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-5.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">SKODA</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-6.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">VOLVO</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-7.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">CHEVROLET</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-8.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">KIA</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-9.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">HYUNDAI</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-10.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">LEXUS</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-11.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">DAIHATSU</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-12.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">MERCEDESBENZ</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-13.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">CHEVROLET</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-14.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">VOLKSWAGEN</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-15.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">TOYOTA</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-16.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">SEAT</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-17.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">MITSUBISHI</span>
                                </a>

                                <a class="at-brand-thumb" href="#">
                                    <span class="image"><i><img src="images/media/index-brand-18.png" alt=""></i></span>
                                    <span class="caption">Запчасти</span>
                                    <span class="brand">FORD</span>
                                </a>

                                <div class="at-brand-thumb empty"></div>
                                <div class="at-brand-thumb empty"></div>
                                <div class="at-brand-thumb empty"></div>
                                <div class="at-brand-thumb empty"></div>
                                <div class="at-brand-thumb empty"></div>
                                <div class="at-brand-thumb empty"></div>

                                <div class="show-more">
                                    <a href="javascript:void(0);" class="at-btn">Показать все</a>
                                </div>
                            </div>

                            <div class="container list" style="display: none">
                                <ul class="at-brands-list">
                                    <li><a href="#">Запчасти ACURA</a></li>
                                    <li><a href="#">Запчасти ALFAROMEO</a></li>
                                    <li><a href="#">Запчасти AUDI</a></li>
                                    <li><a href="#">Запчасти BMW</a></li>
                                    <li><a href="#">Запчасти CADILLAC</a></li>
                                    <li><a href="#">Запчасти CHEVROLET</a></li>
                                    <li><a href="#">Запчасти CHRYSLER</a></li>
                                    <li><a href="#">Запчасти DACIA</a></li>
                                    <li><a href="#">Запчасти DAEWOO</a></li>
                                    <li><a href="#">Запчасти DAF</a></li>
                                    <li><a href="#">Запчасти ACURA</a></li>
                                    <li><a href="#">Запчасти ALFAROMEO</a></li>
                                    <li><a href="#">Запчасти AUDI</a></li>
                                    <li><a href="#">Запчасти BMW</a></li>
                                    <li><a href="#">Запчасти CADILLAC</a></li>
                                    <li><a href="#">Запчасти CHEVROLET</a></li>
                                    <li><a href="#">Запчасти CHRYSLER</a></li>
                                    <li><a href="#">Запчасти DACIA</a></li>
                                    <li><a href="#">Запчасти DAEWOO</a></li>
                                    <li><a href="#">Запчасти DAF</a></li>
                                    <li><a href="#">Запчасти ACURA</a></li>
                                    <li><a href="#">Запчасти ALFAROMEO</a></li>
                                    <li><a href="#">Запчасти AUDI</a></li>
                                    <li><a href="#">Запчасти BMW</a></li>
                                    <li><a href="#">Запчасти CADILLAC</a></li>
                                    <li><a href="#">Запчасти CHEVROLET</a></li>
                                    <li><a href="#">Запчасти CHRYSLER</a></li>
                                    <li><a href="#">Запчасти DACIA</a></li>
                                    <li><a href="#">Запчасти DAEWOO</a></li>
                                    <li><a href="#">Запчасти DAF</a></li>
                                    <li><a href="#">Запчасти ACURA</a></li>
                                    <li><a href="#">Запчасти ALFAROMEO</a></li>
                                    <li><a href="#">Запчасти AUDI</a></li>
                                    <li><a href="#">Запчасти BMW</a></li>
                                    <li><a href="#">Запчасти CADILLAC</a></li>
                                    <li><a href="#">Запчасти CHEVROLET</a></li>
                                    <li><a href="#">Запчасти CHRYSLER</a></li>
                                    <li><a href="#">Запчасти DACIA</a></li>
                                    <li><a href="#">Запчасти DAEWOO</a></li>
                                    <li><a href="#">Запчасти DAF</a></li>
                                    <li><a href="#">Запчасти ACURA</a></li>
                                    <li><a href="#">Запчасти ALFAROMEO</a></li>
                                    <li><a href="#">Запчасти AUDI</a></li>
                                    <li><a href="#">Запчасти BMW</a></li>
                                    <li><a href="#">Запчасти CADILLAC</a></li>
                                    <li><a href="#">Запчасти CHEVROLET</a></li>
                                    <li><a href="#">Запчасти CHRYSLER</a></li>
                                    <li><a href="#">Запчасти DACIA</a></li>
                                    <li><a href="#">Запчасти DAEWOO</a></li>
                                    <li><a href="#">Запчасти DAF</a></li>
                                </ul>

                                <div class="show-more">
                                    <a href="javascript:void(0);" class="at-btn">Показать все</a>
                                </div>
                            </div>
                        </div>

                        <h2>Популярные товары</h2>

                        <div class="at-product-carousel js-product-carousel">
                            <div class="line">
                                <div>
                                    <div class="at-thumb-element ready">
                                        <div class="inner-wrap">
                                            <a href="#" class="image">
                                                <img class="fake" src="images/plist-thumb-mask.png" alt="">
                                                <img class="real" src="images/media/no-photo-thumbs.png" alt="">

                                                <span class="fav"></span>
                                                <span class="com"></span>
                                            </a>

                                            <div class="name x3-overflow">
                                                Защитный колпачек
                                                амортизатора
                                                SWAG  30 60 0040
                                            </div>

                                            <div class="price">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>

                                            <div class="price-old">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>
                                        </div>

                                        <div class="extend">
                                            <div class="buy">
                                                <a href="#" class="at-btn">Купить</a>
                                            </div>

                                            <div class="extra">
                                                Вес [кг]: 0.03 <br />
                                                Внутренний диаметр: 25.00 <br />
                                                Длина [мм]: 25.00 <br />
                                                Материал: резина <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="at-thumb-element ready">
                                        <div class="inner-wrap">
                                            <a href="#" class="image">
                                                <img class="fake" src="images/plist-thumb-mask.png" alt="">
                                                <img class="real" src="images/media/no-photo-thumbs.png" alt="">

                                                <span class="fav"></span>
                                                <span class="com"></span>

                                                <span class="action new">НОВИНКА</span>
                                            </a>

                                            <div class="name x3-overflow">
                                                Защитный колпачек
                                                амортизатора
                                                SWAG  30 60 0040
                                            </div>

                                            <div class="price">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>

                                            <div class="price-old">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>
                                        </div>

                                        <div class="extend">
                                            <div class="buy">
                                                <a href="#" class="at-btn">Купить</a>
                                            </div>

                                            <div class="extra">
                                                Вес [кг]: 0.03 <br />
                                                Внутренний диаметр: 25.00 <br />
                                                Длина [мм]: 25.00 <br />
                                                Материал: резина <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="at-thumb-element ready">
                                        <div class="inner-wrap">
                                            <a href="#" class="image">
                                                <img class="fake" src="images/plist-thumb-mask.png" alt="">
                                                <img class="real" src="images/media/list-hover-img.png" alt="">

                                                <span class="fav"></span>
                                                <span class="com"></span>
                                            </a>

                                            <div class="name x3-overflow">
                                                Защитный колпачек
                                                амортизатора
                                                SWAG  30 60 0040
                                            </div>

                                            <div class="price">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>

                                            <div class="price-old">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>
                                        </div>

                                        <div class="extend">
                                            <div class="buy">
                                                <a href="#" class="at-btn">Купить</a>
                                            </div>

                                            <div class="extra">
                                                Вес [кг]: 0.03 <br />
                                                Внутренний диаметр: 25.00 <br />
                                                Длина [мм]: 25.00 <br />
                                                Материал: резина <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="at-thumb-element ready">
                                        <div class="inner-wrap">
                                            <a href="#" class="image">
                                                <img class="fake" src="images/plist-thumb-mask.png" alt="">
                                                <img class="real" src="images/media/no-photo-thumbs.png" alt="">

                                                <span class="fav"></span>
                                                <span class="com"></span>
                                                <span class="action">АКЦИЯ</span>
                                            </a>

                                            <div class="name x3-overflow">
                                                Защитный колпачек
                                                амортизатора
                                                SWAG  30 60 0040
                                            </div>

                                            <div class="price">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>

                                            <div class="price-old">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>
                                        </div>

                                        <div class="extend">
                                            <div class="buy">
                                                <a href="#" class="at-btn">Купить</a>
                                            </div>

                                            <div class="extra">
                                                Вес [кг]: 0.03 <br />
                                                Внутренний диаметр: 25.00 <br />
                                                Длина [мм]: 25.00 <br />
                                                Материал: резина <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="at-thumb-element ready">
                                        <div class="inner-wrap">
                                            <a href="#" class="image">
                                                <img class="fake" src="images/plist-thumb-mask.png" alt="">
                                                <img class="real" src="images/media/no-photo-thumbs.png" alt="">

                                                <span class="fav"></span>
                                                <span class="com"></span>
                                            </a>

                                            <div class="name x3-overflow">
                                                Защитный колпачек
                                                амортизатора
                                                SWAG  30 60 0040
                                            </div>

                                            <div class="price">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>

                                            <div class="price-old">
                                                <span>177.15</span>
                                                <span class="cur">грн</span>
                                            </div>
                                        </div>

                                        <div class="extend">
                                            <div class="buy">
                                                <a href="#" class="at-btn">Купить</a>
                                            </div>

                                            <div class="extra">
                                                Вес [кг]: 0.03 <br />
                                                Внутренний диаметр: 25.00 <br />
                                                Длина [мм]: 25.00 <br />
                                                Материал: резина <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="at-index-blog controls">
                            <h2>Новости и статьи</h2>

                            <div class="blog-list js-blog-slider">
                                <div class="blog-item">
                                    <a href="#" class="image"
                                       style="background-image: url('images/media/index-blog-1.png')">
                                        <img src="images/blog-mask.png" alt="">
                                    </a>

                                    <a href="#" class="name">Дизельные двигатели концерна "Fiat Chrysler" попали под
                                        подозрение</a>

                                    <div class="date">25 октября 2017</div>

                                    <div class="text">
                                        Новая серийная модель автомобиля Audi Q8 поступит в продажу в следующем году, но уже
                                        стали известные некоторые подробности об оформлении и технических характеристиках
                                        кроссовера...
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <a href="#" class="image"
                                       style="background-image: url('images/media/index-blog-2.png')">
                                        <img src="images/blog-mask.png" alt="">
                                    </a>

                                    <a href="#" class="name">Кроссовер Audi Q8 (2018): каким он будет?</a>

                                    <div class="date">25 октября 2017</div>

                                    <div class="text">
                                        Новая серийная модель автомобиля Audi Q8 поступит в продажу в следующем году, но уже
                                        стали известные некоторые подробности об оформлении и технических характеристиках
                                        кроссовера...
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <a href="#" class="image"
                                       style="background-image: url('images/media/index-blog-3.png')">
                                        <img src="images/blog-mask.png" alt="">
                                    </a>

                                    <a href="#" class="name">Немного информации о предстоящей новинке Audi A8 (2018)</a>

                                    <div class="date">25 октября 2017</div>

                                    <div class="text">
                                        Осенью на автошоу во Франкфурте будет представлен седан четвертого поколения Audi
                                        A8. Над его дизайном работают лучшие специалисты, в том числе Марк Лихте, автор
                                        инновационных...
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="at-seo">
                            <p>
                                Каждый автолюбитель прекрасно знает, что порой бывает непросто быстро найти нужные
                                автозапчасти для
                                ремонта. Автосервисы не всегда располагают складом, к тому же цены там обычно завышены.
                                Поэтому
                                приходится тратить много времени на поиск нужных деталей на авторынках и в магазинчиках.
                                Стоит ли
                                говорить, что эти поиски не всегда успешны, к тому же те запчасти, которые покупаются на
                                рынках,
                                далеко не всегда можно назвать качественными, что, в конечном итоге, плохо сказывается на
                                вашем
                                автомобиле.
                            </p>

                            <p>
                                Наш магазин автозапчастей – это широкий ассортимент комплектующих и аксессуаров для иномарок
                                по
                                приемлемым ценам. Все автозапчасти для иномарок, представленные в нашем каталоге запчастей ,
                                имеют
                                сертификат качества, в отличие от тех, которые вы можете купить на авторынках, а наши цены
                                гораздо
                                ниже, чем в дилерских сервисных центрах.
                            </p>

                            <p>
                                Выбор и покупка запчастей не займут у вас много времени: просто выберите марку машины, а все
                                комплектующие для нее уже распределены по группам (например, кузовные запчасти, ходовая
                                часть,
                                тормозная система и т. д.). После оформления заказа вы можете забрать вашу покупку
                                самостоятельно
                                или воспользоваться курьерской доставкой нашего автомагазина.
                            </p>

                            <p>
                                Если вы не нашли в каталоге необходимых комплектующих, оставьте заявку нашим менеджерам –
                                искомые
                                автозапчасти для иномарок будут доставлены в кратчайшие сроки со складов наших партнеров и
                                поставщиков.
                            </p>

                            <p>
                                Хотите быть уверены в качестве и надежности комплектующих и при этом не переплачивать
                                втридорога?
                                Тогда наш автомагазин запчастей для Вас!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="at-hWrapper">
            <div class="wrapper-cell">
                <div class="at-mainer">
                    <div class="at-pages-menu js-menu-pages">
                        <div class="inner-pages">
                            <div class="mob-header-pages">
                                <span class="close" onclick="atTopMenuClose()"></span>
                            </div>
                            <a href="#">О компании</a>
                            <a href="#">Оплата и доставка</a>
                            <a href="#">Контакты</a>


                            <div class="at-docs-link">
                                <a href="#">Документация</a>
                            </div>

                            <div class="mob-links">
                                <a href="#">VIN запрос</a>
                                <a href="#">Вы искали</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="at-mid-header">
                    <div class="at-mainer">
                        <div class="mid-header-wrap">
                            <div class="mid-header-part logo-part">
                                <a class="at-logo-top" href="#">
                                    <img src="images/logo-top.png" alt="">
                                </a>
                            </div>

                            <div class="mid-header-part phones-part">
                                <div class="at-phones-top">
                                    <div class="inner-wrap">
                                        <div class="main-phone" onclick="
                                    $('.at-phones-top').toggleClass('active');
                                    $('.js-phones-drop, .js-phones-drop-mask').toggle();
                                    ">
                                            066-805-21-44
                                            <i></i>
                                        </div>
                                        <a class="link" href="#">Перезвоните мне</a>

                                        <div class="phones-top-drop js-phones-drop">
                                            <div class="phone mts">097-055-17-37</div>
                                            <div class="phone kiyv">088-805-21-44</div>
                                            <div class="phone life">097-055-17-37</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mid-header-part user-part">
                                <div class="at-mob-toggle-menu">
                                    <a href="javascript:void(0);" onclick="atTopMenuOpen();">
                                        <span></span>
                                    </a>
                                </div>

                                <div class="at-auth-block" style="display: none;">
                                    <a href="javascript:void(0);" onclick="popupOpen('.js-popup-auth-block');"><span>Личный кабинет</span></a>
                                </div>

                                <div class="at-auth-block loged">
                                    <a href="javascript:void(0);" onclick="atCabinetMenuOpen();">
                                        <span>Личный кабинет</span>
                                    </a>

                                    <div class="auth-menu js-auth-menu">
                                        <div class="menu-header">
                                            Личный кабинет

                                            <a class="close" href="javascript:void(0);" onclick="atCabinetMenuClose();"></a>
                                        </div>
                                        <table class="user-name">
                                            <tr>
                                                <td>
                                                    <a href="#"><strong>lz49-Atamanenko</strong></a>
                                                </td>
                                            </tr>
                                        </table>
                                        <ul class="list">
                                            <li>
                                                <a class="selected" href="#">Личный кабинет</a>
                                            </li>
                                            <li>
                                                <a href="#">Профиль</a>
                                            </li>
                                            <li>
                                                <a href="#">Детали в работе</a>
                                            </li>
                                            <li>
                                                <a href="#">Заказы</a>
                                            </li>
                                            <li>
                                                <a href="#">Счета</a>
                                            </li>
                                            <li>
                                                <a href="#">Вин запросы</a>
                                            </li>
                                            <li>
                                                <a href="#">Гараж автомобилей</a>
                                            </li>
                                            <li>
                                                <a href="#">Сообщения <span class="count">2</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Сообщения об оплате</a>
                                            </li>
                                            <li>
                                                <a href="#">Декларации</a>
                                            </li>
                                            <li class="logout">
                                                <a href="#">Выход</a>
                                            </li>
                                        </ul>

                                        <div class="manager">
                                            <a href="#">Ваш менеджер</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="at-basket-widget">
                                    <a href="javascript:void(0);" onclick="popupOpen('.js-popup-basket');">
                                        <span class="count empty">0</span>
                                        <span class="name">Корзина</span>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="at-post-header">
                    <div class="at-mainer">
                        <div class="post-header">
                            <div class="post-header-part part-nav">
                                <div class="at-nav">
                                    <a class="mob-toggle" href="javascript:void(0);" onclick="
                                    $('.at-nav .nav-drop').show();
                                    $('body').addClass('overscroll-stop');
                                ">
                                        <strong>Каталог товаров<i></i></strong>
                                    </a>
                                    <a href="javascript:void(0);"><strong>Каталог товаров<i></i></strong></a>

                                    <div class="nav-drop">
                                        <div class="mob-head">
                                        <span class="close" onclick="
                                            $('.at-nav .nav-drop').hide();
                                    $('body').removeClass('overscroll-stop');
                                        "></span>
                                        </div>
                                        <div class="nav-drop-inner">
                                            <ul class="lvl1">
                                                <li>
                                                    <a href="#">Запчасти для ТО</a>
                                                </li>
                                                <li class="js-has-lvl2">
                                                    <a href="#">Тормозная система</a>

                                                    <ul class="lvl2">
                                                        <li>
                                                            <a href="#">Тормозные элементы</a>
                                                        </li>
                                                        <li class="js-has-lvl3">
                                                            <a href="#">Гидравлика тормозной системы</a>

                                                            <ul class="lvl3">
                                                                <li><a href="#">Тормозной суппорт</a></li>
                                                                <li><a href="#">Колесный тормозной цилиндр</a></li>
                                                                <li><a href="#">Главный тормозной цилиндр</a></li>
                                                                <li><a href="#">Вакуумный усилитель</a></li>
                                                                <li><a href="#">Распределитель тормозных усилий</a></li>
                                                                <li><a href="#">Тормозные шланги и трубки</a></li>
                                                                <li><a href="#">Прочие элементы тормозной системы</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Электронные компоненты</a>
                                                        </li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    <a href="#">Двигатель</a>
                                                </li>
                                                <li>
                                                    <a href="#">Подвеска и Рулевое</a>
                                                </li>
                                                <li>
                                                    <a href="#">Коробка передач</a>
                                                </li>
                                                <li>
                                                    <a href="#">Охлаждение и Отопление</a>
                                                </li>
                                                <li>
                                                    <a href="#">Электрика и Освещение</a>
                                                </li>
                                                <li>
                                                    <a href="#">Кузов</a>
                                                </li>
                                                <li>
                                                    <a href="#">Смазки и Жидкости</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-header-part part-search">
                                <a href="javascript:void(0);" class="mob-block-search" onclick="
                                $('.js-block-search').show();
                            "></a>

                                <div class="at-block-search js-block-search">
                                    <input type="text" placeholder="Какую запчасть ищите?">
                                    <input type="submit" value="">

                                    <i class="close" onclick="
                                    $('.js-block-search').hide();
                                "></i>
                                </div>
                            </div>

                            <div class="post-header-part part-button">
                                <a class="at-top-button" href="#">Вы искали</a>
                            </div>

                            <div class="post-header-part part-button">
                                <a class="at-top-button" href="#">VIN запрос</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="at-fWrapper">
            <div class="wrapper-cell">
                <div class="at-footer">
                    <div class="at-mainer">
                        <div class="mob-call">
                            <a href="tel:066-805-21-44 " class="at-btn call-btn">
                                <span>066-805-21-44 </span>
                            </a>
                        </div>

                        <div class="footer-wrapper">
                            <div class="foot-part part-info">
                                <div class="at-footer-info">
                                    <strong class="caption">График работы:</strong><br/>
                                    Пн-Пт: 9:00 - 19:00<br/>
                                    Суббота: 10:00 - 14:00<br/>
                                    Воскресенье: выходной<br/>

                                    <a href="#" class="at-map-link">
                                        Как проехать в магазин
                                    </a>
                                </div>
                            </div>

                            <div class="foot-part part-cats">
                                <div class="at-foot-cats">
                                    <div class="item">
                                        <a href="#">Масла, автохимия</a>
                                    </div>
                                    <div class="item">
                                        <a href="#">Расходные материалы</a>
                                    </div>
                                    <div class="item">
                                        <a href="#">Аксессуары</a>
                                    </div>
                                    <div class="item">
                                        <a href="#">Подбор запчастей по авто</a>
                                    </div>
                                    <div class="item">
                                        <a href="#">Оставить VIN-запрос запчасти</a>
                                    </div>
                                </div>
                            </div>

                            <div class="foot-part part-soc">
                                <strong class="caption">Наши группы:</strong><br/>
                                <div class="at-soc">
                                    <a href="#" class="vk"></a>
                                    <a href="#" class="fb"></a>
                                    <a href="#" class="gp"></a>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <div class="foot-part part-pay">
                                <strong class="caption">Принимаем к оплате:</strong><br/>
                                <img class="at-foot-pay-img" src="images/foot-payments.png" alt="">

                                <div class="at-copy">
                                    © Интернет-магазин «Ирбис» 2011 - 2017 <br/>
                                    Разработка сайта автозапчастей - <a href="#">MstarProject</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="at-block-popup js-popup-basket" style="display: none;">
        <div class="dark" onclick="popupClose('.js-popup-basket');"></div>
        <div class="block-popup">
            <div class="popup-head">
                <a href="javascript: void(0);" class="close" onclick="popupClose('.js-popup-basket');">&nbsp;</a>
                Корзина
            </div>

            <div class="popup-body">
                <div class="at-popup-basket">
                    <div class="at-basket-element">
                        <div class="element-part brand-part">
                            <a class="image-brand" href="#"><img src="images/media/index-brand-10.png" alt=""></a>
                        </div>

                        <div class="element-part code-part">
                            <a href="#">32103AA080 </a>
                        </div>

                        <div class="element-part photo-part">
                            <div class="photo">
                                <div class="photo-view">
                                    <i>
                                        <img src="images/media/list-hover-img.png" alt="">
                                    </i>
                                </div>
                            </div>
                        </div>

                        <div class="element-part name-part">
                            <a href="#">Моторна олива Лексус 5W30 (1л) (TOYOTA) </a>
                        </div>

                        <div class="element-part data-part">
                            <table class="at-list-basket-table">
                                <tr>
                                    <td class="days-cell">
                                        <a class="at-link-dashed days-link" href="#">
                                            0 дн.
                                            <span class="tip">Дней на доставку</span>
                                        </a>
                                    </td>
                                    <td class="count-cell">
                                        <div class="count">
                                            <input type="text" value="1">
                                            <div class="unit">шт x 50 грн</div>
                                        </div>
                                    </td>
                                    <td class="weight-cell mob-hide">
                                        0,00кг
                                    </td>
                                    <td class="price-cell">
                                        <div class="price">50 грн.</div>

                                        <a href="javascript:void(0);" class="delete"></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="at-basket-element total">
                        <table class="at-list-basket-table">
                            <tr>
                                <td class="mob-hide">
                                    <a href="#" class="at-link-dashed">Условия доставки и гарантии</a>
                                </td>
                                <td class="total-caption">
                                    Итого:
                                </td>
                                <td class="weight-cell">
                                    0,00кг
                                </td>
                                <td class="price-cell">
                                    <div class="price-total">50 грн.</div>
                                </td>
                            </tr>
                        </table>

                        <div class="mob-settings-basket">
                            <a href="#" class="at-link-dashed">Условия доставки и гарантии</a>
                        </div>
                    </div>

                    <div class="basket-buttons">
                        <a href="javascript:void(0);" class="at-btn clear-btn">Очистить корзину</a>
                        <a href="javascript:void(0);" class="at-btn makorder">Оформить заказ</a>

                        <div class="clear"></div>
                    </div>

                    <div class="notice">
                        <div class="caption">Оформить по телефону</div>

                        <div class="text">
                            можно не заполнять никаких форм, просто оставить телефон и консультант решит все вопросы по оформлению заказа
                        </div>

                        <table>
                            <tr>
                                <td><input class="phone js-masked-input" type="text" placeholder="(___) ___ __ __"></td>
                                <td>
                                    <input class="at-btn" type="submit" value="Заказ по телефону">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="at-block-popup js-popup-auth-block" style="display: none;">
        <div class="dark" onclick="popupClose('.js-popup-auth-block');"></div>
        <div class="block-popup">
            <div class="popup-head">
                <a href="javascript: void(0);" class="close" onclick="popupClose('.js-popup-auth-block');">&nbsp;</a>
                Авторизация
            </div>

            <div class="popup-body">
                <form method="post">
                    <div class="at-popup-auth">
                        <div class="part left">
                            <div class="at-popup-login-block">
                                <div class="at-block-form">
                                    <table>
                                        <tr>
                                            <td class="no-mob">
                                                <div class="field-name">
                                                    Моб. Номер:
                                                    <span class="abs">(используется в качестве логина)</span>
                                                </div>
                                            </td>
                                            <td class="mob-w100">
                                                <input type="text" class="js-masked-input" placeholder="(___) ___ __ __">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="no-mob">
                                                <div class="field-name">Пароль:</div>
                                            </td>
                                            <td class="mob-w100">
                                                <div class="password">
                                                    <input type="password">
                                                    <a href="#" class="forgot at-link-dashed">Забыли?</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="no-mob"></td>
                                            <td class="mob-w100">
                                                <label class="remember-label">
                                                    <input type="checkbox" class="js-checkbox"> <span>Запомнить меня</span>
                                                </label>

                                                <div class="button">
                                                    <input class="at-btn" type="submit" value="Войти">
                                                </div>

                                                <div class="clear"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="no-mob"></td>
                                            <td class="mob-w100">
                                                <div class="soc-login">
                                                    <div class="caption">Войти через социальные сети</div>

                                                    <div class="at-soc">
                                                        <a href="#" class="vk"></a>
                                                        <a href="#" class="fb"></a>
                                                        <a href="#" class="gp"></a>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="part right">
                            <div class="reg-info">
                                <div class="top-part">
                                    <div class="caption">Регистрация</div>

                                    <ul class="at-ul">
                                        <li>Вы получаете гарантированную скидку 3%</li>
                                        <li>Вы будете тратить меньше времени на оформление заказа</li>
                                        <li>Отслеживать состояние заказов и историю покупок</li>
                                        <li>За Вами будет закреплен персональный менеджер</li>
                                    </ul>
                                </div>


                                <div class="bot-part">
                                    <a href="#" class="at-btn">Зарегистрироваться</a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="at-mask js-phones-drop-mask"
         onclick="$('.at-phones-top').removeClass('active');
     $('.js-phones-drop, .js-phones-drop-mask').hide();
     "></div>
    <div class="at-mask js-year-choose-mask"
         onclick="$('.at-custom-select-wrap').removeClass('opened');
     $('.select-drop, .js-year-choose-mask').hide();
     "></div>


    <div class="at-mask js-auth-mask" onclick="atCabinetMenuClose();"></div>
    <div class="at-mask-tpages js-tpages-mask" onclick="atTopMenuClose();"></div>
    <div class="res"></div>



















        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
