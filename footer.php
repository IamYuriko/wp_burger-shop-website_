<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__contents">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footermenu',
                'container' => false,
                'menu_class' => 'l-footer__menu c-flex c-flex--center',  // CSS class for the menu ul element
                'footer_li_class' => 'l-footer__item',
            ));
            ?>
            <p class="l-footer__copyright"><small>Copyright: RaiseTech</small></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>