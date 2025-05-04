<aside class="l-sidebar">
        <div class="l-sidebar__inner">
                <nav class="p-sideMenu">
                        <button class="p-sideMenu__closeBtn"></button>
                        <section class="p-sideMenu__contents">
                                <h2 class="p-sideMenu__title c-title c-title--s u-hide--tab">Menu</h2>
                                <?php
                                wp_nav_menu(array(
                                        'theme_location' => 'categorymenu',
                                        'container' => false,
                                        'menu_class' => 'p-sideMenu__lists',  // CSS class for the menu ul element
                                        'sideMenu_li_class' => 'p-sideMenu__list', // メニューli要素のCSSクラス
                                        'submenu_ul_class' => 'p-sideMenu__subList', // サブメニューul要素のCSSクラス
                                ));
                                ?>
                        </section>
                </nav>
        </div>
</aside>