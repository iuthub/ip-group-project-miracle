<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;
use frontend\widgets\MenuWidget;
use frontend\widgets\FooterWidget;

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Miracle Academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- carousel.min.css -->
    <link rel="stylesheet" href="/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <!-- owl.theme.css -->
    <link rel="stylesheet" href="/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

    <!-- fontawesomes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="/image/logo.png" type="image/x-icon">
    <link rel="icon" href="/image/logo.png" type="image/x-icon">

    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>

</head>
<body>

<?php $this->beginBody() ?>

<div class="wrapper">


    <!--Navbar-->
    <?= MenuWidget::widget(); ?>
    <!--end of Navbar-->


    <!-- content -->
    <div class="content print">
        <?= $content ?>
    </div>
    <!-- //content -->


    <!--Footer-->
    <?= FooterWidget::widget(); ?>
    <!--end of Footer-->

</div>

<a id="return-top-top" href="#top" style="position: fixed; z-index: 2147483647; display: block;"><i class="fa fa-angle-up"></i></a>
<!-- End of wrapper -->
<!-- scripts -->

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>











