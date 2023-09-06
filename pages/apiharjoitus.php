<?php $path_assets = "../assets/";
$path_pages = "../pages/";
$title = "Apiharjoitus";
$css = "apiharjoitus.css";
$js = "apiharjoitus.js";
$api_key = getenv('API_KEY');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.apilayer.com/exchangerates_data/latest");
curl_setopt($curl, CURLOPT_HTTPHEADER, ['apikey: ' . $api_key]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($curl);
curl_close($curl);
$path = "../components/";include $path . "header.php";
?>
<div class="column">
    <div class="row">
        <div class="content">
            <h1>Valuuttamuunnin</h1>
        </div>
    </div>
    <div class="row">
        <div class="currencyLeft">
            <h1 id="hcurrency1">Muunnettava valuutta</h1>
            <div class="rowCurrency" id="divcurrency1">
                <select id="currency1" onchange="kurssi()">
                </select>
                <input type="number" id="amount1" value="1" min="0" max="100000" size="15" step="0.01"
                    onchange="vaihda1()" style="text-align: right">
            </div>
        </div>
        <div class="currencyMiddle">
            <h1>Valuuttakurssi</h1>
            <input type="text" id="currencylabel" value="1EUR => 1EUR" min="0" max="100000" size="15" step="0.01"
                style="text-align: center" disabled>
        </div>
        <div class="currencyRight">
            <h1 id="hcurrency2">Muunnettu valuutta</h1>
            <div class="rowCurrency" id="divcurrency2">
                <input type="number" id="amount2" value="1" min="0" max="100000" size="15" step="0.01"
                    onchange="vaihda2()">
                <select id="currency2" onchange="kurssi()">
                </select>
            </div>
        </div>
    </div>
</div>
<div id="dom-target" style="display: none;">
    <?php echo ($output);
?>
</div>
<?php echo "<script>func()</script>";
include $path . "footer.php"; ?>