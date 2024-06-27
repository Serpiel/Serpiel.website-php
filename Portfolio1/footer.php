<?php
trait Footer{
    function RenderFooter() {
    ?>
    <footer>
        <div>
            <p class="copyright">
            Hugo MARUJO, Portfolio Website 2024
            </p>
        </div>
    </footer>
    <?php
    }
}

interface RenderF
{
    public function RenderFooter();
}

class GenerateFooter implements RenderF
{
    use Footer;
}

$footer = new GenerateFooter();
?>