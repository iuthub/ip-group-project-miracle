<?php

/* @var $this yii\web\View */

/**
 * @var $sliderphotos backend\models\SliderPhotos
 * @var $galleries backend\models\Gallery
 * @var $sliders  backend\models\Sliders
 * @var $courses backend\models\Courses
 * @var $prices backend\models\Prices
 */

?>

<div class="slidder">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($sliderphotos as $sliderphoto): ?>
            <div class="carousel-item <?php if ($i == 0) { echo 'active';} else { echo '';} $i++; ?>">
                <img class="d-block w-100" src="<?= $sliderphoto->getImageFileUrl('photo', Yii::getAlias('@storageHostInfo/store/sliders/[[attribute_id]]/[[filename]].[[extension]]')); ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="caption_wrapper">
                        <h5 class="main__heading">Программирование для взрослых</h5>
                        <div class="course__wrap">
                            <ul class="course__list" style="padding-right:55px;">
                                <li class="head">Веб - программирование</li>
                                <li class="course__item">HTML, CSS, PHP</li>
                                <li class="course__item">JAVA SCRIPT, NODE JS</li>
                                <li class="course__item">JQERY, PYTHON MYSQL</li>
                            </ul>
                            <ul class="course__list">
                                <li class=" head">ИТ - программирование</li>
                                <li class="course__item">JAVA, C++ ,C#</li>
                                <li class="course__item">KOTLIN, RUST</li>
                                <li class="course__item">SWIFT, GO</li>
                            </ul>
                        </div>

                        <a href="https://web.telegram.org/#/im?p=@anvarodilov" class="registration">Зарегистрировать своего ребенка</a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>


        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><!-- End of slidder -->



<!--Advertisement-->
<div class="adv">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/image/books.png" alt="books" class="adv__image">
                <p>Множество <br> курсов</p>
            </div>
            <div class="col-md-3">
                <img src="/image/innovation.png" alt="innovation" class="adv__image">
                <p>Современная <br> программа</p>
            </div>
            <div class="col-md-3">
                <img src="/image/premium.png" alt="premium" class="adv__image">
                <p>Комфортные <br> условия</p>
            </div>
            <div class="col-md-3">
                <img src="/image/star (1).png" alt="stars" class="adv__image">
                <p>Индивидуальных <br> подход</p>
            </div>
        </div>
    </div>
</div>

<!-- about us -->
<div class="about__us" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="about__us-heading"><span>Учебный Центр</span>Miracle Academy</h1>
                <p class="about__us-paragraph">Самая лушчая инвестиция это образование, как <br> для ребенка так и для
                    взрослых.</p>
                <p class="about__us-paragraph">Наш образовательный центр рад предложить вам <br> учебный программы
                    различных направлений. У нас есть <br> группы как для самых маленьких, так и для тех кто хочет <br>
                    получить дополнительную профессию или расширить <br> кругозор.</p>
                <a href="https://web.telegram.org/#/im?p=@MiracleAcademyUz" class="about__us-btn ">Читать больше</a>
            </div>
            <div class="col-md-6">
                <div class="about__us-item">
                    <a href="#"><img class="about__us-img img-fluid" src="/image/pencil.png" alt=""></a>
                    <a href="#"><img class="about__us-img img-fluid" src="/image/document.png" alt=""></a>
                </div>
                <div class="about__us-item">
                    <a href="#"><img class="about__us-img img-fluid" src="/image/shelf.png" alt=""></a>
                    <a href="#"><img class="about__us-img img-fluid" src="/image/building.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of about us -->


<div class="our__course" id="course">
    <div class="container">
        <div class="top__course clearfix">
            <h2 class=" price__heading float-left">Наши курсы</h2>
            <a href="#" class="link__to-prices float-right">Наши курсы
                Посмотреть все курсы</a>
        </div>
        <div class="course__list">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="mentalniy">
                        <a href="#"><img src="/image/mentalniy.png" alt="mentalniy" class="img-fluid"></a>
                        <p>Ментальная арифметика</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="graphic__design">
                        <a href="#"><img src="/image/laptop.png" alt=""></a>
                        <p>Ментальная арифметика</p>
                    </div>
                    <div class="course__item-wrap clearfix">
                        <div class="web__dev float-left">
                            <a href="#"><img src="/image/web.png" alt="web development"></a>
                            <p>Веб-разработка</p>
                        </div>

                        <div class="english float-right">
                            <a href="#"><img src="/image/english.png" alt="english pic"></a>
                            <p>Английский язык</p>
                        </div>
                    </div><!-- End of cousze item wrap -->


                </div>
            </div>
        </div>
    </div>
