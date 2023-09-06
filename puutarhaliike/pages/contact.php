<?php
$title = "Ota yhteyttä";
$path = "../components/";include $path . "header.php";?>
<div class="container">
    <div class="content-left">
        <div class="img-container">
            <img src="https://mimis.fi/wp-content/uploads/2021/11/ilmakuva_2_2020.jpeg" alt="">

        </div>
    </div>
    <div class="content-right">
        <form action="#">
            <label for="name">Nimi</label>
            <input type="text" id="name" name="name" placeholder="Nimi">

            <label for="cname">Yritys</label>
            <input type="text" id="cname" name="companyname" placeholder="Yritys">

            <label for="email">Sähköposti</label>
            <input type="text" id="email" name="emailaddress" placeholder="Sähköposti">

            <label for="reason">Yhteydenoton syy</label>
            <select id="reason" name="reason">
                <option value="website">Sivusto</option>
                <option value="order">Tilaus</option>
                <option value="company">Yritys</option>
            </select>

            <label for="subject">Teksti</label>
            <textarea id="subject" name="subject" placeholder="Kirjoita jotain" style="height:200px"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</div>
<?php include $path . "footer.php";?>