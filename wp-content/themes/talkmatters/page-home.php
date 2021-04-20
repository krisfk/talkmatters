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

    <div class="mint-color fw-bold home-slogan text-center mt-5">

        We know there is always distress in life and we understand it could be <br>
        hard to deal with, live with them and even trying to face them.

    </div>

    <div class="position-relative home-points-div mt-5">
        <img src="http://104.131.45.33/wp-content/uploads/2021/04/home-img-1.jpg" alt="">

        <div class="home-points">
            <!-- You are not alone if you found yourself disturbed by the following issues: -->
            <!-- <br><br> -->
            Sleeplessness, loss of appetite and motivation, lack of interest and meaning, unclear self image and
            worthiness, procrastination, loneliness, too little love or too much care, seems to get stuck everywhere
            <br> <br>
            Constantly feeling anxious, depressed and stress
            <br><br>
            Personal, workplace or relationship difficulties


        </div>
    </div>


    <div class="mt-5 inner-container text-justify">As an emotional guide, we facilitate our clients to identify your
        feelings and the
        meaning behind
        these emotions. We help to make sense of it and explore perspectives to regain positive energy. With respect to
        your
        individuality, we understand your experience are unique and important. We help you get closer to them,
        transforming them into insights in the promotion of clarity of needs and concern. There could be pains and what
        you have been going through could be tough. Here’s a safe space for you to stay true to your feelings, embrace
        them, then to be empowered and to endure.
    </div>

    <div class="inner-container mt-5">

        <div class="position-relative">
            <div class="h2-black-line"></div>
            <h2 class="h2-on-line">How does it work?</h2>
        </div>
    </div>
</div>
<?php
get_footer();