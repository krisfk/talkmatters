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
<div class="container blog-container mb-5">





    <div class="blog-inner-container mt-const">
        <div class="row g-4">

            <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">

                <!-- query -->
                <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $query = new WP_Query( array(
        'posts_per_page' => 2,
        'paged' => $paged,
        'post_type' => 'event'
    ) );
?>

                <?php if ( $query->have_posts() )
                { ?>

                <?php while ( $query->have_posts() ) { 
                    $query->the_post(); 
                    
?>
                <div class="post-short-div">

                    <?php
                if(get_the_post_thumbnail_url())
                {
?> <img class="w-100 mb-3" src="<?php echo get_the_post_thumbnail_url();?>" alt="">

                    <?php
                }
                ?>

                    <h2 class=""><?php echo get_the_title();?></h2>
                    <ul class="post-meta mt-2">
                        <li class="meta-date">
                            Posted on <span class="meta-date-text">
                                <?php echo get_the_date();?>
                            </span>
                        </li>
                        <li class="meta-category">




                            <?php 
                            $post_id= get_the_ID();
                            $category_detail=get_the_category($post_id);//$post->ID
                                 $idx=1;
                                //  echo $category_detail[0]->cat_name;
                                // echo sizeof($category_detail);
                                
                                 if(sizeof($category_detail) !=0 && !(sizeof($category_detail)==1 && $category_detail[0]->cat_name =='未分類'))
                                 {                                 
                                     echo '<span class="meta-seperator">/</span>
                                      Category: ';
                                     foreach($category_detail as $cd){

                                        if($idx == sizeof($category_detail))
                                        {
                                            echo '<a href="/category/'.$cd->slug.'">'.$cd->cat_name.'</a>';
                                       
                                        }
                                        else
                                        {
                                            echo '<a href="/category/'.$cd->slug.'">'.$cd->cat_name.'</a>'.' , ';
                                        }
                                        
                                        $idx++;
                                        }
                                 }
                                 

                              
                               
                                

                                  
                            ?>
                        </li>

                    </ul>

                    <div class="mt-3">

                        <?php echo get_the_content() ;?>
                    </div>
                    <!-- <span class="wpex-readmore mt-4 d-block"><a href="<?php echo get_permalink();?>"
                            title="continue reading" rel="bookmark">continue reading →</a></span> -->
                </div>
                <?php
                    
                     }
                     
                     }?>


                <div class="pagination">
                    <?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( '<', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( '>', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
                </div>




            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 blog-right-col">

                <?php get_template_part( 'nav','event-side-col' );           // Navigation bar (nav.php) ?>




            </div>

        </div>


    </div>
</div>
<?php
get_footer();