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





    <div class="inner-container mt-const2">
        <div class="row">

            <div class="col-8">
                <div class="post-short-div">
                    <img class="w-100"
                        src="https://demo.wpexplorer.com/blogger/wp-content/uploads/sites/15/2012/03/hike.jpg" alt="">

                    <h2>Reach New Heights</h2>
                    <ul class="post-meta clr">
                        <li class="meta-date">
                            Posted on <span class="meta-date-text">November 10, 2012</span>
                        </li>
                        <li class="meta-category">
                            <span class="meta-seperator">/</span>Under <a
                                href="https://demo.wpexplorer.com/blogger/category/neat-finds/" title="Neat Finds">Neat
                                Finds</a>, <a href="https://demo.wpexplorer.com/blogger/category/travel/"
                                title="Travel">Travel</a>
                        </li>
                        <li class="meta-comments comment-scroll">
                            <span class="meta-seperator">/</span>With <a
                                href="https://demo.wpexplorer.com/blogger/2012/11/10/reach-new-heights/#comments"
                                class="comments-link">4 Comments</a>
                        </li>
                    </ul>

                    <div>Nam mattis tincidunt mattis. Vivamus quam est, condimentum sed iaculis sed, congue ac arcu.
                        Morbi nec ipsum velit. Praesent elementum, turpis quis vehicula malesuada, elit mauris sodales
                        felis, ac porta lorem metus eget ante. Etiam vitae mollis enim, et accumsan enim. Ut eu
                        tristique sem, a ultricies odio. Integer ac…
                    </div>
                    <span class="wpex-readmore"><a
                            href="https://demo.wpexplorer.com/blogger/2012/11/10/reach-new-heights/"
                            title="continue reading" rel="bookmark">continue reading →</a></span>
                </div>
            </div>
            <div class="col-4">

                <div class="sidebar-widget widget_recent_entries clr">
                    <h5 class="widget-title">Recent Posts</h5>
                    <ul>
                        <li>
                            <a href="https://demo.wpexplorer.com/blogger/2012/11/10/reach-new-heights/">Reach New
                                Heights</a>
                        </li>
                        <li>
                            <a href="https://demo.wpexplorer.com/blogger/2012/10/28/never-ending-story/">Never Ending
                                Story</a>
                        </li>
                        <li>
                            <a href="https://demo.wpexplorer.com/blogger/2012/10/12/on-a-boat/">On A Boat</a>
                        </li>
                        <li>
                            <a href="https://demo.wpexplorer.com/blogger/2012/09/29/how-to-design/">How To Design</a>
                        </li>
                        <li>
                            <a href="https://demo.wpexplorer.com/blogger/2012/08/10/a-walk-in-the-park/">A Walk In The
                                Park</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>


    </div>
</div>
<?php
get_footer();