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

    <div class="mint-color fw-bold home-slogan text-center mt-4">

        We know there is always distress in life and we understand it could be <br>
        hard to deal with, live with them and even trying to face them.

    </div>

    <div class="position-relative home-points-div mt-4">
        <img src="http://104.131.45.33/wp-content/uploads/2021/04/home-img-1.jpg" alt="">

        <div class="home-points">
            Sleeplessness, loss of appetite and motivation, lack of interest and meaning, unclear self image and
            worthiness, procrastination, loneliness, too little love or too much care, seems to get stuck everywhere
            <br> <br>
            Constantly feeling anxious, depressed and stress
            <br><br>
            Personal, workplace or relationship difficulties


        </div>
    </div>
</div>
<?php
get_footer();