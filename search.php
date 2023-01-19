<?php
include_once "./src/header.inc.php";
?>

<body>
    <header>
        <h1>PHP - articles and post</h1>
    </header>
</body>
<main>
<!-- formulaire de recherche-->
<div class="form" role="region">
    <fieldset>
        <legend>Rechercher un article</legend>
           <?php
           // connexion a la bdd
           $bdd = new PDO('mysql:host=localhost;dbname=post;charset=utf8','root','');
           $_article = $bdd ->query('SELECT titre, contenu, date_modification FROM article ORDER BY id ASC LIMIT 1');

           //tester la recherche
           if(isset($_GET['query']) AND !empty($_GET['query'])){
            $_query = htmlspecialchars($_GET['query']);
            $_article = $bdd->query('SELECT titre, contenu, date_modification FROM article WHERE titre LIKE "%'.$_query.'%" ORDER BY id DESC');
           }
           ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get"><!-- get -->
                <label for="titre">Faîtes votre recherche</label>
                    <input type="search" name="query" placeholder="Recherche..." autofocus>
                    <input type="submit" value="Envoyer">
            </form>  
                
                
        </fieldset>
        </div>

        <?php if($_article->rowCount() > 0){ ?>
        <!-- article  -->
                <article>
                   <?php  while($data = $_article->fetch()){?>
                <h2><?= $data['titre']?></h2>
                <p>
                <?= $data['contenu']?><br>
                    <time datetime="<?= $data['date_modification']?>">
                        <strong>
                            Date de modification : 
                                <?= $data['date_modification']?>                      </strong>
                    </time>
                    <?php }?>
                <?php }else {?>
                        <p class="warning"> Aucun résultat pour <?= $_query ?>....</p>
                <?php } ?>
             </article>
       <!-- end template --> 
    <nav>
        <a class="button" href="index.php">Revenir aux articles</a>
    </nav>


                            </main>

