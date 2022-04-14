<?php
/**
 * Пошукова форма
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package IPZE
 */

?>

<form id="search-form" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Пошук..." value="<?php echo get_search_query(); ?>">
</form>
