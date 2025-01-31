<?php get_header(); ?>

<!--BANNIÈRE-->

<div class="banner specialBackground">
    <div class="wrapper banner-content">
        <div>
            <div class="banner-description"><h1><?php bloginfo('description'); ?></h1>
                <h5><?php the_field('cw4_ville', 'option'); ?>, <?php the_field('cw4_pays', 'option'); ?> | <?php the_field('cw4_jour1_alt', 'option'); ?>-<?php the_field('cw4_jour3', 'option'); ?></h5>
                <p>Qu’il s’agisse de sites web ou d’applications mobiles, de design ou de programmation,
                    la Convention Web de Montréal réunit les meileurs esprits de l’industrie afin qu’ils puissent
                    dévoiler leurs secrets</p></div>
            <a href="#">
                <a href="<?php the_field('cw4_billets', 'option'); ?>" class="btn btn-white-border">Achetez-votre billet</a>
            </a>
            <div class="banner-chrono">
                <div>
                    <div>00</div>
                    <div>Jours</div>
                </div>
                <div>
                    <div>00</div>
                    <div>Heures</div>
                </div>
                <div>
                    <div>00</div>
                    <div>Minutes</div>
                </div>
                <div>
                    <div>00</div>
                    <div>Secondes</div>
                </div>
            </div>
        </div>
    </div>
</div>

<section>

<!--    PAGE D'ACCUEIL-->

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article class="pourquoi">
                <div class="wrapper">
                    <h3><?php the_title(); ?></h3>
                    <div class="pourquoi-content">
                        <div><p><?php the_content(); ?></p>
                            <h4><?php the_field('accueil_sous_titre'); ?></h4>
                            <a href="<?php the_field('accueil_bouton_url'); ?>" class="btn btn-green-border"><?php the_field('accueil_bouton_titre'); ?></a>
                        </div>
                        <div>
                            <?php the_post_thumbnail("accueil-pourquoi"); ?>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>




    <article class="enbref">
        <div class="specialBackground">
            <div class="wrapper">
                <h3>En bref</h3>
                <div class="bref-icons">
                    <div><img src="<?php bloginfo('template_url'); ?>/img/bref/rencontrez.png" alt="Rencontrez">
                        <h5>Rencontrez</h5>
                        <p>Rencontrez à la fois designers et programmeurs! Liez des amitiés sur place et agrandissez
                            votre
                            cercle de contact pour des projets à venir!</p></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/img/bref/partagez.png" alt="Partagez">
                        <h5>Partagez</h5>
                        <p>Partagez vos idées et vos expériences avec des gens qui vous comprennent! Élargissez vos
                            horizons
                            et
                            approfondissez vos connaissances!</p></div>
                    <div><img src="<?php bloginfo('template_url'); ?>/img/bref/apprenez.png" alt="Apprenez">
                        <h5>Apprenez</h5>
                        <p>Apprenez-en toujours plus grâce aux conférences de nos invités en tout genre! Ne manquez rien
                            sur
                            les
                            dernières tendances!</p></div>

                </div>
            </div>
        </div>
    </article>

    <article class="apprendre-article">
        <div class="wrapper">
            <h3>Apprenez des meilleurs</h3>
            <div class="apprendre">
                <div>
                    <p>Chaque année, la Convention Web de Montréal réunit une sélection de dévelopeurs web de partout à
                        travers l’Amérique du Nord qui tentent toujours de pousser les limites du web.
                    </p>
                    <p>Les divers conventions proposés permetront aux visiteurs d’en apprendre d’avantage sur la
                        programation web et ses nombreux secrets</p>
                </div>

                <div class="invites-sample">
                    <div class="invites-sample-content img-invite-hover">

                        <?php
                        query_posts(array(
                            'post_type' => 'tim_conferencier',
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'orderby' => 'title',
                            'showposts' => '3'
                        ))
                        ?>

                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("accueil-apprendre"); ?></a>
                                    <div class="invites-sample-content-titles">
                                        <div><?php the_title(); ?></div>
                                        <div><?php the_field('conferencier_emploi') ?></div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <a href="" class="btn btn-green-border">Voir tout</a>
                </div>
            </div>
        </div>
    </article>

    <article class="lieu">
        <div class="specialBackground">
            <div class="wrapper">
                <div class="lieu-content">
                    <h3>Le lieu de rendez-vous</h3>
                    <div>
                        <div>
                            <p>Le Palais des congrès de Montréal est un centre de convention situé dans le Quartier
                                International de Montréal. Plusieurs hôtels entourent le centre et ce dernier est situé à 20
                                kilomètres de l’Aéroport international Pierre-Elliott-Trudeau de Montréal, rendant ainsi le
                                centre facilement accessible par voiture ou par transport en commun pour n’importe quel
                                visiteur.</p>
                            <h5>Adresse</h5>
                            <p>Palais des congrès de Montréal, 1001 Jean Paul Riopelle Pl, Montréal, Canada</p>
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/img/palais01.jpg" alt="Palais des congrès de Montréal">
                            <img src="<?php bloginfo('template_url'); ?>/img/palais02.jpg" alt="Palais des congrès de Montréal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article>
        <div class="wrapper">
            <h3>Choissisez votre forfait</h3>
            <div class="ticket-section">
                <div class="ticket">
                    <span class="ticket-titre">Forfait Régulier</span>
                    <span class="ticket-prix">100$</span>
                    <p>Accès à toutes les présentations</p>
                    <p>Accès à tous les projets en vedette</p>
                    <p>Repas et breuvages inclus</p>
                    <div class="ticket-bottom">
                        <a href="" class="btn btn-green-border">Achetez</a>
                    </div>
                </div>
                <div class="ticket ticket-special">
                    <span class="ticket-titre">Forfait Étudiant</span>
                    <span class="ticket-prix">50$</span>
                    <p>Accès à toutes les présentations</p>
                    <p>Accès à tous les projets en vedette</p>
                    <p>Repas et breuvages inclus</p>
                    <div class="ticket-bottom">
                        <span class="disclaimer">*Réservé aux étudiants!</span>
                        <a href="" class="btn btn-white-border">Achetez</a>
                    </div>
                </div>
                <div class="ticket">
                    <span class="ticket-titre">Forfait d'un jour</span>
                    <span class="ticket-prix">40$</span>
                    <p>Accès à toutes les présentations</p>
                    <p>Accès à tous les projets en vedette</p>
                    <div class="ticket-bottom">
                        <span class="disclaimer">*Valide une journée seulement!</span>
                        <a href="" class="btn btn-green-border">Achetez</a>
                    </div>
                </div>
            </div>
        </div>
    </article>


<!--    COMMANDITAIRES-->

    <?php
    query_posts(array(
        'post_type' => 'tim_commanditaire',
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'title'
    ))
    ?>

    <article>
        <div class="wrapper">
            <h3>Nos commanditaires</h3>
            <div class="commanditaires">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_post_thumbnail(); ?>

                    <?php endwhile; ?>
                <?php endif; ?>

<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/img/commanditaires/Macrosoft.svg" alt="Macrosoft">-->
<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/img/commanditaires/miquipo.svg" alt="Miquipo">-->
<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/img/commanditaires/Skotch.svg" alt="Skotch">-->
<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/img/commanditaires/Staney.svg" alt="Staney">-->
<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/img/commanditaires/Yeti%20Brains.svg" alt="Yeti Brains">-->
            </div>
        </div>
    </article>

</section>

<?php get_footer(); ?>