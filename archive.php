<?php get_header(); ?>
<main class="l-main">
    <article class="l-contents">
        <section class="p-fv-archive c-mv c-mv-archive">
            <div class=" p-fv-archive__contents c-flex c-flex--center">
                <h1 class="p-fv-archive__title c-title c-title--m">Menu:</h1>
                <p class="p-fv-archive__subtitle c-heading"><?php single_cat_title(); ?></p>
            </div>
        </section>
        <div class="l-contents--subsequent">
            <section class="p-intro-archive">
                <?php if (is_category()) : ?>
                    <div class="p-intro-archive__title c-heading c-heading--xl">小見出しが入ります</div>
                <?php else : ?>
                    <p>該当する投稿が見つかりません。</p>
                <?php endif; ?>
                <?php if (category_description()) : ?>
                    <?php echo category_description(); ?>
                <?php else : ?>
                    <p>該当する投稿が見つかりません。</p>
                <?php endif; ?>
            </section>
            <!-- テンプレート呼び出し -->
            <?php get_template_part('template/template', 'card') ?>
            <?php get_template_part('template/template', 'pagenation') ?>
        </div>
    </article>
</main>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>