<form class="p-searchForm c-flex" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="c-searchBox">
        <label class="screen-reader-text" for="s">検索:</label>
        <input type="search" name="s" placeholder="キーワードで検索する" id="s" value="<?php echo get_search_query(); ?>" class="c-input c-heading">
    </div>
    <label>
        <input class="p-searchForm__button c-button c-button--search" type="submit" value="検索">
    </label>
</form>