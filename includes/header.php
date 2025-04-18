<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Webshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Zorg ervoor dat dit naar je CSS-bestand verwijst -->
</head>
<body>
    <header>
        <div class="logohoek">
            <a href="index.php#home"><h1>FitGym</h1></a>
        </div>
        
        <div class="menu-container">
            <form action="productinfo.php" method="POST">
                <button type="submit" class="cart-icon">
                    <i class='bx bx-cart'></i>
                </button>
            </form>
        </div>  

        <div class="ham-menu" id="ham-menu">
            <span></span>
            <span></span>
            <span></span>   
        </div>
    </header>

</body>
</html>
