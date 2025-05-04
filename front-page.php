<?php get_header(); ?>
<main class="l-main">
    <article class="l-main__inner">
        <section class="p-fv-front c-mv c-mv-front">
            <h2 class="p-fv-front__title c-heading c-heading--xxl"><?php echo bloginfo('description'); ?></h2>
        </section>
        <div class="l-contents--first">
            <div class="p-menu">
                <div class="p-menu__inner c-grid">
                    <a class="p-menu__link" href="<?php echo esc_url(get_category_link(get_cat_ID('Take Out'))); ?>">
                        <div class="p-menu__image c-menuImage c-menuImage--takeOut c-flex c-flex--column">
                            <section class="p-menu__wrapper">
                                <h2 class="p-menu__title c-title c-title--xl">Take
                                    Out</h2>
                                <span class="p-menu__line c-line c-line--m"></span>
                            </section>
                            <div class="p-menu__contents">
                                <dl class="p-menu__container">
                                    <dt class="p-menu__subtitle c-heading c-heading--sm">
                                        Take Out</dt>
                                    <dd class="p-menu__text">
                                        当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで
                                    </dd>
                                </dl>
                                <dl class="p-menu__container">
                                    <dt class="p-menu__subtitle c-heading c-heading--sm">Take Out</dt>
                                    <dd class="p-menu__text">
                                        当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </a>
                    <a class="p-menu__link" href="<?php echo esc_url(get_category_link(get_cat_ID('Eat In'))); ?>">
                        <div class="p-menu__image c-menuImage c-menuImage--eatIn c-flex c-flex--column">
                            <section class="p-menu__wrapper">
                                <h2 class="p-menu__title c-title c-title--xl">Eat In</h2>
                                <span class="p-menu__line c-line c-line--m"></span>
                            </section>
                            <div class="p-menu__contents">
                                <dl class="p-menu__container">
                                    <dt class="p-menu__subtitle c-heading c-heading--sm">Eat In</dt>
                                    <dd class="p-menu__text">
                                        店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                                    </dd>
                                </dl>
                                <dl class="p-menu__container">
                                    <dt class="p-menu__subtitle c-heading c-heading--sm">Eat In</dt>
                                    <dd class="p-menu__text">
                                        店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
        $access_section_data = get_access_section_data(get_the_ID());
        ?>
        <div class="p-location c-grid">
            <div class="p-location__overlay c-grid__item--1of1 u-hide--tab u-show--sp"></div>
            <iframe class="p-location__map c-grid__item--1of1" src="<?php echo esc_html($access_section_data['map']); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <section class="p-location__container c-grid__item--1of1">
                <h2 class="p-location__title c-heading c-heading--xl"><?php echo esc_html($access_section_data['title']); ?></h2>
                <span class="p-location__line c-line c-line--l"></span>
                <p class="p-location__text c-heading">
                    <?php echo esc_html($access_section_data['description']); ?>
                </p>
            </section>
        </div>
    </article>
</main>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>