<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Pages', 'icon' => 'dashboard', 'url' => ['/cms/pages/index']],
                    ['label' => 'Article Categories', 'icon' => 'dashboard', 'url' => ['/cms/article-categories/index']],
                    ['label' => 'Articles', 'icon' => 'dashboard', 'url' => ['/cms/articles/index']],
                    ['label' => 'Menu', 'icon' => 'dashboard', 'url' => ['/cms/menu/index']],


                    ['label' => Yii::t('app','Sliders'), 'icon' => 'th-list', 'url' => ['/sliders/index']],
                    ['label' => Yii::t('app','Slider Photos'), 'icon' => 'th-list', 'url' => ['/slider-photos/index']],

                    ['label' => Yii::t('app','Contacts'), 'icon' => 'th-list', 'url' => ['/contacts/index']],
                    ['label' => Yii::t('app','Gallery'), 'icon' => 'th-list', 'url' => ['/gallery/index']],
                    ['label' => Yii::t('app','Courses'), 'icon' => 'th-list', 'url' => ['/courses/index']],
                    ['label' => Yii::t('app','Prices'), 'icon' => 'th-list', 'url' => ['/prices/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
