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





    <div class="inner-container mt-const2 contact-div">

        <div class="row">

            <div class="col-6 contact-div-left-col">

                <h3>Phone</h3>
                9462 6466


                <h3 class="mt-4">Address</h3>
                5/F, 3-5 Old Bailey Street, Central



                <h3 class="mt-4">Email</h3>
                abc@abc.com
            </div>
            <div class="col-6">

                <input type="text" class="form-control" placeholder="Name">
                <input type="text" class="form-control mt-2" placeholder="Email">
                <input type="text" class="form-control mt-2" placeholder="Tel">
                <textarea class="form-control mt-2" rows="5" placeholder="Type Your Message Here"></textarea>

                <div class="text-end">
                    <a href="#" class="btn mt-const">Submit</a>
                </div>

            </div>

            <div class="col-12 mt-5">
                <img class="w-100" src="http://104.131.45.33/wp-content/uploads/2021/04/fake-map.jpg" alt="">
            </div>

        </div>




    </div>
</div>
<?php
get_footer();