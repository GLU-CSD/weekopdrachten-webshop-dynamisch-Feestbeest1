function changeImage(thumbnail) {
    document.getElementById("mainImage").src = thumbnail.src;
}

document.addEventListener("DOMContentLoaded", function() {

    const sidebarToggle = document.getElementById("sidebar-toggle");
    const sidebar = document.getElementById("sidebar");

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener("click", function() {
            sidebar.classList.toggle("hidden");
        }); 
    }


    const categoryFilter = document.getElementById("category");
    const minPriceFilter = document.getElementById("min_price");
    const maxPriceFilter = document.getElementById("max_price");
    const products = document.querySelectorAll(".product");
    
    function filterProducts() {
        let selectedCategory = categoryFilter.value;
        let minPrice = parseFloat(minPriceFilter.value) || 0;
        let maxPrice = parseFloat(maxPriceFilter.value) || Infinity;

        products.forEach(product => {
            let productCategory = product.getAttribute("data-category");
            let productPrice = parseFloat(product.getAttribute("data-price"));
        
            let categoryMatch = (selectedCategory === "all" || productCategory === selectedCategory);
            let priceMatch = (productPrice >= minPrice && productPrice <= maxPrice);
        
            if (categoryMatch && priceMatch) {
                product.style.display = "block";
                
                let priceElement = product.querySelector(".products-price");
                if (priceElement) {
                    priceElement.innerText = "€" + productPrice.toFixed(2).replace('.', ',');
                }
            } else {
                product.style.display = "none";
            }
        });
        

        console.log(selectedCategory);

        const categorySections = document.querySelectorAll(".productSection");
        categorySections.forEach(section => {
            let category = section.id;
            if (category === selectedCategory || selectedCategory === "all") {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        });
    }

    categoryFilter.addEventListener("change", filterProducts);
    minPriceFilter.addEventListener("input", filterProducts);
    maxPriceFilter.addEventListener("input", filterProducts);
});

document.addEventListener("DOMContentLoaded", function () {
    const hamMenu = document.querySelector(".ham-menu");
    const offScreenMenu = document.querySelector(".off-screen-menu");

    hamMenu.addEventListener("click", function () {
        hamMenu.classList.toggle("active");
        offScreenMenu.classList.toggle("active");
    });
});

