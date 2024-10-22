const $btnProducts = document.querySelector(".btn-Products"), $btnOrders = document.querySelector(".btn-Orders")

$btnProducts.addEventListener("click", () => {
  window.location.href = "views/Products/products.php";
});

$btnOrders.addEventListener("click", () =>{
  window.location.href = "views/Orders/orders.php";
})
