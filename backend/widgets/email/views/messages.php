<ul class="dropdown-menu">
    <li style="font-weight: bold" class="header">You have <?= count($content)?> messages</li>
    <li>
        <ul class="menu">
			<?php if (!empty($content)){
				foreach ($content as $cont) {
					?>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(["/mail/view?id=" . $cont['id']])?>">
                            <div class="pull-left">
                                <?php
                                if (!empty($cont['name'])){
	                              echo  strtoupper($cont['name'])."&#8195;";
                                }else{
                                    echo strtoupper("Incognito")."&#8195;";
                                }

                                ?>

                            </div>

                            <h4> <?= substr($cont['content'],0,10).'....';?>
                                <small><i class="fa fa-clock-o"></i> <?= $cont['date']?></small>
                            </h4>
                            <p><?= $cont['email'] ?></p>
                        </a>
                    </li>
        </br>
					<?php
				}
			}  ?>
        </ul>
    </li>
    <li  class="footer"><a style="font-weight: bold" href="<?= \yii\helpers\Url::to(['/mail'])?>">See All Messages</a></li>
</ul>