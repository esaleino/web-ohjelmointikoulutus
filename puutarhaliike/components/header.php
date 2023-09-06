<!DOCTYPE html>
<html lang="en">

<head>
    <?php $path_assets = "../assets/";
$path_pages = "../pages/"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $path_assets; ?>css/navbar.css">
    <link rel="stylesheet" href="<?php echo $path_assets; ?>css/puutarhaliike.css">
    <!-- <?php if (isset($css)) {
    $path_css = $path_assets . 'css/' . $css;
    echo "<link rel='stylesheet' href='$path_css'>";
}
?> -->
    <title><?=$title ?? 'Sivusto';?></title>
</head>

<body>
    <?php $active = basename($_SERVER['PHP_SELF'], ".php");?>
    <nav class="nav-bar">
        <ul class="nav-list">
            <li class="nav-el"><a href="./index.php">Etusivu</a></li>
            <li class="nav-el dropdown">
                <a href="#" class="dropbtn">Tuotteet</a>
                <div class="dropdown-content">
                    <a href="./sisakasvit.php">Sisäkasvit</a>
                    <a href="./ulkokasvit.php">Ulkokasvit</a>
                    <a href="./tyokalut.php">Työkalut</a>
                    <a href="./hoito.php">Kasvien hoito</a>
                </div>
            </li>
            <li class="nav-el"><a href="./locations.php">Myymälät</a></li>
            <li class="nav-el"><a href="./about.php">Tietoa meistä</a></li>
            <li class="nav-el"><a href="./contact.php">Ota yhteyttä</a></li>
        </ul>
    </nav>
    <!-- <nav>
        <img src="" alt=" Brand Logo"></a>
        <input type="checkbox" id="toggle-btn">
        <label for="toggle-btn" class="icon open"><i class="fa fa-bars"></i></label>
        <label for="toggle-btn" class="icon close"><i class="fa fa-times"></i></label>
        <a class="<?=($active == 'index') ? 'active' : '';?>" href="<?php echo $path_pages; ?>index.php">Etusivu</a>
        <a class="<?=($active == 'Tuotteet') ? 'active' : '';?> dropbtn" href="">Tuotteet</a>
        <div class="dropdown-content">
            <a href="#">Sisäkasvit</a>
            <a href="#">Ulkokasvit</a>
            <a href="#">Työkalut</a>
            <a href="#">Kasvien hoito</a>

        </div>
        <a class="<?=($active == 'locations') ? 'active' : '';?>"
            href="<?php echo $path_pages; ?>locations.php">Myymälät</a>
        <a class="<?=($active == 'about') ? 'active' : '';?>" href="<?php echo $path_pages; ?>about.php">Tietoa
            meistä</a>
        <a class="<?=($active == 'contact') ? 'active' : '';?>" href="<?php echo $path_pages; ?>contact.php">Ota
            yhteyttä</a>
    </nav> -->