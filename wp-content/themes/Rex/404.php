<?php
get_header(); ?>


    <!-- Start error page -->
    <section id="error-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-page-area">
                        <div class="error-no-area">
                            <div class="error-no">
                                <h2><?php _e( '404 Error', 'rex' ); ?></h2>
                                <p><?php _e( 'Sorry', 'rex' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="error-message">
                        <h4><?php _e( 'Woops! Something gone wrong', 'rex' ); ?></h4>
                        <p><?php _e( 'Sorry, the page you have requested has either been moved,or does not exist, Return to our', 'rex' ) ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('homepage', 'hw23_ajax_rex' ); ?></a><?php _e('.', 'hw23_ajax_rex' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End error page -->

<?php
get_footer();
