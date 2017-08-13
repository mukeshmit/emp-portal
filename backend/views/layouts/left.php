<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Super Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Dashboard Links', 'options' => ['class' => 'header']],
					['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/']],
                    // ['label' => 'Users', 'icon' => 'fa fa-user-o', 'url' => ['/']],
                    
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'News Flash',
                        'icon' => 'fa fa-newspaper-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Private', 'icon' => 'lock', 'url' => ['/news-flash/'],],
                            ['label' => 'Public', 'icon' => 'circle-o', 'url' => ['/news-flash'],],
                            /* [
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
                            ], */
                        ],
                    ],
                    [
                        'label' => 'Bulletin Board',
                        'icon' => 'tags',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Categories', 'circle-o' => 'tags', 'url' => ['/'],],
                            ['label' => 'Setting', 'icon' => 'cog', 'url' => ['/'],]
                        ],
                    ],
					[
                        'label' => 'Resources ',
                        'icon' => 'sticky-note',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Departments', 'icon' => 'circle-o', 'url' => ['/'],],
                            ['label' => 'List Documents', 'icon' => 'circle-o', 'url' => ['/'],]
                        ],
                    ],
					[
                        'label' => 'Company Blog ',
                        'icon' => 'newspaper-o',
                        'url' => '#'
                    ],
					[
                        'label' => 'Quote Lists',
                        'icon' => 'quote-left',
                        'url' => '#'
                    ],
					[
                        'label' => 'Theme',
                        'icon' => 'globe',
                        'url' => '#'
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
