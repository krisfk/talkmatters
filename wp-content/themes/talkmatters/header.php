<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Damion&family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">



</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a> -->

        <?php // get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="" role="main">

                    <div class="container mt-3">


                        <ul class="header-ul  pb-2">
                            <li>
                                <span class="site-name"> TALKMATTERS PSYCHOLOGICAL COUNSELLING </span>
                            </li>
                            <!-- <li class="ps-4">

                                <span class="writer-style-txt">believe in YOU</span>
                            </li> -->
                        </ul>



                        <div class="top-menu-div pt-2">
                            <ul class="top-menu p-0 m-0 text-center">
                                <?php
        
        $main_menu = wp_get_menu_array('main menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);

global $post;
$post_slug = $post->post_name;
echo $slug;
echo '<li><a class="';
echo ($post_slug==$slug || $post_slug=='home' && $slug ==''  ) ? 'active' :'';
echo'" href="'.$url.'">'.$title.'</a>';



}


?>
                            </ul>

                            <!-- <ul class="top-menu p-0 m-0 text-center">
                                <li><a href="../home" class="active"> Home</a></li>
                                <li><a href="../about">About</a></li>
                                <li><a href="../articles">Articles</a></li>
                                <li><a href="../faqs">Faqs</a></li>
                                <li><a href="../contact">Contact</a></li>

                            </ul> -->

                            <div class="d-inline-block social-media-lang-div">

                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/fb-icon.png"
                                        alt="">
                                </a>
                                <a href="#">

                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ig-icon.png"
                                        alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/in-icon.png"
                                        alt="">
                                </a>

                                <span class="ms-2">
                                    Language:
                                    <select class="form-select lang-select" aria-label="lang">
                                        <option value="eng">English</option>
                                        <option value="chi">中</option>
                                    </select>

                                </span>

                            </div>

                        </div>




                    </div>