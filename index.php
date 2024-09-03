<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Portfolio Barbe Dany </title>
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          referrerpolicy="no-referrer" rel="stylesheet"/>
<!--    <link rel="stylesheet" href="src/loader.css">-->
    <link href="src/style.css" rel="stylesheet">
</head>
<body class="scroll">
<!--<div class="loader">-->
<!--    <span class="lettre">C</span>-->
<!--    <span class="lettre">H</span>-->
<!--    <span class="lettre">A</span>-->
<!--    <span class="lettre">R</span>-->
<!--    <span class="lettre">G</span>-->
<!--    <span class="lettre">E</span>-->
<!--    <span class="lettre">M</span>-->
<!--    <span class="lettre">E</span>-->
<!--    <span class="lettre">N</span>-->
<!--    <span class="lettre">T</span>-->
<!--</div>-->
<header id="navbar">
	<?php include_once 'controller/navbar.html'; ?>
</header>
<main>
    <section class="flex content-center column align-center" id="a_propos">
        <h2 class="title">A propos</h2>
        <article>
            <div id="info">
                <!--link info_content-->
                <div id="info_content">
                    <!--sublink who-->
                    <span>
                        <p class="question">Qui Suis je</p>
                        <p class="reponce">Dany Barbe</p>
                    </span>

                    <!--sublink que suis je-->
                    <span>
                        <p class="question">Que Suis je</p>
                        <p class="reponce">Developper Junior Full-Stack</p>
                    </span>

                    <!--sublink lvl pro-->
                    <span>
                        <p class="question">Qu'elle est mon niveau profesionnel</p>
                        <p class="reponce">Pour l'instant aucun dans le developpement</p>
                    </span>

                    <!--sublink diplome-->
                    <span>
                        <p class="question">Qu'elles sont les différents diplomes obtenus</p>
                        <p class="reponce">Bac Sti2D option SIN, BTS SNIR, Graduate developper Full-Stack</p>
                    </span>

                    <!-- sublink situation pro -->
                    <span>
                        <p class="question">Qu'elle est ma situation Profesionnel</p>
                        <p class="reponce">En recherche de stage dans le cadre d'un bachelor</p>
                    </span>
                    
                    <span>
                         <a href="files/Barbe_Dany_cv.pdf" target="_blank" style="cursor: pointer; color: black; text-decoration:underline; font-weight: bold;">Télécharger mon CV</a>
                    </span>
                </div>
                <!--link photo profile -->
            </div>
            <!--link short-presentation-->
            <div id="text_content">
                <p>
                    Dans un premier temps j’ai fait un bac STI2D option SIN dans lequel j’avais commencé à apprendre HTML CSS grâce à OpenClassroom,
                    ensuite j’ai poursuivi par un BTS SNIR, ou j’ai appris le réseau ainsi que la programmation. Lors de ce BTS j’ai dû réaliser un
                    projet en groupe et je m’occupais de l’interface web. J’ai suivi une formation en ligne chez Studi, pour obtenir un graduate develepper
                    web full-stack en parallèle de ma deuxième année de BTS. Je suis actuellement en train de préparer un bachelor developper web full-stack chez Studi.
                </p>
            </div>
        </article>
    </section>

    <section class="flex align-center column" id="competence">
        <!-- link competences-->

        <h2 class="title">Compétance</h2>

        <div class="competence-content flex content-around">
            <!--sublink front-->
            <article class="flex content-center align-center column" id="front">
                <h3>Front-End</h3>
                <div class="competence flex content-center align-center column">
                    <!--anchor HTML-->
                    <div class="connu flex content-around align-center">
                        <figure class="flex column align-center content-center">
							<?php include_once 'icon/Icon awesome-html5.svg'; ?>
                            <figcaption class="bold mt-5">HTML</figcaption>
                        </figure>
                        <!--anchor CSS-->
                        <figure class="flex column align-center content-center">
													<?php include_once 'icon/Icon awesome-css3-alt.svg'; ?>
                            <figcaption class="bold mt-5">CSS</figcaption>
                        </figure>
                        <!--anchor JS-->
                        <figure class="flex column align-center content-center">
							<?php include_once 'icon/Icon awesome-js.svg'; ?>
                            <figcaption class="bold mt-5">JS</figcaption>
                        </figure>
                    </div>
                    <span class="separator"></span>
                    <!--anchor working-progress front -->
                    <div class="en_cours flex content-center align-center column">
                        <h4>en cours d'apprentisage</h4>
                        <figure class="flex column align-center content-center">
                                <?php include_once 'icon/Icon awesome-react.svg'; ?>
                            <figcaption class="bold mt-5">ReactJs</figcaption>
                        </figure>
                    </div>
                </div>
            </article>
            <!-- sublink back-->
            <article class="flex content-center align-center column" id="back">
                <h3>Back-End</h3>
                <div class="competence flex content-center align-center column">
                    <!--anchor PHP-->
                    <div class="connu flex content-around align-center">
                        <figure class="flex column align-center content-center">
							<?php include 'icon/Icon awesome-php.svg'; ?>
                            <figcaption class="bold mt-5">ReactJs</figcaption>
                        </figure>
                        <!--anchor MySQL-->
                        <figure class="flex column align-center content-center">
                            <?php include_once 'icon/Icon simple-mysql.svg'; ?>
                            <figcaption class="bold mt-5">MySQL</figcaption>
                        </figure>
                    </div>
                    <span class="separator"></span>
                    <!--anchor working-progress back -->
                    <div class="en_cours flex content-center align-center column">
                        <h4>en cours d'apprentisage</h4>
                        <figure class="flex column align-center content-center">
                          <?php include_once 'icon/Icon awesome-symfony.svg'; ?>
                            <figcaption class="bold mt-5">Symfony</figcaption>
                        </figure>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="flex content-center align-center column" id="portfolio">
        <!--link portfolio-->
        <h2 class="title">Portfolio</h2>
        <article class="flex content-around wrap">
            <?php include_once 'controller/projet.html'?>
        </article>
    </section>
</main>
<footer id="footbar">
	<?php include_once 'controller/footer.html'; ?>
</footer>
<!--<script src="src/script.js"></script>-->
</body>
</html>