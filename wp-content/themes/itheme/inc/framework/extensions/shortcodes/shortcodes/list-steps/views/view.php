<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<h2 class="text-center title-shop-home"><?=$atts['text']; ?></h2>
<div class="list-shop-template">
    <ul>
        <?php foreach ( $atts['tabs'] as $tab ) : ?>
        <li><a href="<?=$tab['tab_link']; ?>" ><?=$tab['tab_title']; ?></a> </li>

        <?php
        endforeach;
        ?>
    </ul>
</div>
