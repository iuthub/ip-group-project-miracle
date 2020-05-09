<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;

class FooterWidget extends Widget
{

    public function run()
    {
        return $this->render('footer_template');
    }
}
