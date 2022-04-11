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

        We believe that “people” is key to the success of a group. A respect of individuality and diversity in a system
        is paramount. TalkMatters partners with corporates in its people experience strategy. As an enabler of
        individual wellness and commitment, we lead the process in an innovative way. It involves making sense of your
        unique culture & dynamics, identifying mutual purposes and curating sustainable perspectives with your
        employees. The outcome is empowerment that contributes to a collective movement, from Effectiveness to
        Greatness.


    </div>

    <div class=" lilian-therapy-div inner-container mint-color home-slogan text-justify mint-bg p-4">

        <h2>Service Scope </h2>
        <h3 class="mt-4">
            Talk & Workshop

        </h3>
        <ul class="">
            <li> Employee Wellness - Mindfulness, Stress Reduction, Relationship</li>
            <li> Leadership - Communications & Etiquette</li>
            <li> Transformation & Change Management</li>

        </ul>

        <h3 class="mt-4">
            One-on-one Services


        </h3>
        <ul>
            <li> Executive Coaching
            </li>
            <li> Psychological Counselling
            </li>

        </ul>

        <!-- We see the fundamentals of LIFE - love, intimacy, fun and energy.
        Yet while we live and grow, it could be full of challenges,
        distress and negative emotions that are hard for an individual to manage and maneuver. -->

    </div>

    <div class="inner-container mt-const">

        <div class="scope-points ">

            <!-- <span class="fw-bold"> You are not alone if you found yourself disturbed by the following:</span>
            <br> <br>

            <ul>
                <li>Sleeplessness, loss of appetite and interest, lack of meaning and motivation, unclear self image and
                    worthiness, loneliness, too little love or too much care, seems to get stuck everywhere</li>
                <li> Procrastination, constantly feeling depressed, anxious and stressed

                </li>
                <li>Workplace, inter-personal or relationship challenges
                </li>
            </ul> -->


        </div>
    </div>
    <!-- <div class="position-relative home-points-div mt-const">
        <img src="http://104.131.45.33/wp-content/uploads/2021/04/home-img-1.jpg" alt="">

        <div class="home-points">

            You are not alone if you found yourself disturbed by the following: <br> <br>
            Sleeplessness, loss of appetite and interest, lack of meaning and motivation, unclear self image and
            worthiness, loneliness, too little love or too much care, seems to get stuck everywhere
            <br> <br>
            Procrastination, constantly feeling depressed, anxious and stressed
            <br> <br>
            Workplace, inter-personal or relationship challenges

        </div>
    </div> -->


    <div class="mt-const inner-container text-justify">

        <!-- As an emotions guide, we facilitate clients to identify feelings
        and importantly the meaning behind. We respect your individuality, we understand what you have experienced are
        unique and critical to what you feel. We help to make sense of your emotions and explore new perspectives to
        help you process them. The ultimate goal is to regain positive energy. -->



    </div>

    <div class="inner-container mt-const">

        <div class="position-relative">
            <div class="h2-black-line"></div>
            <!-- <h2 class="h2-on-line">How does it work?
            </h2>
            <h2 class="h2-on-line opacity-0">How does it work?
            </h2> -->

            <h2>
                <!-- How does it work? -->

            </h2>

        </div>
        <!-- http://104.131.45.33/wp-content/uploads/2021/04/water-1.png -->
        <div class="mt-2  text-justify">


            <div class="row">
                <!-- <div class="col-4 position-relative">
                    <div class="feather">
                        <img class="w-100" src="http://104.131.45.33/wp-content/uploads/2021/04/water-2.png " alt="">
                    </div>
                </div> -->
                <div class="col-12">
                    <!-- We will talk through your issues, conflicts and adversity. It is a process where
                    there is no judgement; it is a journey whereby you have us as your companions. We work to gradually
                    unveil
                    your inner emotions like how an onion is peeled！ What you are thinking, feeling and behaving are
                    important
                    and we wish to take a step further to identify the messages behind. Through reflections and
                    re-visiting what
                    you have gone through, we get closer to insights that promote clarity of deep-rooted needs and which
                    have
                    not been answered. Together we may redefine perception of your discomfort, discover new dimensions
                    and
                    gather strength for change. The outcome could be a re-claim of resilience or a new-found power of
                    healing
                    that ultimately enhances your emotional wellness. -->

                </div>

            </div>




            <div class="mt-const">

                <!-- We believe in connecting with you and inviting you to connect with your own self. Privacy and
                confidentiality is an essential part of the process as we cherish the trust you put in us. -->
            </div>

            <!-- <h3 class="mt-4"> COVID measures</h3>
            Sessions must be attended with masks on for both client and counsellor. Counselling room is sterilized
            regularly with use of disposable protective covers if needed. -->



        </div>

        <div class="row mt-const">

            <div class="col-lg-12 col-md-12 col-sm-12 col-12  glass-div">

                <!-- <img class="w-100"
                    src="https://talkmatters.com.hk/wp-content/uploads/2021/04/water-1.png" alt=""> -->
                <?php echo get_field('content_7');?>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">

                <div class="mint-bg p-4 mt-0" style="background: rgb(207 228 216 / 100%);">
                    <!-- Negative emotions are like a glass of water with some mud inside. We just want to spoon
                    the mud away. When you do this, the water immediately becomes muddy and messy. The process asks us
                    to
                    tolerate this unwanted state and by doing it step by step with patience, we will succeed in making
                    the
                    water clear again. You might feel uneasy or even painful as feelings are stirred up. Yet, please
                    rest
                    assured that at Talk Matters, we provide you a safe space to stay true to yourself, embrace the
                    feelings, then to be empowered and to endure. -->


                </div>
            </div>

        </div>


        <a href="/events/" class="btn mt-3 contact-us-btn"> Testimonials <?php //echo get_field('content_9');?>
        </a>
    </div>
</div>
<?php
get_footer();