<?php get_header(); ?>
<main class="wrap">
    <section class="content-area">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-full">
            <header>
                <h2><?php the_title(); ?></h2>
            </header>
            <?php the_content(); ?>
            <hr/>par <?php the_author(); ?>
        </article>
        <?php endwhile; else : ?>
        <article>
            <p>Aucun article n'a été trouvé.</p>
        </article>
        <?php endif; ?>
    </section>
    <section class="random-posts">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("D'autres recettes") ) : endif; ?>
    </section>
</main>
<?php get_footer(); ?>