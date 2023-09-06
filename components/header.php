<!DOCTYPE html>
<html lang="en">

<head>
    <?php if ($title == "index") {
    $path_pages = "./pages/";
    $path_assets = "./assets/";
    $index = "./index.php";
} else {
    $path_pages = "../pages/";
    $path_assets = "../assets/";
    $index = "../index.php";
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $path_assets; ?>images/lataus.png">
    <link rel="stylesheet" href="<?php echo $path_assets; ?>css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="<?php echo $path_assets; ?>css/style.css">
    <?php if (isset($css)) {
    $path_css = $path_assets . 'css/' . $css;
    echo "<link rel='stylesheet' href='$path_css'>";
}
if (isset($js)) {
    $path_js = "../scripts/" . $js;
    echo "<script src='$path_js'></script>";
}
?>
    <script src="../scripts.js"></script>
    <title><?=$title ?? 'Sivusto';?></title>
</head>

<body>
    <?php $active = basename($_SERVER['PHP_SELF'], ".php");?>
    <nav>
        <a class="brand-logo <?=($active == 'index') ? 'active' : '';?>" href="<?php echo $index; ?>">
            <img src="" alt="Brand Logo"></a>
        <input type="checkbox" id="toggle-btn">
        <label for="toggle-btn" class="icon open"><i class="fa fa-bars"></i></label>
        <label for="toggle-btn" class="icon close"><i class="fa fa-times"></i></label>
        <a class="<?=($active == 'kuvagalleria') ? 'active' : '';?>"
            href="<?php echo $path_pages; ?>kuvagalleria.php">Kuvagalleria</a>
        <a class="<?=($active == 'profiilisivu') ? 'active' : '';?>"
            href="<?php echo $path_pages; ?>profiilisivu.php">Profiili</a>
        <a class="<?=($active == 'rekisteroitymislomake') ? 'active' : '';?>"
            href="<?php echo $path_pages; ?>rekisteroitymislomake.php">Rekisteröityminen</a>
        <a class="<?=($active == 'verkkosivu') ? 'active' : '';?>"
            href="<?php echo $path_pages; ?>verkkosivu.php">Verkkosivu</a>
        <a class="<?=($active == 'asemointiharjoitus') ? 'active' : '';?>"
            href="<?php echo $path_pages; ?>asemointiharjoitus.php">Asemointiharjoitus</a>
        <a class="<?=($active == 'puutarhaliike') ? 'active' : '';?>" href="../puutarhaliike/pages/index.php"
            ?>Puutarhaliike</a>
        <a class="<?=($active == 'apiharjoitus') ? 'active' : '';?>" href="<?php echo $path_pages; ?>apiharjoitus.php"
            ?>API-harjoitus</a>

    </nav>