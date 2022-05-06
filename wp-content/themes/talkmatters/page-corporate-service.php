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

    <div class=" inner-container  mt-const">

        <div class="mt-2 text-justify">
            <?php echo get_field('content_1');?>
            <!-- We believe that “people” is key to the success of a group. A respect of individuality and diversity in a
            system
            is paramount. TalkMatters partners with corporates in its people experience strategy. As an enabler of
            individual wellness and commitment, we lead the process in an innovative way. It involves making sense of
            your
            unique culture & dynamics, identifying mutual purposes and curating sustainable perspectives with your
            employees. The outcome is empowerment that contributes to a collective movement, from Effectiveness to
            Greatness. -->

        </div>
    </div>

    <div class=" mt-const lilian-therapy-div inner-container mint-color home-slogan text-justify mint-bg p-4">

        <h3 class=""><?php echo get_field('content_2');?>
            <!-- Service Scope  -->
        </h3>
        <h3 class="mt-4">
            <?php echo get_field('content_3');?>
            <!-- Talk & Workshop -->

        </h3>
        <?php echo get_field('content_4');?>
        <!-- <ul class="">
            <li> Employee Wellness - Mindfulness, Stress Reduction, Relationship</li>
            <li> Leadership - Communications & Etiquette</li>
            <li> Transformation & Change Management</li>

        </ul> -->

        <h3 class="mt-4">
            <?php echo get_field('content_5');?>
            <!-- One-on-one Services -->


        </h3>
        <?php echo get_field('content_6');?>
        <!-- <ul>
            <li> Executive Coaching
            </li>
            <li> Psychological Counselling
            </li>

        </ul> -->


    </div>



    <div class="inner-container mt-0">





        <a href="/events/" class="btn mt-3 contact-us-btn"> <?php echo get_field('content_7');?>
            <!-- Testimonials -->
        </a>
    </div>
</div>
<?php
get_footer();