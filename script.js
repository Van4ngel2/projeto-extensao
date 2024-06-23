const display = document.getElementById("display");

// Verifica se já existe um valor armazenado no localStorage
let number = localStorage.getItem("counter");
if (number === null) {
  number = 0; // Define o valor inicial se não houver nada armazenado
} else {
  number = parseInt(number); // Converte para número
}
display.textContent = `${number}`;

const increase = document.getElementById("increase");
const decrease = document.getElementById("decrease");
const reset = document.getElementById("reset");

increase.addEventListener("click", () => {
  number += 1;
  display.textContent = `${number}`;
  localStorage.setItem("counter", number); // Salva o novo valor no localStorage
});

decrease.addEventListener("click", () => {
  number -= 1;
  display.textContent = `${number}`;
  localStorage.setItem("counter", number); // Salva o novo valor no localStorage
});

reset.addEventListener("click", () => {
  number = 0;
  display.textContent = `${number}`;
  localStorage.setItem("counter", number); // Reseta e salva o valor 0 no localStorage
});
