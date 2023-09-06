<?php $path_assets = "../assets/";
$path_pages = "../pages/";
$title = "Verkkosivu";
$path = "../components/";
include $path . "header.php";?>
<style>
.image {
    max-width: 300px;
}
</style>
<div class="container">
    <h1>Aurinkokunta</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Milky_Way_Arms_ssc2008-10.svg/465px-Milky_Way_Arms_ssc2008-10.svg.png"
        alt="Aurinkokunta" class="image">
    <h2>Yleiskuvaus</h2>
    <p>Aurinkokunta on aurinkoa kiertävä planeettojen, kuiden ja muiden taivaankappaleiden muodostama kokonaisuus. Se
        sijaitsee Linnunradan spiraalihaaran Orionin käsivarressa.</p>
    <p>Aurinkokunnan keskus on Aurinko, jonka ympärillä kiertävät kahdeksan planeettaa. Planeetat jaetaan
        kiviplaneettoihin ja kaasujättiläisiin.</p>

    <h2>Lähteet ja linkit</h2>
    <ul>
        <li><a href="https://fi.wikipedia.org/wiki/Aurinkokunta">Wikipedia: Aurinkokunta</a></li>
        <li><a href="https://www.nasa.gov/">NASA:n kotisivu</a></li>
    </ul>

    <h2>Aurinkokunnan planeetat</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Planeetta</th>
                <th>Etäisyys Auringosta (AU)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Merkurius</td>
                <td>0.39</td>
            </tr>
            <tr>
                <td>Venus</td>
                <td>0.72</td>
            </tr>
            <tr>
                <td>Maa</td>
                <td>1.00</td>
            </tr>
            <tr>
                <td>Mars</td>
                <td>1.52</td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "footer.html";?>