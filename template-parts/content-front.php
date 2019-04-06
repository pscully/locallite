<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
    <section class="hero is-primary is-fullheight c-homeBanner">
        <div class="hero-body">
            <div class="container">
                <?php the_title('<h1 class="title is-1 entry-title">Welcome to ', '</h1>'); ?>

                <h2 class="subtitle">
                    <?php
                    $siteDescription = get_bloginfo('description');

                    if ($siteDescription) :
                        printf($siteDescription);
                    else :
                        printf('The Best WordPress Lead Gen Theme');
                    endif;

                    ?><br />
                </h2>
            </div>
        </div>
    </section>
    <section <?php post_class('section'); ?>>
        <div class="container entry-content">
            <div class="columns">
                <div class="column content is-medium is-half"><?php the_content(); ?></div>
                <div class="column is-half">
                    <div class="card">
                        <div class="container c-homeForm">
                            <div class="field">
                                <label class="label">Your Name</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input is-success" type="text" placeholder="Please enter your name">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>

                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                </div>
                                <p class="help is-danger">This email is invalid</p>
                            </div>

                            <div class="field">
                                <label class="label">Message</label>
                                <div class="control">
                                    <textarea class="textarea" placeholder="Textarea"></textarea>
                                </div>
                            </div>


                            <div class="field">
                                <label class="label">Want to get awesome emails?</label>
                                <div class="control">
                                    <label class="radio">
                                        <input type="radio" name="question">
                                        Yes
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="question">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button class="button is-link">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</article>