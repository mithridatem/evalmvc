<?php
    if(isset($_SESSION['role']) AND $_SESSION['role']==2){
        //import
        include './utils/connectAdmBdd.php';
        include './model/model_article.php';

        //test si l'id de l'article à supprimer existe
        if(isset($_GET['id']) AND $_GET['id'] != ""){
            $article = new Article(null, null);
            //parsing en entier du paramètre $_GET['id']
            $_GET['id']= intval($_GET['id']);
            //set de l'id_article
            $article->setIdArticle($_GET['id']);
            //récupération de l'article par son id
            $tab = $article->showArticleById($bdd);
            //stockage du nom
            $nom = $tab[0]['nom_article'];
            //suppression de l'article par son id
            $article->deleteArticleById($bdd);
            header("Location: /evalmvc/showArticle?del=$nom");
        }
        //sinon
        else{
            header('Location: /evalmvc/showArticle?noId');
        }
    }
    else{
        header('Location: /evalmvc/showArticle');
    }
?>