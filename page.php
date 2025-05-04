<?php get_header(); ?>
<main class="l-main">
    <article class="l-contents">
        <section class="p-fv-page c-mv c-mv-page" style="background-image: url('<?php
                                                                                if (has_post_thumbnail()) :
                                                                                    echo esc_url(get_the_post_thumbnail_url()); // アイキャッチ画像のURLを取得
                                                                                else:
                                                                                    echo esc_url(get_template_directory_uri() . '/assets/images/pc-mv_single@2x.jpg'); // no image画像のURLを指定
                                                                                endif;
                                                                                ?>');">>
            <h1 class="p-fv-page__title c-heading c-heading--xxxl"><?php the_title(); ?></h1>
        </section>
        <div class="l-contents--single">

            <body>
                <?php the_content(); ?>
            </body>
        </div>
    </article>
</main>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>