<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Assassin's Creed</title>
    <link rel="stylesheet" href="../Style/main.scss">
</head>

<body>
    
    <header>
        <nav>
            <ul>
                <li class="logo"><img src="https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABWb-R2s6r6LrV954UsHYIAJUA45rqz7ikXl0jzAD-cfkKjRMmonOfnCprobmSNcmcWOyMEU3fVAjRbXYXLLrvzvuFT5jVZkqUTRNXAm2x1ma.png?r=eb4" alt="Assassin's Creed Logo" width="200" height="80"></li>
                <li><a href="../../index.php"> Home</a></li>
                <li><a href="games.php"> Games</a></li>
                <li><a href="lore.php"> Lore</a></li>
                <li><a href="about.php"> About</a></li>
            </ul>
        </nav>
    </header>
    <div class="video-container">
    <video 
    src="../../Assets/gif.mp4" controls 
    width="500"
    poster="https://img.phonandroid.com/2023/02/assassins-creed-jeux.jpg"
    muted>
    </video>
    </div>


<main>
    <script src="../Interactions/lore.js"></script>
</main>
<?php 
    include "../../footer.php";
    $footer->RenderFooter();
    ?>
</body>