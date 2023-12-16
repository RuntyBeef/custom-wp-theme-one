<?php

$image = get_field('image');
$headingOne = get_field('heading');
$text = get_field('text');
$imageHeading = get_field('image_heading');
$imageText = get_field('image_text')
?>

<?php include ("/Users/runty/local-repos/runty-wp-theme-one/wp-content/themes/custom-wp-theme-one/content-blocks/selectors/width.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12 <?= widthText; ?>">
            <?php if ($headingOne) : ?>
                <h2><?= $headingOne; ?>
                <?php endif;?>
            <?= $text; ?>
            <?php 
$link = get_field('link');
if( $link ): ?>
    <a class="button" href="<?php echo esc_url( $link ); ?>">Continue Reading</a>
<?php endif; ?>
            <?php
            ?>
        </div>
        <div class="col-12 <?= $widthImage; ?>">
        <?php if ($imageHeading) : ?>
            <h2><?= $imageHeading; ?>
            <?php 
$columnSize = 'column-image'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $columnSize );
} ?>
            <?php endif; ?>
        </div>
    </div>
</div>