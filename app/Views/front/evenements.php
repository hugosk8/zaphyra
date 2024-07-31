        <section class="page-header" style="background-image: url(assets/zaphyra/image-des-autres-page.jpg);">
            <div class="container">
                <h2>ÉVÈNEMENTS</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="event-one event-one__event-page-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if (count($events) > 0) { ?>
                            <?php foreach ($events as $event) { ?>
                                <div class="event-one__single mt-5">
                                    <div class="event-one__image">
                                        <div class="event-one__date">
                                            <span>
                                                <?php
                                                $timestamp = strtotime($event->date);
                                                echo  $newDate = date("d", $timestamp);
                                                ?>
                                            </span>
                                            <?php
                                            $timestamp = strtotime($event->date);
                                            echo  $newDate = date("M", $timestamp);
                                            ?>
                                        </div><!-- /.event-one__date -->
                                        <div class="event-one__image-box">
                                            <div class="event-one__image-inner">
                                                <img src="assets/img/<?= $event->img ?>" alt="">
                                            </div><!-- /.event-one__image-inner -->
                                        </div><!-- /.event-one__image-box -->
                                    </div><!-- /.event-one__image -->
                                    <div class="event-one__content">
                                        <h3><?= $event->name ?></h3>
                                        <p><?= $event->texte ?></p>
                                    </div><!-- /.event-one__content -->
                                    <div class="event-one__btn-block">

                                    </div><!-- /.event-one__btn-block -->
                                </div><!-- /.event-one__single -->
                            <?php } ?>
                        <?php } else { ?>
                            <h1>Aucun evenement à venir</h1>
                        <?php } ?>
                    </div><!-- /.col-lg-12 -->

                </div><!-- /.row -->
                <div class="text-center d-flex justify-content-center align-items-center">
                    <!-- /.more-post__block -->

                </div><!-- /.text-center -->

            </div><!-- /.container -->
        </section>


        </div><!-- /.page-wrapper -->