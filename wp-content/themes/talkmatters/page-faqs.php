<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<div class="container">





    <div class="inner-container mt-const faqs-div mb-5">

        <?php

if( have_rows('faqs') ):

    while( have_rows('faqs') ) : the_row();

        $question = get_sub_field('question');
        $answer = get_sub_field('answer');

        ?>
        <h3 class="mt-4">
            <?php echo $question;?>
        </h3>
        <ul>
            <li>
                <?php echo $answer;?>
            </li>

        </ul>
        <?php
    endwhile;

else :
endif;
?>







    </div>
</div>
<?php
get_footer();