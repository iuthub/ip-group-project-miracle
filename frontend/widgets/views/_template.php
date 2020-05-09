<?php

use abdualiym\cms\entities\Menu;
use abdualiym\cms\helpers\Language;

$url = Yii::$app->language;

?>

<header class="header" id="home">
    <div class="top__part">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="info">
                        <li class="info__list">
                            <a href="mailto:miracleacademyuz@gmail.com" class="info__link"><i class="fa fa-envelope" aria-hidden="true"></i>miracleacademyuz@gmail.com</a>
                        </li>
                        <li class="info__list">
                            <a href="tel:+998946863999" class="info__link"><i class="fa fa-phone" aria-hidden="true"></i>+998 71 200 69 99</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End of top__part -->


    <nav class="navbar navbar-expand-lg navbar-light bg-white animated">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/image/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" id="nav">
<?php foreach ($menu as $key => $value) {
    if ($value['type'] != Menu::TYPE_EMPTY) {
        echo '<li class="nav-item"  ><a href="' . $value['link'] . '" class="nav-link">' . Language::getAttribute($value, 'title', $url) . '</a></li>';
    } else {
        if (isset($value['childs']) && $value['childs']) {
            echo '<li class="dropdown">' . '<a href="' . $value['link'] . '" class="dropdown-toggle" data-toggle="dropdown">' . Language::getAttribute($value, 'title', $url) . ' <b class="caret"></b></a>';
            echo '<ul class="dropdown-menu">';
            foreach ($value['childs'] as $key => $childValue) {
                if (isset($childValue['childs']) && $childValue['childs']) {
                    echo '<li class="dropdown">' . '<a href="' . $childValue['link'] . '" class="dropdown-toggle" data-toggle="dropdown">' . Language::getAttribute($childValue, 'title', $url) . ' <b class="caret"></b></a>';
                    echo '<ul class="dropdown-menu">';
                    foreach ($childValue['childs'] as $key => $children) {
                        echo '<li><a href="' . $children['link'] . '">' . Language::getAttribute($children, 'title', $url) . '</a></li>';
                    }
                    echo '</ul>';
                    echo '</li>';
                } else {
                    echo '<li><a href="' . $childValue['link'] . '">' . Language::getAttribute($childValue, 'title', $url) . '</a></li>';
                }
            }
            echo '</ul>';
            echo '</li>';
        } else {
            echo '<li><a href="' . $value['link'] . '">' . Language::getAttribute($value, 'title', $url) . '</a></li>';
        }
    }
} ?>


                </ul>
            </div>
        </div>
    </nav>
</header>
