<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar04.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Elex Zhuo</p>

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
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label'=>Yii::t('app','Promotions'),'icon'=>'flag','url'=>'#','items'=>[
                        ['label' => Yii::t('app','Promotion List'), 'icon' => 'align-left', 'url' => ['/promotion'],],
                        ['label' => Yii::t('app','Create Promotion'), 'icon' => 'wrench', 'url' => ['/promotion/create'],],
                    ]],
                    ['label'=> Yii::t('app','Categories'),'icon'=>'list','url'=>'#','items'=>[
                        ['label' => Yii::t('app','Category List'), 'icon' => 'align-left', 'url' => ['/category'],],
                    ]],
                    ['label'=> Yii::t('app','Product Manager'),'icon'=>'tags','url'=>'#','items'=>[
                        ['label' =>  Yii::t('app','Products'), 'icon' => 'align-left', 'url' => ['/product'],],
                        ['label' =>  Yii::t('app','Create Product'), 'icon' => 'wrench', 'url' => ['/product/create'],],
                    ]],
                    ['label'=> Yii::t('app','User Manager'),'icon'=>'user','url'=>'#','items'=>[
                        ['label' =>  Yii::t('app','Create User'), 'icon' => 'equalizer', 'url' => ['/user'],],
                    ]],
                    ['label'=> Yii::t('app','Ad Loc'),'icon'=>'map-marker','url'=>'#','items'=>[
                        ['label' => Yii::t('app','Ad Loc'), 'icon' => 'align-left', 'url' => ['/ad-loc'],],
                    ]],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
