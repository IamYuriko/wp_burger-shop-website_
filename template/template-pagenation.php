<!-- ページネーションをテンプレート化 -->
<?php if ($wp_query->max_num_pages > 1) : //ページ数が1を超える場合に処理 
?>
    <?php
    if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
    } else {
        echo "管理画面より、プラグインWP-PageNaviが有効になっているか確認してください。";
    }
    ?>
<?php endif; ?>