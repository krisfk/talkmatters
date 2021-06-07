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


    <div class="row mx-auto d-block inner-container align-items-center">
        <div class=" col-lg-12 col-md-12 col-sm-12 col-12 inner-container mt-const position-relative lilian-img-div">

            <?php echo get_field('content_1');?>

        </div>

        <div class=" col-lg-12 col-md-12 col-sm-12 col-12  ">

            <div class="position-relative mt-3">
                <div class="h2-black-line"></div>

                <h2>
                    <?php echo get_field('content_2');?>
                </h2>

            </div>

            <div class="mt-2  text-justify">

                <?php echo get_field('content_3');?>


            </div>
        </div>
    </div>


    <div class="inner-container">




        <div class="mint-bg lilian-therapy-div mt-const p-4 ">

            <div class="row">




                <div class="col-12">
                    <h3>
                        <!-- Education and Counselling Experience -->
                        <?php echo get_field('content_4');?>

                    </h3>
                    <!-- Lilian possesses a Master Degree in Social Sciences (Counselling) from the University of Hong Kong
                    and is a member of Hong Kong Professional Counselling Association. She has extensive experiences
                    working with adolescents in a secondary school setting, dealing with issues such as general anxiety,
                    low self esteem, learning and focus. With adults, she has handled cases related to parenting, anger
                    and couple relationship; as well as anxiety management at work. -->
                    <?php echo get_field('content_5');?>

                    <h3 class="mt-4">
                        <!-- Other Experiences -->
                        <?php echo get_field('content_6');?>

                    </h3>
                    <!-- Lilian also has the capability of a coaching and mentorship. She holds the following experience: -->
                    <?php echo get_field('content_7');?>

                    <!-- <ul class="mt-4">
                        <li>Volunteer Mentor and Counsellor of HKU Counselling Unit (2020 till now)</li>
                        <li>Mentor of CUHK School of Journalism and Communication Taught Postgraduate Mentorship
                            Programme
                            (2020-2021)</li>
                        <li>Volunteer Mentor of staff of HER Fund (2021)</li>
                        <li>Volunteer Member of Board of Advisors, Baptist University Master of Business Administration
                            (2016 - 2019)</li>
                        <li>Volunteer Coach at workplace (2013 - 2020)</li>

                    </ul> -->
                    <?php echo get_field('content_8');?>





                </div>



            </div>
        </div>

        <div class="mt-5 mb-5">

            <div>

                <div class="mb-3">
                    <h2>
                        <?php echo get_field('content_8(1)');?>
                    </h2>
                </div>
                <h2>
                    <!-- Cognitive Behavioral Therapy -->
                    <?php echo get_field('content_9');?>

                </h2>

                <div class="mt-2  text-justify">
                    <!-- A widely used intervention for its proven efficacy and goal-oriented approach. It helps to
                    investigate
                    how one’s thought patterns work and how it may lead to distress, maladaptive behaviors and mental
                    issues. Ongoing homework is a key component to drive for adaptive thoughts and the subsequent
                    improvement in mood. -->
                    <?php echo get_field('content_10');?>



                </div>
            </div>


            <div class="mt-const">
                <h2>
                    <!-- Mindfulness & Positive Psychology -->
                    <?php echo get_field('content_11');?>

                </h2>

                <div class="mt-2  text-justify">
                    <!-- Founded on the belief that people want to lead meaningful and fulfilling lives. There is a natural
                    tendency to cultivate the best qualities within ourselves, which everyone possesses in different
                    ways. Positive Psychology and its mindfulness component amplify personal strengths, self-compassion
                    and social connection; while letting individual to heal base on these values. -->
                    <?php echo get_field('content_12');?>


                </div>
            </div>

            <div class="mt-const">
                <h2>
                    <!-- Emotional-Focused therapy -->
                    <?php echo get_field('content_13');?>



                </h2>

                <div class="mt-2  text-justify">
                    <!-- Gently explores emotions and invites a genuine conversation with the inner self. With empathy and
                    compassion, it effectively promotes the release of blockages, bringing in greater flexibility to
                    heal differently. -->
                    <?php echo get_field('content_14');?>

                </div>
            </div>

            <div class="mt-const">
                <h2>
                    <!-- Solution-focused therapy -->
                    <?php echo get_field('content_15');?>



                </h2>

                <div class="mt-2  text-justify">
                    <!-- A goal-directed approach with limited reference made to the context of the emotional issues. Its
                    primary focus is on the present and future; and on addressing HOW to resolve clients’ disturbing
                    matters. -->
                    <?php echo get_field('content_16');?>



                </div>
            </div>


        </div>

        <!-- <a href="#" class="btn mt-const">Contact Us</a> -->



    </div>
</div>
<?php
get_footer();