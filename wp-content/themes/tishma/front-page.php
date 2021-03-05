<?php

/**
 * The template for displaying front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tishma
 */

get_header();
?>

<main id="main" class="site-main">
    <section id="top-heading" class="blog-post">
        <div class="blog-post_img">
            <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_3.png' ?>" alt="Post">
        </div>
        <div class="blog-post__info">
            <h1 class="blog-post__title">WE CAN PACK ANYTHING</h1>
            <p class="blo-post-subtitle">
                Into carton, lined carton, bag, pouch tray, case and pallet
            </p>
            <p class="blog-post__text">
                Streaming packing with end-of-line, automated packing systems designed for ease of use and the highest uptime possible.
            </p>
            <div class="blog-post__btn">
                <a href="#" class="blog-post__cta">-- See machines</a>
                <a href="#" class="blog-post__cta">-- Discover markets</a>
            </div>
        </div>
    </section>

    <section id="custom-solutions">

        <h1 class="solution-title">Custom Solutions On Your Demand</h1>
        <p class="solution-subtitle">Some of our best solutions</p>
        <div class="tabs">
            <a data-tab-target="[1,2,3]" href="#" class="blog-tab active">Case packers</a>
            <a data-tab-target="[1,2]" href="#" class="blog-tab">Tray packers</a>
            <a data-tab-target="[3]" href="#" class="blog-tab">Catoners</a>
        </div>
        <div class="row custom-solutions-row">
            <?php
            $args = array(
                'post_type' => 'cartoners',
                'orderby'   => 'date',
                'order' => 'ASC',
            );
            $cartoners = new WP_Query($args);

            if ($cartoners->have_posts()) {
                $item_index = 1;
                while ($cartoners->have_posts()) {
                    $cartoners->the_post();
            ?>
                    <div data-tab-content data-index="<?php echo $item_index; ?>" class="col-4 content-block">
                        <h1><?php the_field("title") ?></h1>
                        <div class='content'>
                            <?php the_field("subtitle") ?>
                        </div>
                        <img class="cartoner-img" src="<?php the_field("image") ?>" alt="Cartoner">
                        <p class="description">
                            <?php the_field("description") ?>
                        </p>
                        <a href="#" id="check">Check out solution ></a>

                    </div>
                    <?php $item_index++; ?>
            <?php
                }
            } else {
                echo 'Oh no products!';
            }
            ?>

        </div>


        <div class="all-tab">
            <a href="#" class="all-solutions">Browse all solutions</a>
        </div>
    </section>



    <section id="packing-systems">
        <h1 class="solution-title">Automated Packing Systems</p>
            <p class="solution-subtitle">Complete lines for all your packaging automation needs</h4>
            <div class="row cartoner-row">
                <div class="col-5">
                    <div id="cartoner-info">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/Packer.png' ?>" alt="Packers">
                        <div class="cartoner-title">
                            <h1 class="title"> - CARTONERS</h1>
                            <h4 class="subtitle">Horizontal and Vertical Cartoners</h4>
                            <a href="#" id="machine">See machine ></a>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div id="packer-info">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/TT-1240.png' ?>" alt="Packers">
                        <h1 class="title"> - CASE PACKERS</h1>
                        <h4 class="subtitle">Comapct and Efficient Case Packing Machine</h4>
                        <a href="" id="machine">See machine ></a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div id="tray-info">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_6.png' ?>" alt="Packers">
                        <h1 class="title"> - TRAY PACKERS</h1>
                        <h4 class="subtitle">A Perfect Solution for Shelf-Ready Packaging</h4>
                        <a href="#" id="machine">See machine ></a>
                    </div>
                </div>
                <div class="col-5">
                    <div id="pouch-info">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_7.png' ?>" alt="Packers">
                        <h1 class="title"> - PRE-MADE POCUHE MACHINES</h1>
                        <h4 class="subtitle">Automatic Pre-made pocuh fill & seal machine</h4>
                        <a href="#" id="machine">See machine ></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">

                            <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_8.png' ?>" alt="Packers">
                            <h1 class="title"> - PALETIZERS</h1>
                            <h4 class="subtitle">Robotic alatizer</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_9.png' ?>" alt="Packers">
                            <h1 class="title"> - ROBOTICS</h1>
                            <h4 class="subtitle">Automate with robots</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_10.png' ?>" alt="Packers">
                            <h1 class="title"> - INTEGRATED SYSTEMS</h1>
                            <h4 class="subtitle">Turkney end-of-line packaging systems</h4>
                        </div>
                    </div>
                </div>
            </div>

    </section>



    <section id="industry-section">
        <h1 class="solution-title">Industry served</h1>
        <h4 class="solution-subtitle">Complete lines for all your packaging automation need</h4>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-info">
                            <div class="blog-logo">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_14.png' ?>" alt="Packers">
                            </div>
                            <div class="blog-descript">
                                <p class="blog-title">PHARMACEUTICAL INDUSTRY</p>
                                <a href="#" class="blog-view">See products ></a>
                            </div>
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_11.png' ?>" alt="Packers">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-info">
                            <div class="blog-logo">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_15.png' ?>" alt="Packers">
                            </div>
                            <div class="blog-descript">
                                <p class="blog-title">CANDY INDUSTRY</p>
                                <a href="#" class="blog-view">See products ></a>
                            </div>
                        </div>

                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_12.png' ?>" alt="Packers">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-info">
                            <div class="blog-logo">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_16.png' ?>" alt="Packers">
                            </div>
                            <div class="blog-descript">
                                <p class="blog-title">MEDICAL INDUSTRY</p>
                                <a href="#" class="blog-view">See products ></a>
                            </div>
                        </div>

                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_11.png' ?>" alt="Packers">
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
<?php
get_footer();
