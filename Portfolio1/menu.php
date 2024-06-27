<?php
trait Render {
    function renderHeader() {
        ?>
        <header>
        <nav>
            <ul>
                <li class="logo"><img src="https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABWb-R2s6r6LrV954UsHYIAJUA45rqz7ikXl0jzAD-cfkKjRMmonOfnCprobmSNcmcWOyMEU3fVAjRbXYXLLrvzvuFT5jVZkqUTRNXAm2x1ma.png?r=eb4" alt="Assassin's Creed Logo" width="200" height="80"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="Core/Pages/games.php">Games</a></li>
                <li><a href="Core/Pages/lore.php">Lore</a></li>
                <li><a href="Core/Pages/about.php">About</a></li>
            </ul>
        </nav>
        </header>
        <?php
    }
}
interface RenderMenu
{
    public function renderHeader();
}

class GenerateContent implements RenderMenu
{
    
    use Render;
}
class Welcome {
public $welcome;

function set_welcome($welcome) {
$this->welcome = $welcome;
return $this->welcome;
}
}
$welcomeObj = new Welcome();
$welcome = $welcomeObj->set_welcome("Bienvenue dans l'univers de Assassin's Creed");

$menu = new GenerateContent();
?>