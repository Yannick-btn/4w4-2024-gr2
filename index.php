<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème gr2</title>
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() . '/normalize.css'; ?>">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() . '/style.css'; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div id="menu" class="global">
        <div class="entete_menu">
        <?php wp_nav_menu();?>
    </div>
    </div>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1 class="bgc-text">Thème du groupe #2</h1>
            <h2 class="bgc-text">4W4 - conception d'interface <span>et développement Web</span></h2>
            <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
            <button class="entete__button">Événements</button>
        </header>
        <div class="vague">

            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill:var(--couleur-arriere-accueil)"></path>
            </svg>


        </div>
    </div>
    <div id="accueil" class="global">
        <?php  ?>
        <section class="accueil__section">
            <h2>Accueil</h2>
            <div class="section__cours">

                <?php if (have_posts()) :
                    while (have_posts()) : the_post();
                        $titre = get_the_title();
                        $sigle = substr($titre, 0, 7);
                        $pos_parentese = strpos($titre, '(');
                        $duree = substr($titre, $pos_parentese + 1 , - 1);
                        $titre2 = substr($titre, 7, $pos_parentese - 7);



                        // //selectioner le nombre dheur a laide de strpos()
                        // // Trouver les positions de la parenthèse ouvrante et fermante
                        // $ouvert = strpos($titre, '(');
                        // $fermant = strpos($titre, ')');
                        // // Si les parenthèses ouvrante et fermante sont trouvées
                        // if ($ouvert !== false && $fermant !== false) {
                        //     // Calculer la longueur de la sous-chaîne entre les parenthèses
                        //     $longueur_sous_chaine = $fermant - $ouvert - 1;

                        //     // Extraire la sous-chaîne entre les parenthèses
                        //     $contenu_parentheses = substr($titre, $ouvert + 1, $longueur_sous_chaine);
                        // }



                ?>
                        <div class="carte">
                            <h5> <?php echo $sigle; ?> </h5>
                            <h4> <?php echo $titre; ?> </h4>
                            
                            <p> <?php echo wp_trim_words(get_the_content(), 10); ?> </p>
                            <h5> Durée:  <?php echo $duree; ?> </h5>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </section>

    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie (h2)</h2>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Événement</h2>
            <blockquote class=" general__quote quote_einstein">
                “La possession de merveilleux moyens de production n’a pas apporté la liberté, mais le souci et la famine.”
                - Albert Einstein
            </blockquote>
            <button class="entete__button">Appuyer pour des chocolats</button>
        </section>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill:var(--couleur-arriere-footer)"></path>
            </svg>
        </div>
    </div>
    <div id="footer" class="global">
        <footer class="footer__section">
            <h2>Footer</h2>
            <a href="Liens">https://www.friv.com</a>
            <h4>ggjkgjkgjkg (h4)</h4>
            <form class="recherche" action="">
                <input type="search" name="" id="" class="recherche__input" placeholder="recherche">
                <button class="recherche__button"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg> </button>
            </form>
            <div class="sociaux">
                <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
                        <title>Google icon</title>
                        <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"></path>
                    </svg></a>
                <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub icon</title>
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                    </svg> </a>
                <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
                        <title>Facebook icon</title>
                        <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"></path>
                    </svg></a>
            </div>

        </footer>
    </div>
</body>

</html>