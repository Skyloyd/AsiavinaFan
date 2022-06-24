<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
add_shortcode( 'csw_search_form', 'csw_search_form_fc' );
function csw_search_form_fc(){
    ?>
    <form method="get" class="csw-search-form" action="<?php echo get_home_url() ?>">
    <input type="search" class="csw-search-field" placeholder="Tìm Kiếm" value="" name="s">
    <button type="submit" class="csw-search-submit">
        <i class="fas fa-search"></i>
    </button><br>
    </form>
    <?php
}