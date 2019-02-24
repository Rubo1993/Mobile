<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="box">

<!--                    <div class="box-body contact-form">-->
<!--                        <div class="row">-->
<!--                            <form>-->
<!--                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="control-label sr-only" for="name"></label>-->
<!--                                        <input id="name" type="text" placeholder="ՔՈ ԱՆՈՒՆԸ" class="form-control" required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="control-label sr-only" for="phone"></label>-->
<!--                                        <input id="phone" type="text" placeholder="ՄՈՒՏՔԱԳՐԵՔ ՁԵՐ ԲՋՋԱՅԻՆ ՀԱՄԱՐԸ" class="form-control" required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="control-label sr-only" for="email"></label>-->
<!--                                        <input id="email" type="text" placeholder="ՄՈՒՏՔԱԳՐԵՔ Էլ․ ՓՈՍՏԻ ՀԱՍՑԵՆ" class="form-control" required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="control-label sr-only" for="name"></label>-->
<!--                                        <input id="subject" type="text" placeholder="ՁԵՐ ԹԵՄԱՆ" class="form-control" required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="control-label sr-only" for="textarea"></label>-->
<!--                                        <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="ՀԱՂՈՐԴԱԳՐՈՒԹՅՈՒՆԸ"></textarea>-->
<!--                                    </div>-->
<!--                                    <button type="submit" name="singlebutton" class="btn btn-primary">ՈՒՂԱՐԿԵԼ</button>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->



                    <div class="contact-wrap animated bounceInLeft">
                        <div class="box-head">
                            <h2 class="head-title">
                                Կապ մեզ հետ</h2>
                        </div>
		                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

		                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

		                <?= $form->field($model, 'email') ?>

		                <?= $form->field($model, 'subject') ?>

		                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

		                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
			                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
		                ]) ?>

                        <div class="form-group">
			                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

		                <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </div>
            <!-- /.contact-form -->
            <!-- address-block -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="box-head">
                        <h2 class="head-title">Կոնտակտային տվյալներ</h2>
                    </div>
                    <div class="box-body">
                        <div class="contact-block">
                            <h4>Ք․ Գյումրի, Վարդանանց հրպ 2 շենք</h4>
<!--                            <p>3718 Pretty View Lane Santa Rosa, CA 95401</p>-->
                        </div>
                        <div class="contact-block">
                            <h4>Կոնտակտային տվյալներ</h4>
                            <p class="mb0">Հեռ: <span class="text-default">0312-6-25-25</span></p>
                            <p class="mb0">Էլ հասցե: <span class="text-default">mymobile@mail.ru</span></p>
                        </div>
                        <div class="contact-block">
                            <h4>General Contact</h4>
                            <p class="mb0">Phone: <span class="text-default">180-123-4567</span></p>
                            <p class="mb0">Email: <span class="text-default">demo@mobistore.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.address-block -->
        </div>
        <div style="width: 100%">
            <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=gyumri%20vardananc%20hraparak+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                <a href="https://www.maps.ie/map-my-route/">Draw map route</a>
            </iframe>
    </div><br />
    </div>
</div>



<!--api key-->
<!--AIzaSyC2dn07CXuXGaCYMa8t9l6E7HAFnV8U9vI 	-->