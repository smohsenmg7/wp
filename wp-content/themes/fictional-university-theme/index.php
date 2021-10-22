<?php
get_header(); ?>

    <div class="page-banner">
        <div class="page-banner__bg-image"
             style="background-image: url(<?php echo get_theme_file_uri( '/images/ocean.jpg' ) ?>);"></div>
        <div class="page-banner__content container t-center c-white">
            <h1 class="headline headline--large">Welcome to out Blog</h1>
            <div class="page-banner__intro">
                <p>keep up with out latest postss</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
		<?php while ( have_posts() ) {
			the_post(); ?>
            <div class="post-item">
                <h2><a href="<?php the_permalink(); ?>"> <?php the_title() ?></a></h2>

                <div class="metabox">
                    <p>posted by</p>
                </div>

                <div class="generic-content">
                    <?php the_excerpt(); ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading</a></p>
                </div>

            </div>
			<?php
		} ?>
    </div>
<?php
get_footer();
?>