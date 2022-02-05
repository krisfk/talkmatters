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
    <!-- 
    <div class="mint-color fw-bold home-slogan text-center mt-const">

        We know there is always distress in life and we understand it could be <br>
        hard to deal with, live with them and even trying to face them.

    </div> -->

    <!-- <div class="position-relative home-points-div mt-const">
        <img src="http://104.131.45.33/wp-content/uploads/2021/04/home-img-1.jpg" alt="">

        <div class="home-points">
            Sleeplessness, loss of appetite and motivation, lack of interest and meaning, unclear self image and
            worthiness, procrastination, loneliness, too little love or too much care, seems to get stuck everywhere
            <br> <br>
            Constantly feeling anxious, depressed and stress
            <br><br>
            Personal, workplace or relationship difficulties


        </div>
    </div> -->


    <!-- <div class="mt-const inner-container text-justify">As an emotional guide, we facilitate our clients to identify your
        feelings and the
        meaning behind
        these emotions. We help to make sense of it and explore perspectives to regain positive energy. With respect to
        your
        individuality, we understand your experience are unique and important. We help you get closer to them,
        transforming them into insights in the promotion of clarity of needs and concern. There could be pains and what
        you have been going through could be tough. Here’s a safe space for you to stay true to your feelings, embrace
        them, then to be empowered and to endure.
    </div> -->

    <div class="inner-container mt-const row mx-auto">


        <div class="positive-relative mb-3"> <img
                src="https://talkmatters.com.hk/wp-content/uploads/2022/02/WhatsApp-Image-2022-02-05-at-3.00.16-PM.jpeg"
                class="w-100" alt="">
            <div class="text-end mt-2" style="font-size:12px">Photo by Dan Gold on Unsplash</div>
        </div>


        <div class="position-relative">
            <!-- <div class="h2-black-line"></div> -->

            <h2>
                <!-- Why Talk Matters? -->
                <?php echo get_field('content_1');?>
            </h2>

        </div>

        <div class="mt-2  text-justify">

            <!-- Talking through our matters matters. Every day we experience our lives, we learn
            and we grow. This is unique to human nature and important for humanity to thrive. Via talking, our ancestors
            pass on knowledge between generations, in the creation of cult and culture; to connect in the community and
            to engage each other with trust, respect and understanding. Our daily events and encounters trigger
            emotions, at times positive and at times unwanted. Talking helps to activate our brain and allows proximity
            to the emotional part. We are then able to access the data and process our feelings more effectively. -->
            <?php echo get_field('content_2');?>
        </div>

        <div class="position-relative mt-const">
            <div class="h2-black-line"></div>
            <h2>
                <?php echo get_field('content_3');?>

                <!-- Why is it important to process your feelings? -->
            </h2>
        </div>

        <div class="mt-2  text-justify">

            <!-- Negative feelings might trigger maladaptive behaviors that bring down the
            quality of life. This is something no one wants. Obtaining prolonged wellness requires us to take one step
            further, that is to understand the meaning behind what we feel. In our survival mode, emotional regulation
            is used to counter or avoid threats in the context of fight or flight mode. Feelings signal the brain and
            the body to react (simply speaking, angry feeling works with the brain and body to prepare for a fight; a
            scared emotion prepares for withdrawal).
             -->
            <?php echo get_field('content_4');?>

            <br><br>
            <!-- Talk Matters presents an invitation to talk and walk together. By revisiting your experience and feelings
            that matter to you, you allow a moment to stay vulnerable; and to appreciate what you have gone through with
            kindness and compassion. -->
            <?php echo get_field('content_5');?>


        </div>

        <div class="text-center mb-5">
            <div class="row mt-const pen-content-div d-inline-flex">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12  text-justify mb-4">

                    <!-- <div class="mint-bg  p-3"> -->
                    <div>
                        <?php echo get_field('content_6');?>

                        <!-- No matter how different they look, they are pens for writing. Our emotions function in the same way.
                    They connect with us in different modes and forms, be it happiness, pride, stress, anxiety, anger ,
                    they
                    have something important to tell you. -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-12 pens-div">
                    <?php echo get_field('content_7');?>

                    <!-- <img class="w-100" src="https://talkmatters.com.hk/wp-content/uploads/2021/04/pens.jpg" alt=""> -->

                </div>

            </div>
        </div>




        <!-- <a href="#" class="btn mt-const">Contact Us</a> -->
    </div>
</div>
<?php
get_footer();