<?php
 include_once './src/header.inc.php';
?>
<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    <picture>
        <source srcset="./asset/cover.png"
                media="(orientation: portrait)">
        <img src="./asset/cover.png" alt="cover" loading="lazy">
    </picture>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>
            Nous sommes le <?= $_date_php ?> 
    </h2>
            <p>
           

                Mise à jour PHP <?= $_modif_php ?><br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        <?php 
        include_once './src/connect.inc.php';
        ?>
        <!--itération avec la bdd -->
    <article>
        <h2>
            <a href="#">
            Javascript</a>
            <!--
            la méthode strip_tags() permet de filtrer les caractère 
            illégaux
            -->
        </h2>
        <p>
            JavaScript est un langage de programmation 
            de scripts principalement employé dans les pages 
            web interactives et à ce titre est une partie 
            essentielle des applications web. 
            Avec les langages HTML et CSS, 
            JavaScript est au cœur des langages utilisés par les      

        </p>
        <time datetime="2022-10-14 12:27:26">   
            Date de modification : 2022-10-14 12:27:26
        </time>
            <span class="material-symbols-outlined" aria-hidden="true">
                thumb_up
            </span>
            <span class="material-symbols-outlined" aria-hidden="true">
                thumb_down_off
            </span>
            <span class="material-symbols-outlined" aria-hidden="true">
                favorite
            </span>
            <span class="material-symbols-outlined" aria-hidden="true">
                comment
            </span>

    </article>
    
    <!--
    itération avec la bdd 
    -->
    <article>
        <h2>
            <a href="#">
            Le PHP</a>
            <!-- 
                la méthode strip_tags() permet de filtrer les caractère 
            illégaux
        -->
        </h2>
        <p>
            PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage       

        </p>
        <time datetime="2022-10-14 12:28:09">
            Date de modification : 2022-10-14 12:28:09
        </time>
        <span class="material-symbols-outlined" aria-hidden="true">
            thumb_up
        </span>
        <span class="material-symbols-outlined" aria-hidden="true">
            thumb_down_off
        </span>
        <span class="material-symbols-outlined" aria-hidden="true">
            favorite
        </span>
        <span class="material-symbols-outlined" aria-hidden="true">
            comment
        </span>


    </article>
    
 
    
    <!--end -->
    <nav>
        <a class="button" href="#">
            Rechercher les articles
        </a>
     
      

    </nav>
    </main>
    <footer>
        <p>&copy; - MIT - <time datetime="2022-12-15">15/12/2022</time></p>
    </footer>
   
</body>
</html>