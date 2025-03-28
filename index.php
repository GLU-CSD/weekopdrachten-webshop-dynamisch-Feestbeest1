<?php
include 'products.php';

$categoriesWithProducts = [];
foreach ($products as $product) {
    $categoriesWithProducts[$product['category']][] = $product;
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Webshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logohoek">
            <a href="index.php#home"><h1>FitGym</h1></a>
        </div>
        <div class="menu-container">
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About us</a>
                <a href="#contact">Contact</a>
            </nav>
            <form action="Formulier/coolblue.html">
                <button type="submit" class="afrekenen">🛒</button>
            </form>            
            <button id="sidebar-toggle">☰</button>
        </div>
    </header>
    
    <section id="home">
        <h2>Welcome to our webshop</h2>
        <section class="hero">  
            <a href="shop.html" class="all">Shop All</a>
        </section>
    </section>

    <section id="sidebar" class="hidden">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#freeweight">Freeweight</a></li>
            <li><a href="#gymmachines">Gym Machines</a></li>
        </ul>
    </section>

    <form id="filterForm">
    <div class="filter-group">
        <label for="category">Categorie:</label>
        <select id="category">
            <option value="all">Alle producten</option>
            <option value="Freeweight">Freeweight</option>
            <option value="gymmachines">Gym Machines</option>
        </select>
    </div>

    <div class="filter-group">
        <label for="min_price">Min. Prijs:</label>
        <input type="number" id="min_price" placeholder="€0">
    </div>

    <div class="filter-group">
        <label for="max_price">Max. Prijs:</label>
        <input type="number" id="max_price" placeholder="€1000">
    </div>

    <button type="button" id="resetFilters">Reset</button>
</form>



    <?php
    foreach($categoriesWithProducts as $category => $products) {
        ?>
        <section id="<?php echo $category ?>" class="productSection">
            <h3><?php echo $category ?></h3>
            <div class="products">
            <?php foreach ($products as $product){ ?>
                <div class="product" data-category="<?php echo $category; ?>" data-price="<?php echo $product['price']; ?>">
                    <a href="product.php?id=<?php echo $product['id']; ?>">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h3><?php echo $product['name']; ?></h3>
                    </a>
                    <p>&euro;<?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                    <button>Order</button>
                </div>
            <?php } ?>
            </div>
        </section>
        <?php
    }
    ?>


    <section id="about" class="about">
        <h2>About Us</h2>
        <p>Welcome to <strong>FitGym</strong> – your one-stop shop for premium fitness equipment.</p>
        <p>Whether you're a beginner or a pro, we offer a wide range of high-quality products to help you achieve your fitness goals.</p>
        <p>Our mission is simple: provide durable, affordable, and reliable gear to support your fitness journey with exceptional customer service.</p>
        <p>Join the FitGym community today and get started on your path to a healthier, stronger you!</p>
    </section>
    
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <form action="send_mail.php" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        
            <label for="phone">Telefoonnummer:</label>
            <input type="tel" id="phone" name="phone" maxlength="10" size="1" required>
        
            <label for="message">Bericht:</label>
            <textarea id="message" name="message" required></textarea>            

            <button type="submit">Verstuur</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Webshop. All rights reserved.</p>
        <p><a href="#privacy">Privacybeleid</a></p>
    </footer>
    <script src="script.js" defer></script>

    <script>
        function scrollToHome() {
            document.getElementById("home").scrollIntoView({ behavior: "smooth" });
        }
        
        function scrollToAbout() {
            document.getElementById("about").scrollIntoView({ behavior: "smooth" });
        }

        function scrollToContact() {
            document.getElementById("contact").scrollIntoView({ behavior: "smooth" });
        }
    </script>

</body>
</html>
