
<?php mesmerize_get_header(); ?>
    <div class="content post-page text-center">
        <div class="gridContainer">
            <div class="row">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                      <h2 class="card-title"><?php echo types_render_field( "nom-de-l-activite", array( ) ); ?></h2>
                      <p class="card-text">  <?php echo types_render_field( "description", array( ) ); ?> </p>
                     <?php  echo types_render_field( "img-activite", array( "alt" => "blue bird", "width" => "400", "height" => "'200", "proportional" => "true" ) ); ?>
                 </div>
                </div>
                <div class="col-xs-12 text-center <?php mesmerize_posts_wrapper_class(); ?>">                    
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
