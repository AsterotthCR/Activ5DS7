console.log("this is working :D");

const btnEnviar = document.querySelector(".btn-enviar");
btnEnviar.addEventListener("click", (e) => {
  e.preventDefault(); 
  const selectedTable = document.getElementById("table-select").value;
  if (selectedTable === "Products") {
    window.location.href = "views/Products/products.php";
  } else if (selectedTable === "Orders") {
    window.location.href = "views/Orders/orders.php";
  }
});
