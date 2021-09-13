const counter = document.querySelectorAll("#my-input");
let counterValue = counter.value;

function counterPlus() {
  counter.value = ++counterValue;
}

function counterMinus() {
  counter.value = --counterValue;
}
