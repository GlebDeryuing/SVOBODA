const o1 = document.getElementById("output-1");
const o2 = document.getElementById("output-2");
const o3 = document.getElementById("output-3");
const o4 = document.getElementById("output-4");

let temp1 = <?= $_SESSION['user']['phone'] ?>
o1.value = '+7 (' +