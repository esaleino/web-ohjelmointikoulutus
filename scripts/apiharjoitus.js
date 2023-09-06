var data;
var currency1;
var currency2;

function func() {
    let dataRaw = document.querySelector("#dom-target").textContent;
    currency1 = document.querySelector("#currency1");
    currency2 = document.querySelector("#currency2");
    data = JSON.parse(dataRaw).rates;
    let option1;
    let option2;
    let keys = Object.keys(data)
    keys.forEach((element) => {
        option1 = document.createElement("option");
        option2 = document.createElement("option");
        option1.text = element;
        option2.text = element;
        currency1.add(option1);
        currency2.add(option2);
    });
    currency1.value = "EUR";
    currency1.disabled = true;
    currency2.value = "USD";
    kurssi();
}

function kurssi() {
    let currencylabel = document.querySelector("#currencylabel");
    let rate = data[currency2.value].toFixed(2);
    currencylabel.value = "1" + currency1.value + " = " + rate + currency2.value;
    vaihda1();
}

function vaihda1() {
    let rate = data[currency2.value];
    let amount2 = document.querySelector("#amount2");
    amount2.value = (amount1.value * rate).toFixed(2);
}

function vaihda2() {
    let rate = data[currency2.value];
    let amount1 = document.querySelector("#amount1");
    amount1.value = (amount2.value / rate).toFixed(2);
}