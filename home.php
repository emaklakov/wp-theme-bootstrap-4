<?php get_header(); ?>

<div class="container bg-white my-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a href="/"><?php bloginfo('name'); ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
  </ol>
</nav>
</div>
<div class="container bg-white my-3 py-3">
    <div class="row">
		
        <div class="col-md-8">
        <?php while ( have_posts() ) : the_post(); ?>

      <article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
		  
        <div class="meta-head">
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <span>Posted on <time datetime="<?php the_date();?>"><?php the_date();?> at <?php the_time();?></time> by <?php the_author();?></span>
        </div>
		  
        <figure>
          <a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail( 'full-thumbnail', array( 'class' => 'thumbnail' ) ); ?>
</a>
        </figure>
		  
        <?php the_content(); ?>

      </article> 

      <?php endwhile; ?>

      <?php if (function_exists('theme_pagination')) theme_pagination(); ?>	
        </div>
		
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
