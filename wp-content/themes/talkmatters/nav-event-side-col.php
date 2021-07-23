<div class="blog-right-col-inner">
    <div class="sidebar-widget widget_recent_entries clr">
        <h5 class="widget-title">Recent Posts</h5>
        <ul>

            <?php
                            wp_reset_query();

$args = array('posts_per_page' => 5,'post_type' => 'event');
$wp_query = new WP_Query( $args );

$posts = $wp_query->get_posts();

foreach( $posts as $post ) {
$post_id = $post->ID;
    ?>
            <li>
                <a href="<?php echo get_permalink($post_id);?>"><?php echo get_the_title($post_id);?></a>
            </li>
            <?php
}

?>




            <!-- <li>
                                <a href="https://demo.wpexplorer.com/blogger/2012/11/10/reach-new-heights/">Reach New
                                    Heights</a>
                            </li> -->

        </ul>
    </div>


    <!-- <div class="sidebar-widget widget_archive clr">
        <h5 class="widget-title">Archives</h5>
        <ul>
            <?php

$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
foreach($years as $year) {
?>


            <?php	$months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '".$year."' ORDER BY post_date DESC");
			foreach($months as $month) {
			?>
            <li><a
                    href="<?php echo get_month_link($year, $month); ?>"><?php echo date( 'F', mktime(0, 0, 0, $month) ).' '.$year;?></a>

            </li>
            <?php }?>

            <?php } ?>
        </ul>
    </div> -->



    <?php

$categories = get_categories();

if(sizeof($categories)>0)
{
?>
    <div class="sidebar-widget widget_tag_cloud clr">
        <h5 class="widget-title">Categories</h5>
        <div class="tagcloud">
            <ul>
                <?php
                                      
foreach($categories as $category) {
   echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
}



?>
            </ul>
        </div>
    </div>
    <?php
}?>


    <?php  $tags = get_tags();
                    if($tags)
                    {
?>
    <div class="sidebar-widget widget_tag_cloud clr">
        <h5 class="widget-title">Tags</h5>
        <div class="tagcloud">
            <?php
                        
                    echo '<ul>';
                    for($i=0;$i<sizeof($tags);$i++)
                    {
                        echo '<li><a href="/tag/'.$tags[$i]->slug.'/">'.$tags[$i]->name.'</a></li>';
                    }
                    echo '</ul>';


?>
        </div>
    </div>
    <?php 
                    }?>

</div>