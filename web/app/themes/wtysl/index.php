<?php get_header(); ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): ?>
    <?php the_post(); ?>
      <div class="Wrapper">
        <article class="Grid Grid--center-12-8">
          <div class="Grid-item">
            <h1 class="Headline Headline--1"><?php the_title(); ?></h1>

            <div class="Text">
              <?php the_content(); ?>
            </div>
          </div>
        </article>
      </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
