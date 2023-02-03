<?php
/**
 * Template for sidebar.php
 */
?>

<div class="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-widgets' ) ): ?>
                <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
        <?php endif; ?>
</div>

