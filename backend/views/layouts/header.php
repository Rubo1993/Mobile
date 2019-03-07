<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

	<?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">ARMPHONE</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"><?= \backend\widgets\email\EmailWidget::widget(['count' => 'count']);?></span>
                    </a>
					<?= \backend\widgets\email\EmailWidget::widget();?>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">On the site registered</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">

                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red">Users: <?=\backend\widgets\users\UsersWidget::widget()?></a></i>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/adminLog.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">Admin</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                Group-9 - Web Developers</p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/" class="btn btn-default btn-flat">Go Site</a>
                            </div>
                            <div class="pull-right">
								<?= Html::a(
									'Sign out',
									['/site/logout'],
									['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
								) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
