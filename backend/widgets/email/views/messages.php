<ul class="dropdown-menu">
    <li class="header">You have <?= count($content)?> messages</li>
    <li>

        <ul class="menu">
            <?php if (!empty($content)){
                foreach ($content as $cont) {
                    ?>
                    <li><!-- start message -->
                        <a href="#">
                            <div class="pull-left">
                                <?= $cont['name']?>
                            </div>
                            <h2>
                                barev
                                <?= $cont['content']?>
                                <small><i class="fa fa-clock-o"></i> <?= $cont['date']?></small>
                            </h2>
                            <p><?= $cont['email'] ?></p>
                        </a>
                    </li>
                    <?php
                }
            }  ?>
            <!-- end message -->
        </ul>
    </li>
    <li class="footer"><a href="/contacts/contact">See All Messages</a></li>
</ul>