<?php get_header(); ?>

    <div class="row">
        <!-- Container -->
        <div class="col-xs-12 col-md-9">
            <div class="row">
                <div class="col-xs-12">
					<?php
					//get_template_part('partes-templates/carousel' );
					?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- form de busca -->
                </div>
            </div>
			<?php get_template_part( 'partes-templates/voting-queue'); ?>
        </div>
        <!-- Sidebar -->
        <div class="col-xs-12 col-md-3"><?php get_sidebar(); ?></div>
    </div>

<?php get_footer();