</div><!-- End of our course -->

<!-- cost of courses -->
<div class="course__price" id="cost">
    <div class="container">
        <div class="price__head clearfix">
            <h2 class=" price__heading float-left ">Наши цены</h2>
            <a href="#" class="link__to-prices float-right ">Посмотреть все цены</a>
        </div>
        <div class="row">
            <?php foreach ($prices as $price): ?>

                <div class="col-lg-4 col-md-4">
                    <div class="price__item">
                        <h4><?= $price->course_name ?></h4>
                        <ul class="include">
                            <li class="include__item">Группа <?= $price->pupils ?> (±1) Учеников</li>
                            <li class="include__item">2 книги (<?= $price['books'] ?>) dsffsdf cdsfdsf assdfsdf</li>
                            <li class="include__item">Фирменная <?= $price['notebooks'] ?>Тетрадь Grammar и Vocabulary
                            </li>
                            <li class="include__item">Сервис Academic <?= $price['service'] ?>Support</li>
                            <li class="include__item">Live <?= $price['online_translation'] ?> Трансляция каждого
                                урока
                            </li>
                        </ul>
                        <p class="cost"><?= $price['price'] ?> UZS</p>
                    </div>
                    <br>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end of cost of courses -->


<!-- our team section start here -->
<div class="our__team" id="team">
    <div class="container">
        <div class="top__our-team clearfix">
            <h3 class=" team float-left">Команда</h3>
            <p class="team__description float-right">Профессионалы Ташкента с нами!</p>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="owl__wrap">
                    <img src="/image/miracle pics/staff/staff.JPG" style="width:100%; height: 100%" alt="">
                    <div class="description">
                        <p class="title">Наши преподаватели</p>
                        <p class="name">Mr. Smith</p>
                    </div>
                </div>
            </div>
            <br>

            <div class="item">
                <div class="owl__wrap">
                    <img src="/image/miracle pics/staff/staff.JPG" style="width:100%; height: 100%" alt="">
                    <div class="description">
                        <p class="title">Наши преподаватели</p>
                        <p class="name">Mr. Smith</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="item">
                <div class="owl__wrap">
                    <img src="/image/miracle pics/staff/staff.JPG" style="width:100%; height: 100%" alt="">
                    <div class="description">
                        <p class="title">Наши преподаватели</p>
                        <p class="name">Mr. Smith</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="item">
                <div class="owl__wrap">
                    <img src="/image/miracle pics/staff/staff.JPG" style="width:100%; height: 100%" alt="">
                    <div class="description">
                        <p class="title">Наши преподаватели</p>
                        <p class="name">Mr. Smith</p>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div><!-- End of our team -->

<div class="gallery" id="gallery">
    <div class="container top__gallery">
        <div class="row">
            <div class="col-md-4">
                <div class="our__client">
                    <h3>Отзывы наших клиентов</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client__info">
                    <div class="img__wrap">
                        <div class="client__personal">
                            <img src="/image/mark.png" alt="">
                        </div>
                        <div class="client__name">
                            <p><span>Mark</span> Zuckerberg</p>
                            <div class="status">
                                Developer
                            </div>
                        </div>
                    </div>
                    <p class="client__gaps">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="client__info">
                    <div class="img__wrap">
                        <div class="client__personal">
                            <img src="/image/mark.png" alt="">
                        </div>
                        <div class="client__name">
                            <p><span>Mark</span> Zuckerberg</p>
                            <div class="status">
                                Developer
                            </div>
                        </div>
                    </div>
                    <p class="client__gaps">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>
        </div><!-- End of  -->
    </div>

    <div class="container">
        <h3 class="gallery__heading">Галерея</h3>
        <div class="row">
            <div class="row">
                <?php foreach ($galleries as $gallery): ?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy"
                           data-image="image/miracle pics/03 mental/DSC08993.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="<?= $gallery->getImageFileUrl('photo', Yii::getAlias('@storageHostInfo/store/gallery/[[attribute_id]]/[[filename]].[[extension]]')); ?>"
                                 alt="Another alt text">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                            <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                                        class="fa fa-arrow-left"></i>
                            </button>
                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                        class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our team section end here -->
    <!-- footer start here -->
</div>