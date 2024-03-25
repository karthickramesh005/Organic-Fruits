let counter = 0;

function increment() {
  counter++;
}

function decrement() {
  counter--;
}

function get() {
  return counter;
}

const inc = document.getElementById("increment");
const input = document.getElementById("input");
const dec = document.getElementById("decrement");
const totalprice = document.getElementById("price");

inc.addEventListener("click", () => {
  increment();
  input.value = get();
  totalprice.innerHTML = add*169;
});

dec.addEventListener("click", () => {
  if (input.value > 0) {
    decrement();
  }
  input.value = get();
});

