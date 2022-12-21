import "./bootstrap";

import Alpine from "alpinejs";
import { list } from "postcss";

window.Alpine = Alpine;

Alpine.start();

// let letter = 0;
// const text ="Home is where we should feel secure and comfortable.";
// function typeText(){
//     if (letter < text.length) {
//         document.getElementById("type-js").innerHTML += text.charAt(letter);
//         letter++;
//         let speed = Math.floor(Math.random() * 150) + 50;
//             setTimeout(typeText, speed);
//     }
// }


const kos1 = document.getElementById("Kos1");
const kos2 = document.getElementById("Kos2");
const kos3 = document.getElementById("Kos3");
const kos4 = document.getElementById("Kos4");


const name = document.getElementById("kosName");
const harga = document.getElementById("Harga");
const diskon = document.getElementById("Disc");

let total = document.getElementById("Total")


kos1.addEventListener("click", function () {
    const kosName = "Kos Bisma 1C";
    const Harga = 500000;
    const Disc = 100000;
    addToCart(kosName, Harga, Disc);
});

kos2.addEventListener("click", function () {
    const kosName = "Kos Bisma 2F";
    const Harga = 350000;
    const Disc = 50000;
    addToCart(kosName, Harga, Disc);
});

kos3.addEventListener("click", function () {
    const kosName = "Kos Bisma 1C";
    const Harga = 500000;
    const Disc = 50000;
    addToCart(kosName, Harga, Disc);
});

kos4.addEventListener("click", function () {
    const kosName = "Kos Bisma 1A";
    const Harga = 400000;
    const Disc = 100000;
    addToCart(kosName, Harga, Disc);
});

function addToCart(kosName, Harga, Disc) {
    let totalharga = 0;
    name.innerHTML = kosName;
    harga.innerHTML = "Rp. "+ Harga;
    diskon.innerHTML = "Rp. " + Disc;
    totalharga = Harga - Disc;
    total.innerHTML = "Rp. "+ totalharga;
}