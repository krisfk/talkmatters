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





    <div class="inner-container mt-const contact-div">

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-12 contact-div-left-col">


                <?php echo get_field('content_1');?>
                <!-- <h3>Phone</h3>
                9462 6466


                <h3 class="mt-4">Address</h3>
                5/F, 3-5 Old Bailey Street, Central



                <h3 class="mt-4">Email</h3>
                <a target="_blank" href="abc@abc.com">abc@abc.com</a> -->



            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 contact-form-div ">


                <!-- <input type="text" class="form-control" placeholder="<?php echo get_field('content_2');?>">
                <input type="text" class="form-control mt-2" placeholder="<?php echo get_field('content_3');?>">
                <input type="text" class="form-control mt-2" placeholder="<?php echo get_field('content_4');?>">
                <textarea class="form-control mt-2" rows="5"
                    placeholder="<?php echo get_field('content_5');?>"></textarea>

                <div class="text-end">
                    <a href="#" class="btn mt-const"><?php echo get_field('content_6');?></a>
                </div> -->


                <?php
                
                if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
                    $lang_code= ICL_LANGUAGE_CODE;

                    switch($lang_code)
                    {
                        case 'en':
                            echo do_shortcode( '[contact-form-7 id="386" title="Contact form 1" html_class="form contact-form"]' ); 
                        break;
                            case 'zh':
                                echo do_shortcode( '[contact-form-7 id="387" title="Contact form 1" html_class="form contact-form"]' ); 
                                break;

                    }
                  }
                  ?>



            </div>

            <div class="col-12 mt-5 mb-5">
                <!-- <img class="w-100" src="http://104.131.45.33/wp-content/uploads/2021/04/fake-map.jpg" alt=""> -->
                <iframe style="width:100%"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.8982730233533!2d114.15141931544782!3d22.28184298533315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404007b11ff9bb9%3A0x29ae0a369bff164c!2z5Lit55Kw5aWn5Y2R5Yip6KGXMy016Jmf6I235p2O5rS75ZWG5qWt5aSn5buI!5e0!3m2!1szh-TW!2shk!4v1619088007221!5m2!1szh-TW!2shk"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>




    </div>
</div>
<?php
get_footer();