
<?php get_header(); ?>
<div class="container bg-white my-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
  </ol>
</nav>
</div>
<div class="container bg-white my-3 py-3">
        <div class="row">
            <div class="col-md-8">
            <?php get_template_part( 'loop', 'single' );?>
            </div>
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?> 
			<div id="sidebar" class="sidebar"> 
			<?php dynamic_sidebar( 'sidebar' ); ?> 
			</div> 
			<?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
