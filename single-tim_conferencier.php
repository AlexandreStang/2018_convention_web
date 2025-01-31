<?php get_header(); ?>

    <section class="page">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) :
                the_post(); ?>

                <article class="fiche">
                    <div class="wrapper">

                        <h3><?php the_title(); ?></h3>
                        <div class="fiche-content">
                            <div class="fiche-img img-invite">

                                <?php the_post_thumbnail("fiche-invite"); ?>
                                <div class="img-social">



                                    <a href="<?php the_field('conferencier_site_web') ?>"><span class="icon-web"></span></a>

                                    <?php if (have_rows('conferencier_medias_sociaux')): ?>

                                        <!-- BOUCLE DANS LE CONTENU DE CONFERENCIER_MEDIAS_SOCIAUX -->
                                        <?php while (have_rows('conferencier_medias_sociaux')): the_row(); ?>

                                            <!-- GET_SUB_FIELD : DONNE LA VALEUR DE MS_TYPE DE CONFERENCIER_MEDIAS_SOCIAUX -->
                                            <?php if (get_sub_field('ms_type') === 'LinkedIn') : ?>
                                                <a href="<?php the_sub_field('ms_url'); ?>"><span class="icon-linkedin"></a>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('ms_type') === 'Twitter') : ?>
                                                <a href="<?php the_sub_field('ms_url'); ?>"><span class="icon-twitter"></a>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('ms_type') === 'Facebook') : ?>
                                                <a href="<?php the_sub_field('ms_url'); ?>"><span
                                                            class="icon-facebook"></span></a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>

                                    <?php endif; ?>



                                </div>
                            </div>
                            <div class="fiche-texte">
                                <div class="titre-social">
                                    <div class="fiche-titre">À propos</div>
                                    <div>



                                        <a href="<?php the_field('conferencier_site_web') ?>"><span class="icon-web"></span></a>

                                        <?php if (have_rows('conferencier_medias_sociaux')): ?>


                                            <!-- BOUCLE DANS LE CONTENU DE CONFERENCIER_MEDIAS_SOCIAUX -->
                                            <?php while (have_rows('conferencier_medias_sociaux')): the_row(); ?>

                                                <!-- GET_SUB_FIELD : DONNE LA VALEUR DE MS_TYPE DE CONFERENCIER_MEDIAS_SOCIAUX -->
                                                <?php if (get_sub_field('ms_type') === 'LinkedIn') : ?>
                                                    <a href="<?php the_sub_field('ms_url'); ?>"><span class="icon-linkedin"></a>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('ms_type') === 'Twitter') : ?>
                                                    <a href="<?php the_sub_field('ms_url'); ?>"><span class="icon-twitter"></a>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('ms_type') === 'Facebook') : ?>
                                                    <a href="<?php the_sub_field('ms_url'); ?>"><span
                                                                class="icon-facebook"></span></a>
                                                <?php endif; ?>
                                            <?php endwhile; ?>

                                        <?php endif; ?>



                                    </div>
                                </div>
                                <div>
                                    <?php the_content(); ?>

                                    <div class="fiche-titre">Conférence</div>

                                    <?php
                                    $posts = get_field('conferencier_conference');
                                    if ($posts): ?>
                                        <?php foreach ($posts as $p): ?>

                                            <div>
                                                <div class="fiche-event">
                                                    <div><?php echo get_the_title($p->ID) ?></div>
                                                    <div><?php the_field('conference_date', $p->ID) ?>
                                                        , <?php the_field('conference_debut', $p->ID) ?>
                                                        - <?php the_field('conference_fin', $p->ID) ?>
                                                        | <?php the_field('conference_lieu', $p->ID) ?>,
                                                        <?php the_field('conference_local', $p->ID) ?>
                                                    </div>
                                                    <div><a href="#">Trouver sur la carte</a></div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>

        <article class="fiche-invites-liste">
            <div class="wrapper">
                <h3>Nos invités</h3>
                <div class="fiche-invites-liste-content img-invite-hover">

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
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("fiche-invite-liste"); ?></a>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </article>
    </section>

<?php get_footer(); ?>