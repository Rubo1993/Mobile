<!--<ul class="dropdown-menu">-->
<!--    <li class="header">You have 4 messages</li>-->
<!--    <li>-->
<!--        <ul class="menu">-->
<!--            <li>-->
<!--                <a href="#">-->
<!--                    <div class="pull-left">-->
<!--                        <img src="" class="img-circle"-->
<!--                             alt="User Image"/>-->
<!--                    </div>-->
<!--                    <h4>-->
<!--                        Support Team-->
<!--                        <small><i class="fa fa-clock-o"></i> 5 mins</small>-->
<!--                    </h4>-->
<!--                    <p>Why not buy a new awesome theme?</p>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!---->
<!--        </ul>-->
<!--    </li>-->
<!--    <li class="footer"><a href="#">See All Messages</a></li>-->
<!--</ul>-->

<ul class="dropdown-menu">
    <li class="header">You have <?= count($messages)?> messages</li>
    <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
            <?php if (!empty($messages)){
                foreach ($messages as $message) {
                    ?>
                    <li><!-- start message -->
                        <a href="#">
                            <div class="pull-left">
                                <?= $message['name']?>
                            </div>
                            <h4>
                                <?= $message['content']?>
                                <small><i class="fa fa-clock-o"></i> <?= $message['date']?></small>
                            </h4>
                            <p><?= $message['email'] ?></p>
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