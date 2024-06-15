document.getElementById("phone").addEventListener("input", function (e) {
  let value = e.target.value.replace(/\D/g, "");
  let formattedValue = value;

  if (value.length > 10) {
    formattedValue = formattedValue.slice(0, 10);
    value = value.slice(0, 10);
  }

  if (value.length > 3) {
    formattedValue = value.slice(0, 3) + " " + value.slice(3);
  }
  if (value.length > 6) {
    formattedValue =
      value.slice(0, 3) + " " + value.slice(3, 6) + " " + value.slice(6);
  }
  if (value.length > 8) {
    formattedValue =
      value.slice(0, 3) +
      " " +
      value.slice(3, 6) +
      " " +
      value.slice(6, 8) +
      " " +
      value.slice(8);
  }

  e.target.value = formattedValue;
});

const budgetRange = document.getElementById("budgetRange");
const budgetRangeValue = document.getElementById("budgetRangeValue");

budgetRange.addEventListener("input", function () {
  budgetRangeValue.textContent = `$100 - $${budgetRange.value}`;
});
