<?php get_header(); ?>
<main class="l-main">
    <article class="l-contents">
        <section class="p-fv-archive  c-mv c-mv-archive">
            <div class="p-fv-archive__contents c-flex c-flex--center">
                <h1 class="p-fv-archive__title c-title c-title--m">Search:</h1>
                <p class="p-fv-archive__subtitle c-heading"><?php the_search_query(); ?></p>
            </div>
        </section>
        <div class="l-contents--subsequent">
            <section class="p-intro-archive">
                <h2 class="search-result">
                    <!-- 検索結果件数をメインクエリから取得し表示 -->
                    「<?php the_search_query(); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件の検索結果が見つかりました。
                </h2>
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