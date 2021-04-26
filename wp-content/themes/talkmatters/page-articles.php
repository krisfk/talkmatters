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
<div class="container blog-container">





    <div class="blog-inner-container mt-const2">
        <div class="row g-4">

            <div class="col-8">

                <!-- query -->
                <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $query = new WP_Query( array(
        'posts_per_page' => 2,
        'paged' => $paged
    ) );
?>

                <?php if ( $query->have_posts() )
                { ?>

                <?php while ( $query->have_posts() ) { 
                    $query->the_post(); 
                    
?>
                <div class="post-short-div">
                    <img class="w-100" src="<?php echo get_the_post_thumbnail_url();?>" alt="">

                    <h2 class="mt-3"><?php echo get_the_title();?></h2>
                    <ul class="post-meta mt-2">
                        <li class="meta-date">
                            Posted on <span class="meta-date-text">
                                <?php echo get_the_date();?>
                            </span>
                        </li>
                        <li class="meta-category">
                            <span class="meta-seperator">/</span>Category:


                            <?php 
                            $post_id= get_the_ID();
                            $category_detail=get_the_category($post_id);//$post->ID
                                    foreach($category_detail as $cd){
                                    echo '<a href="/category/'.$cd->cat_name.'">'.$cd->cat_name.'</a>'.',';
                                    // print_r ($cd);
                                    }

                                    // https://talkmatters.com.hk/category/test-category/

                            // $cate_arr= wp_get_post_categories();
                            // print_r($cate_arr);
                            ?>
                        </li>

                    </ul>

                    <div class="mt-3">

                        <?php echo get_the_excerpt() ;?>
                    </div>
                    <span class="wpex-readmore mt-4 d-block"><a href="<?php echo get_permalink();?>"
                            title="continue reading" rel="bookmark">continue reading →</a></span>
                </div>
                <?php
                    
                     }
                     
                     }?>




                <!-- 
                <div class="post-short-div">
                    <img class="w-100"
                        src="https://demo.wpexplorer.com/blogger/wp-content/uploads/sites/15/2012/03/hike.jpg" alt="">

                    <h2 class="mt-3">Reach New Heights</h2>
                    <ul class="post-meta mt-2">
                        <li class="meta-date">
                            Posted on <span class="meta-date-text">November 10, 2012</span>
                        </li>
                        <li class="meta-category">
                            <span class="meta-seperator">/</span>Category: <a
                                href="https://demo.wpexplorer.com/blogger/category/neat-finds/" title="Neat Finds">Neat
                                Finds</a>, <a href="https://demo.wpexplorer.com/blogger/category/travel/"
                                title="Travel">Travel</a>
                        </li>

                    </ul>

                    <div class="mt-3">Nam mattis tincidunt mattis. Vivamus quam est, condimentum sed iaculis sed, congue
                        ac arcu.
                        Morbi nec ipsum velit. Praesent elementum, turpis quis vehicula malesuada, elit mauris sodales
                        felis, ac porta lorem metus eget ante. Etiam vitae mollis enim, et accumsan enim. Ut eu
                        tristique sem, a ultricies odio. Integer ac…
                    </div>
                    <span class="wpex-readmore mt-4 d-block"><a
                            href="https://demo.wpexplorer.com/blogger/2012/11/10/reach-new-heights/"
                            title="continue reading" rel="bookmark">continue reading →</a></span>
                </div> -->


            </div>
            <div class="col-4 blog-right-col">

                <div class="blog-right-col-inner">
                    <div class="sidebar-widget widget_recent_entries clr">
                        <h5 class="widget-title">Recent Posts</h5>
                        <ul>
                            <li>
                                <a href="https://demo.wpexplorer.com/blogger/2012/11/10/reach-new-heights/">Reach New
                                    Heights</a>
                            </li>
                            <li>
                                <a href="https://demo.wpexplorer.com/blogger/2012/10/28/never-ending-story/">Never
                                    Ending
                                    Story</a>
                            </li>
                            <li>
                                <a href="https://demo.wpexplorer.com/blogger/2012/10/12/on-a-boat/">On A Boat</a>
                            </li>
                            <li>
                                <a href="https://demo.wpexplorer.com/blogger/2012/09/29/how-to-design/">How To
                                    Design</a>
                            </li>
                            <li>
                                <a href="https://demo.wpexplorer.com/blogger/2012/08/10/a-walk-in-the-park/">A Walk In
                                    The
                                    Park</a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget_archive clr">
                        <h5 class="widget-title">Archives</h5>
                        <ul>
                            <li><a href="https://demo.wpexplorer.com/blogger/2012/11/">November 2012</a></li>
                            <li><a href="https://demo.wpexplorer.com/blogger/2012/10/">October 2012</a></li>
                            <li><a href="https://demo.wpexplorer.com/blogger/2012/09/">September 2012</a></li>
                            <li><a href="https://demo.wpexplorer.com/blogger/2012/08/">August 2012</a></li>
                            <li><a href="https://demo.wpexplorer.com/blogger/2012/07/">July 2012</a></li>
                            <li><a href="https://demo.wpexplorer.com/blogger/2012/06/">June 2012</a></li>
                            <li><a href="https://demo.wpexplorer.com/blogger/2012/05/">May 2012</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget_tag_cloud clr">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tagcloud"><a href="https://demo.wpexplorer.com/blogger/tag/blog/"
                                class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 8pt;"
                                aria-label="blog (2 items)">blog</a>
                            <a href="https://demo.wpexplorer.com/blogger/tag/minimal/"
                                class="tag-cloud-link tag-link-8 tag-link-position-2" style="font-size: 22pt;"
                                aria-label="minimal (6 items)">minimal</a>
                            <a href="https://demo.wpexplorer.com/blogger/tag/theme/"
                                class="tag-cloud-link tag-link-9 tag-link-position-3"
                                style="font-size: 16.3243243243pt;" aria-label="theme (4 items)">theme</a>
                            <a href="https://demo.wpexplorer.com/blogger/tag/wordpress/"
                                class="tag-cloud-link tag-link-10 tag-link-position-4"
                                style="font-size: 16.3243243243pt;" aria-label="wordpress (4 items)">wordpress</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>
</div>
<?php
get_footer();