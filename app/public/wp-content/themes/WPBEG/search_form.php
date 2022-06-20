<form class="p-search-form" id="searchform">
    <?php
        if ( is_active_sidebar( 'searchform_widget' ) ) :
            dynamic_sidebar( 'searchform_widget' );
        else:
    ?>
    <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
</form>
