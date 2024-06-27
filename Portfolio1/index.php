<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Assassin's Creed</title>
    <link rel="stylesheet" href="Core/Style/main.scss">
    <link rel="icon" href="Assets/assassins_creed_ii_revelations_16529.ico">
<body>
    <?php
    include "menu.php";
    $menu->renderHeader();
    ?>

    <main>
        <section class="welcome">
            <h1><?php echo $welcome; ?></h1>
            <cite><a href="https://assassinscreed.fandom.com/fr/wiki/Crédo">Rien n'est vrai, tout est permis.</cite></a>
        </section>
        <br>
        <div class="categories-container">
        <section class="categorie">
            <a href="Core/Pages/games.php"><img src="https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dw02baa646/images/high-res/3330628_scrmax.jpg?sw=480&sh=480&sm=fit" width="350" height="200"></a>
            <h2>Games</h2>
            <p>Découvrir tous les jeux Assassin's Creed.</p>
        </section>
        <section class="categorie">
            <a href="Core/Pages/lore.php"><img src="https://wallpapercave.com/wp/DgVRjoJ.jpg" width="350" height="200"></a>
            <h2>Lore</h2>
            <p>Voir une partie du Lore d'Assassin's Creed</p>
        </section>
        <section class="categorie">
            <a href="Core/Pages/about.php"><img src="https://xboxsquad.fr/wp-content/uploads/2023/03/18f8103546d0afdf2cceeb8a07dd3a84e5840e0004e7bc822c287f7a6396311f.jpeg" width="350" height="200"></a>
            <h2>About</h2>
            <p>Plus d'infos...</p>
        </section>
        </div>
    </main>
    
    <?php 
    include "footer.php";
    $footer->RenderFooter();
    ?>
</body>

</html>