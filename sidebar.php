<!-- Primary corresponde a el id registrado en functions.php -->

<?php if ( is_active_sidebar ( 'primary')) : ?>
    
        <?php dynamic_sidebar( 'primary' ); ?>
    
    <?php endif; ?>