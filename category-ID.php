<!-- Importation du header.php -->
<?php get_header(); ?>

<div class="destination">
    <?php 
    $categories = get_categories();
    /*
    if (empty($categories)) {
        echo 'No categories found.';
    } else {
        */
        foreach($categories as $category) {
            ?>
            <div class="carte">
                <h2><?php echo $category->name; ?></h2>
                <p><?php echo $category->count . ' articles'; ?></p>
            </div>
            <?php
        }
    
    ?>
</div>

<!-- Importation du footer.php -->
<?php get_footer(); ?>