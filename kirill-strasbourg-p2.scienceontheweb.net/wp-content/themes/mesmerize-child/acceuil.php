
<?php
/*
Template Name: Acceuil
*/
?>

    <?php mesmerize_get_header(); ?>
    <section class="container col-lg-12 col-sm-12 col-xs-12">
        <div class="page-content description_home row">
            <article class="col-sm-12 text-center">
                <h1> Qui sommes nous? </h1>
                <hr class="separation">
                <p> Office de tourisme de Strasbourg vous propose differents informations pratiques de la ville de Strasbourg. Sur notre site vous trouvez tout les évenements ou lieux à visiter, les musées, les concerts, expositions et autres visites et activités de la ville ainsi que les actualités. On vous souhaite une bonne visite!</p>
                <p> Capitale européenne et capitale de l’Alsace, Strasbourg est une ville jeune et dynamique. Elle vous surprendra par son côté pétillant qui fait d’elle une surdouée de la culture : musées, théâtres, opéra, salles de concert, festivals… Tout est à portée de main ! Alors, amateurs de bonnes tables, de monuments et de divertissement sachez-le d’avance : vous aurez toutes les chances d’en tomber amoureux ! </p>
                <h3>Voici ce que vous trouvez sur ce site: </h3>
                <div class="row">
                    <div class="col-sm-6 elem_main_home">
                        <div class="card card-elem">
                            <div class="card-body">
                                <h5 class="card-title">Actualités</h5>
                                <p class="card-text">
                                    Si vous êtes curieux et vous voulez savoir les dernières actualités
                                </p>
                                <a href="http://kirill-strasbourg-p2.scienceontheweb.net/actuality/" class="card-link">  <i class="fa fa-comment  fa-4x icon_card"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 elem_main_home">
                        <div class="card card-elem">
                            <div class="card-body">
                                <h5 class="card-title">Tous les évenements</h5>
                                <p class="card-text">
                                    Savoir tout ce qui se passe dans la ville actuellement, participez!
                                </p>

                                <a href="http://kirill-strasbourg-p2.scienceontheweb.net/info/" class="card-link"> <i class="fa fa-info-circle fa-4x icon_card"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 elem_main_home">
                        <div class="card card-elem">
                            <div class="card-body">
                                <h5 class="card-title">Les activités du mois</h5>
                                <p class="card-text">
                                    Les évenements prévu pour ce moi, inscrivez-vous et passez un bon moment!
                                </p>
                                <a href="http://kirill-strasbourg-p2.scienceontheweb.net/activites-strasbourg-evenements/" class="card-link"> <i class="fa fa-calendar fa-4x icon_card"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 elem_main_home">
                        <div class="card card-elem">
                            <div class="card-body">
                                <h5 class="card-title">Nous contacter</h5>
                                <p class="card-text">
                                    Contactez nous ça nous fera plaisir de vous répondre plus vite possible.
                                </p>
                                <a href="http://kirill-strasbourg-p2.scienceontheweb.net/contact/" class="card-link"> <i class="fa fa-envelope-square fa-4x icon_card"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="sidebar col-sm-4 col-md-12 col-lg-12">
            </div>
            <div>
                <h4 class="text-center"> Dernière actualité</h4>
                <?php echo do_shortcode("[post_grid id='196']"); ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>

