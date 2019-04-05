<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
    <div class="container is-widescreen">
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        <?php the_title('<h1 class="title is-1 entry-title">', '</h1>'); ?>
                    </h1>
                    <h2 class="subtitle">
                        <?php printf(get_bloginfo('description')); ?><br />
                    </h2>
                </div>
            </div>
        </section>
    </div>
    <div class="container content">
        <div class="content entry-content">

        </div>
    </div>
</article>