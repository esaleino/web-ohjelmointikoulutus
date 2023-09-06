<?php $path_assets = "../assets/";
$path_pages = "../pages/";
$title = "Asemointiharjoitus";
$css = "asemointiharjoitus.css";
$path = "../components/";include $path . "header.php";?>

<div class="sailio">

    <div class="navi1">
        <div class="header_links">
            <h1>Linkit</h1>
        </div>
        <ul class=" linkit">
            <li><a href="#">Linkki 1</a></li>
            <li><a href="#">Linkki 2</a></li>
            <li><a href="#">Linkki 3</a></li>
            <li><a href="#">Linkki 4</a></li>
            <li><a href="#">Linkki 5</a></li>
        </ul>
    </div>
    <div class="sisalto">
        <h1>Otsikko</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit
            anim id est laborum.
            <?php $api_key = getenv('APPLICATION_NAME');
echo "<p>$api_key";?>
    </div>
    <div class="navi2">
        <div class="header_links">
            <h1>Linkit</h1>
        </div>
        <ul class="linkit">
            <li><a href="#">Linkki 1</a></li>
            <li><a href="#">Linkki 2</a></li>
            <li><a href="#">Linkki 3</a></li>
            <li><a href="#">Linkki 4</a></li>
            <li><a href="#">Linkki 5</a></li>
        </ul>
    </div>
</div>
</div>

<?php include $path . "footer.php";?>