<?php
/*
 * Template Name: Programmation
 * Template Post Type: page
 */
?>

<?php get_header(); ?>


<section class="page">
    <article class="invites">
        <div class="wrapper">
            <h3>Nos invités</h3>
            <div class="invites-liste">

                <?php
                query_posts(array(
                    'post_type' => 'tim_conferencier',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'orderby' => 'title',
                    'showposts' => '8'
                ))
                ?>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div>
                            <div class="invites-liste-img"><a href="<?php the_permalink(); ?>" class="img-invite-hover"><?php the_post_thumbnail("programmation-invite"); ?></a></div>
                            <div class="invites-liste-texte"><h6><?php the_title(); ?></h6>
                                <p><?php the_field('conferencier_emploi') ?></p></div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </article>


    <article class="programmation">
        <div class="wrapper">
            <h3>Consultez l'horaire</h3>
            <div>
<!--                <div class="programmation-dates">-->
<!--                    <div class="jourChoisi" id="jour1">-->
<!--                        <span class="jourTitre">Jour 1</span>-->
<!--                        <p>14 juillet 2018</p>-->
<!--                    </div>-->
<!--                    <div id="jour2">-->
<!--                        <span class="jourTitre">Jour 2</span>-->
<!--                        <p>15 juillet 2018</p>-->
<!--                    </div>-->
<!--                    <div id="jour3">-->
<!--                        <span class="jourTitre">Jour 3</span>-->
<!--                        <p>16 juillet 2018</p>-->
<!--                    </div>-->
<!--                </div>-->


                <?php
                query_posts(array(
                    'post_type' => 'tim_conference',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'orderby' => 'conference_date',
                    'showposts' => '8',
                    'meta_key'	=> 'conference_date'
                ))
                ?>

                <div class="programmation-infos" id="jour1-content">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div>
                                <div>
                                    <div><?php the_field('conference_date'); ?></div>
                                    <div><?php the_field('conference_debut'); ?> - <?php the_field('conference_fin'); ?></div></div>
                                <div>
                                    <span><?php the_field('conference_lieu'); ?>, <?php the_field('conference_local'); ?></span>
                                    <div><a href="">Trouver sur la carte</a></div>
                                </div>
                                <div>

                                    <?php
                                    $posts = get_field('conference_conferencier');
                                    if ($posts): ?>
                                        <?php foreach ($posts as $p): ?>

                                            <span class="programmation-invite"><?php echo get_the_title($p->ID) ?></span>

                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <div><?php the_title(); ?></div>
                                </div>
                                <div><a href="<?php the_permalink(); ?>">En savoir plus</a></div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </article>
</section>

<?php get_footer(); ?>