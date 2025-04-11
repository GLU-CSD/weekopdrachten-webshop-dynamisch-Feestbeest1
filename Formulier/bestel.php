<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>workshop_2</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="logohoek">
            <!-- <img src="assets/img/logo.png" alt="FitGym Logo" class="logo">  -->
            <a href="../index.php"><h1>FitGym</h1></a>
        </div>
        
                
        <div class="menu-container">
            <nav>
                <nav>
                    <a href="../index.php#home">Home</a>
                    <a href="../index.php#about">About us</a> 
                    <a href="../index.php#contact">Contact</a> 
                </nav>
                
            </nav>
        </div>
    </header>

    <div class="main-container">
    <!-- Formulier -->
    <div class="form-container">
        <form action="doelbestand.php" method="post">
            <!-- al je formuliercode blijft hier -->
        </form>
    </div>

    <div class="cart-container">
        <h3>Your Cart</h3>
        <?php
        session_start();
        if (isset($_SESSION['Cart']) && !empty($_SESSION['Cart'])) {
            foreach ($_SESSION['Cart'] as $item) {
                echo '<div class="cart-item">';
                foreach ($item as $key => $value) {
                    echo "<p><strong>" . htmlspecialchars($key) . "</strong>: " . htmlspecialchars($value) . "</p>";
                }
                echo '</div>';
            }
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
    </div>
</div>


        <form action="doelbestand.php" method="post">
            <div class="coolblue_titel">
                <h2>YOUR DETAILS</h2>
                <p>What should be on the invoice?</p>
            </div>

            <div class="rij">
                <div class="kolom1">Order type </div>
                <div class="kolom2">
                    <input type="radio" id="individual" name="type" value="individual" tabindex="1">
                    <label for="individual">Individual</label>
                    <input type="radio" id="business" name="type" value="business" tabindex="2">
                    <label for="business">Business</label><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">Salutation </div>
                <div class="kolom2">
                    <input type="radio" id="Mr." name="salutation" value="Mr." tabindex="3">
                    <label for="Mr.">Mr.</label>
                    <input type="radio" id="Ms." name="salutation" value="Ms." tabindex="4">
                    <label for="Ms.">Ms.</label>
                    <input type="radio" id="Other" name="salutation" value="Other" tabindex="5">
                    <label for="Other">Other</label><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">First name </div>
                <div class="kolom2">
                    <input type="text" name="First name" placeholder="First name" required tabindex="6">
                    <input type="text" name="Infix" placeholder="Middle name" size="8" tabindex="7">
                    <input type="text" name="Surname" placeholder="Last name" size="15" required tabindex="8"><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">Postal code</div>
                <div class="kolom2">
                    <input type="text" name="Postcode" placeholder= "1234AB" maxlength="6" size="9" required tabindex="9"><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">House number </div>
                <div class="kolom2">
                    <input type="text" name="House number" placeholder="Nr." size="5" required tabindex="10">
                    <input type="text" name="Addition" placeholder="Addition" size="3" tabindex="11"><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">Country </div>
                <div class="kolom2">
                    <input id="country" type="text" name="country" placeholder="Country" size="40" list="countries" required tabindex="12">
                    <datalist id="countries">
                        <option value="Netherlands">
                        <option value="Belgium">
                        <option value="Germany">
                        <option value="France">
                        <option value="United Kingdom">
                    </datalist>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">Delivery Address </div>
                <div class="kolom2">
                    <input type="text" placeholder="Delivery Address" required tabindex="13"><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">E-mail </div>
                <div class="kolom2">
                    <input type="email" name="Email" placeholder="E-mail" size="35" required tabindex="14"><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">Phone Number </div>
                <div class="kolom2">
                    <input type="text" name="Number" placeholder="Phone Number" maxlength="10" required tabindex="15"><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">Date of birth </div>
                <div class="kolom2">
                    <input type="date" name="Date" required tabindex="16"><br>
                </div>
            </div>

            <div class="rij">
                <div class="kolom1">Newsletter</div>
                <div class="kolom2">
                    <input type="checkbox" id="Newsletter" name="newsletter" value="yes" tabindex="17">
                    <label for="Newsletter">Yes, I would like to be a member of the FitGym community</label>
                </div>
            </div>

            <div class="coolblue_titel">
                <h2>SAVE YOUR DETAILS</h2>
                <p>Handy for next time</p>
            </div>

            <div class="rij">
                <div class="kolom1">Password<br>&nbsp;</div>
                <div class="kolom2">
                    <input type="password" id="Password" name="Password" required tabindex="18"><br>
                    <label for="Password">At least 6 characters</label>                        
                </div>
            </div>

            <div class="submit"> 
                <input type="submit" name="submit"><br>
            </div>
        </form>
    </div> 

    <footer>&copy; 2025 Webshop. All rights reserved.</footer>
</body>
</html>
