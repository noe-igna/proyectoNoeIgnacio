document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    addToCartButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const productId = this.dataset.productId;
            fetch(`/carrito/add?id=${productId}`, { method: "POST" })
                .then((response) => response.json())
                .then((data) => {
                    alert("Producto agregado al carrito!");
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
        });
    });
});
