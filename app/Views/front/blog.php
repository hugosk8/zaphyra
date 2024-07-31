<?php $title = 'Retrouvez nos actualités dans notre blog'?>
<section class="page-header" style="background-image: url(assets/zaphyra/image-des-autres-page.jpg);">
            <div class="container">
                <h2>Notre Blog</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="collection-grid mt-5">
            <div class="container">
                <div class="collection-grid__top">
                    <div class="block-title-two text-center">
                    </div><!-- /.block-title-two -->

                    <ul class="collection-filter post-filter list-unstyled">
                        <li data-filter=".filter-item" class="active"><span>Toute les catégories</span></li>
                        <?php foreach($categories as $categorie) {  ?> 
                        <li data-filter=".<?= $categorie->id ?>"><span><?= $categorie->categorie_name ?></span></li>
                        <?php } ?> 
                    </ul><!-- /.collection-filter list-unstyled -->
                </div><!-- /.collection-grid__top -->
                <div class="row high-gutter filter-layout">
                <?php foreach($articles as $article) {  ?> 
                    <div class="col-lg-4 col-md-6 filter-item <?= $article->categorie_id ?>">
                        <div class="collection-grid__single">
                            <div class="collection-grid__image">
                                <img src="assets/img/<?= $article->vignette?>" alt="<?= $article->altVignette?>">
                                <a href="<?= URL ?>blog?id=<?= $article->id ?>" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                            </div><!-- /.collection-grid__image -->
                            <div class="collection-grid__content">
                                <h3><a href="#"><?= $article->name ?></a></h3>
                                <p><?= $article->description ?></p>
                            </div><!-- /.collection-grid__content -->
                        </div><!-- /.collection-grid__single -->
                    </div><!-- /.col-lg-4 -->
                    <?php } ?> 
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.collection-grid -->
</div>