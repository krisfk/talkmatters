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



    <div class="inner-container mt-const position-relative">

        <img src="http://104.131.45.33/wp-content/uploads/2021/04/lilian-photo.jpg" alt="">
        <div class="mint-color-rect"></div>
    </div>


    <div class="inner-container mt-const2">

        <div class="position-relative">
            <div class="h2-black-line"></div>
            <h2 class="h2-on-line">About The Therapist</h2>
            <h2 class="h2-on-line opacity-0">About The Therapist</h2>

        </div>

        <div class="mt-2  text-justify">
            Lilian believes that each individual is unique and deserves a personalized therapeutic approach. She
            practices with a selection of interventions based on psychodynamic theories and individual profile. The
            therapeutic process is perceived as a partnership between client and therapist. She pursues for an outcome
            to empower the client in the reclaiming of wellness and positivity.


        </div>


        <div class="mint-bg lilian-therapy-div mt-const p-4 ">

            <div class="row">

                <div class="col-6 mb-4">
                    <h3>Cognitive Behavioral Therapy</h3>
                    A widely used intervention for its proven efficacy and goal-oriented approach. It helps to
                    investigate how one’s thought patterns work and how it may lead to distress, maladaptive behaviors
                    and mental issues. Ongoing homework is a key component to drive for adaptive thoughts and the
                    subsequent improvement in mood.

                </div>
                <div class="col-6 mb-4">
                    <h3>Mindfulness & Positive Psychology</h3>
                    Founded on the belief that people want to lead meaningful and fulfilling lives. There is a natural
                    tendency to cultivate the best qualities within ourselves, which everyone possesses in different
                    ways. Positive Psychology and its mindfulness component amplify personal strengths, self-compassion
                    and social connection; while letting individual to heal base on these values.

                </div>

                <div class="col-6 mb-4">
                    <h3>Emotional-Focused therapy </h3>
                    Gently explores emotions and invites a genuine conversation with the inner self. With empathy and
                    compassion, it effectively promotes the release of blockages, bringing in greater flexibility to
                    heal differently.

                </div>
                <div class="col-6 mb-4">
                    <h3>Solution-focused therapy</h3>
                    A goal-directed approach with limited reference made to the context of the emotional issues. Its
                    primary focus is on the present and future; and on addressing HOW to resolve clients’ disturbing
                    matters.

                </div>


                <div class="col-12">
                    <h3>Education and Counselling Experience
                    </h3>
                    Lilian possesses a Master Degree in Social Sciences (Counselling) from the University of Hong Kong
                    and is a member of Hong Kong Professional Counselling Association. She has extensive experiences
                    working with adolescents in a secondary school setting, dealing with issues such as general anxiety,
                    low self esteem, learning and focus. With adults, she has handled cases related to parenting, anger
                    and couple relationship; as well as anxiety management at work.

                    <h3 class="mt-4">Other Experiences

                    </h3>
                    Lilian also has the capability of a coaching and mentorship. She holds the following experience-

                    <ul class="mt-4">
                        <li>Volunteer Mentor and Counsellor of HKU Counselling Unit (2020 till now)</li>
                        <li>Mentor of CUHK School of Journalism and Communication Taught Postgraduate Mentorship
                            Programme
                            (2020-2021)</li>
                        <li>Volunteer Mentor of staff of HER Fund (2021)</li>
                        <li>Volunteer Member of Board of Advisors, Baptist University Master of Business Administration
                            (2016 - 2019)</li>
                        <li>Volunteer Coach at workplace (2013 - 2020)</li>

                    </ul>



                </div>



            </div>
        </div>

        <a href="#" class="btn mt-const">Contact Us</a>



    </div>
</div>
<?php
get_footer();