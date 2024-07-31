<?php $title = 'test'?>
<section class="page-header" style="background-image: url(assets/zaphyra/image-des-autres-page.jpg);">
    <div class="container">
        <h2><?= $article->name ?></h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-four">
    <div class="container">
        <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
            <img style="max-height: 300px;" src="assets/img/<?= $article->img ?>" alt="<?= $article->altImg ?>">
        </div><!-- /.about-four__image -->
        <div class="row">
            <div class="col-lg-6">
                <div class="about-four__content">
                    <div class="block-title">
                        <p>Zaphyra</p>
                        <h3><?= $article->name?></h3>
                    </div><!-- /.block-title -->
                    <div class="about-four__highlite-text">
                        <p><?= $article->description ?></p>
                    </div><!-- /.about-four__highlite-text -->
                    <p><?= $article->texte ?></p>
                    
                </div><!-- /.about-four__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-four -->
</div>