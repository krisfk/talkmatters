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





    <div class="inner-container mt-const2 faqs-div mb-5">
        ddd

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
        <h3>Who needs counselling?
        </h3>
        <ul>
            <li>Counselling essentially caters for the seeking of truth and clarity of life events, promoting self
                reflections and awareness. If you are undergoing prolonged difficulties in your emotions, you feel stuck
                and this is felt as impairing your daily functioning and quality of life, by talking in a trusted
                environment, counselling will serve to relieve and enlighten. For individuals who are aspired to
                maintain or enhance mental wellness, it does the job for you too. </li>
        </ul>


        <h3 class="mt-4">How about if I don’t know what my issue is?

        </h3>
        <ul>
            <li>This uncertainty is not uncommon when we talk about emotions and feelings. Discomfort might last long or
                short, the magnitude may vary and it could be felt as coming from no where. Indeed when we start to
                systematically review the context, the trigger(s) could be life-stage specific, a recent act or a past
                event. No worry, it is therapist’s role to gain clarity with you.
            </li>

        </ul>

        <h3 class="mt-4">What is the process like after my registration?

        </h3>
        <ul>
            <li>Congratulations for taking the first step! Commitment to change of is a key contributor to therapeutic
                effectiveness. Please provide us with certain personal information and medical history, if relevant. We
                gather these data and information because they are important to the assessment and subsequent process.
                When we get a better understanding of your issues after a couple of sessions, we will suggest the most
                appropriate approach or approaches for alignment with you. <br>
                Under certain circumstances and for the best interest of clients, we might have to make referral of your
                case to other professionals if deemed appropriate.

            </li>
        </ul>

        <h3 class="mt-4">What is the format of counselling?

        </h3>
        <ul>
            <li>Therapy is primarily conversation-based so face-to-face meeting is highly preferred. However, online
                meeting could be considered for special situations.

            </li>
        </ul>


        <h3 class="mt-4">What am I expected to do during counselling?


        </h3>
        <ul>
            <li>During the process, please open up yourself as much as possible as the more receptive a client is for
                change, the more desirable will be the outcome. <br>
                The process is essentially a co-creation of goals and actions plan; and constant review and reflections
                are key components. <br>
                While self awareness and insights take time to nurture, please do allow change to take place gradually.

            </li>
        </ul>



        <h3 class="mt-4">How about the duration?


        </h3>
        <ul>
            <li>Empirical evidences show that it is common to see changes happen after eight to ten sessions of
                committed work. Each session lasts for fifty five minutes and may take place on a weekly basis.
                Nonetheless, it is subject to individual wish and progress.


            </li>
        </ul>



        <h3 class="mt-4">How about privacy and confidentiality?


        </h3>
        <ul>
            <li>Data privacy is strictly respected. Without client’s written consent, no information will be shared with
                any third parties under normal circumstances. However, if a client reveals an intent or a past act of
                hurting one self or others, or in association with a criminal offence, we reserve the right to refer the
                case to local authorities.
            </li>
        </ul>








    </div>
</div>
<?php
get_footer();