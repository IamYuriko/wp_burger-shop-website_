<?php get_header(); ?>
<main class="l-main">
    <article class="l-contents">
        <div class="l-contents--subsequent">
            <div class="p-page404">
                <h1 class="p-page404__title">404 PAGE NOT FOUND</h1>
                <h2 class="p-page404__subtitle">お探しのページは見つかりませんでした。</h2>
                <p class="p-page404__text">残念ながら、ご指定いただいたURLはすでに削除されたか、間違っている可能性があります。
                </p>
                <a class="p-page404__button" href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a>
            </div>
        </div>
    </article>
</main>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>