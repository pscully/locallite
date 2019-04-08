<article id="post-<?php the_ID(); ?>">
    <section class="hero is-fullheight c-homeBanner">
        <div class="hero-body">
            <div class="container">
                <?php the_title('<h1 class="title is-1 is-size-2-mobile entry-title">', '</h1>'); ?>

                <h2 class="subtitle has-text-white">
                    <?php
                    $siteDescription = get_bloginfo('description');

                    if ($siteDescription) :
                        printf($siteDescription);
                    else :
                        printf('The Best WordPress Lead Gen Theme');
                    endif;

                    ?><br />
                </h2>
                <a href="#home--form" class="button is-medium is-outlined">Contact Us</a>
            </div>
        </div>
    </section>
    <section <?php post_class('section'); ?>>
        <div class="container entry-content">
            <div class="columns">
                <div class="column content is-medium s-four-fifths">
                    <?php the_content(); ?>
                    <div class="box">
                      <h3 class="is-size-5">We're Standing By To Assist You! <span class="is-hidden-mobile">➡️</span><span class="is-hidden-tablet">⬇️</span></h3>
                      <p>
                          Use the form here to contact our team today. Or click any of the "Call Now" buttons you find around our site.
                          During business hours, our team is friendly and quick to respond. After hours, we are just as friendly, but may not respond right away. 😃
                      </p>
                      <hr>
                      <span>Talk to a human! Call: <?php echo get_option('phone_number'); ?></span>
                </div>
                </div>
                <div id="home--form" class="column is-two-fifths">
                   <?php localwp_show_form(); ?>
                </div>
            </div>
        </div>
        <div>

            <?php
            bulmapress_custom_query(
                array(
                    'post_type' => 'testimonials',
                    'post_class'    => 'posts',
                    'section_title' => 'Recent Testimonials',
                    'section_columns' => 3,
                    'section_max_posts' => 3,
                    'section_button_text' => 'Read All Reviews'
                )
            );
            ?>
        </div>
    </section>
</article>