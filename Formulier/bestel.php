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
            <a href="../index.php"><h1>FitGym</h1></a>
        </div>
        <div class="menu-container">
            <nav>
                <a href="../index.php#home">Home</a>
                <a href="../index.php#about">About us</a> 
                <a href="../index.php#contact">Contact</a> 
            </nav>
        </div>
    </header>

    <div class="main-container">
        <div class="form-container">
            <form id="orderForm">
                <div class="coolblue_titel">
                    <h2>YOUR DETAILS</h2>
                    <h3>What should be on the invoice?</h3>
                </div>
    <form action="../Bedanktpagina.php" method="POST">
                <div class="rij">
                    <div class="kolom1">Order type </div>
                    <div class="kolom2">
                        <input type="radio" id="individual" name="type" value="individual" required>
                        <label for="individual">Individual</label>
                        <input type="radio" id="business" name="type" value="business">
                        <label for="business">Business</label>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">Salutation </div>
                    <div class="kolom2">
                        <input type="radio" id="Mr." name="salutation" value="Mr." required>
                        <label for="Mr.">Mr.</label>
                        <input type="radio" id="Ms." name="salutation" value="Ms.">
                        <label for="Ms.">Ms.</label>
                        <input type="radio" id="Other" name="salutation" value="Other">
                        <label for="Other">Other</label>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">First name </div>
                    <div class="kolom2">
                        <input type="text" name="First name" placeholder="First name" required>
                        <input type="text" name="Infix" placeholder="Middle name">
                        <input type="text" name="Surname" placeholder="Last name" required>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">Postal code</div>
                    <div class="kolom2">
                        <input type="text" name="Postcode" placeholder="1234AB" maxlength="6" required>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">House number </div>
                    <div class="kolom2">
                        <input type="text" name="House number" placeholder="Nr." required>
                        <input type="text" name="Addition" placeholder="Addition">
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">Country </div>
                    <div class="kolom2">
                        <input type="text" name="country" placeholder="Country" list="countries" required>
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
                        <input type="text" name="Delivery Address" placeholder="Delivery Address" required>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">E-mail </div>
                    <div class="kolom2">
                        <input type="email" name="Email" placeholder="E-mail" required>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">Phone Number </div>
                    <div class="kolom2">
                        <input type="tel" name="Number" placeholder="Phone Number" maxlength="10" required>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">Date of birth </div>
                    <div class="kolom2">
                        <input type="date" name="Date" required>
                    </div>
                </div>

                <div class="rij">
                    <div class="kolom1">Newsletter</div>
                    <div class="kolom2">
                        <input type="checkbox" id="Newsletter" name="newsletter" value="yes">
                        <label for="Newsletter">Become a member today and enjoy 10% off your next order!</label>
                    </div>
                </div>

                <div class="coolblue_titel">
                    <h2>SAVE YOUR DETAILS</h2>
                    <h3>Handy for next time</h3>
                </div>

                <div class="rij">
                    <div class="kolom1">Password</div>
                    <div class="kolom2">
                        <input type="password" id="Password" name="Password" required minlength="6" placeholder="Password">
                        <label for="Password">At least 6 characters</label>
                    </div>
                </div>
            </form>

                <div class="rij">
                    <button type="button" onclick="validateAndRedirect()" class="button">Order</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validateAndRedirect() {
            const form = document.getElementById("orderForm");
            if (form.checkValidity()) {
                window.location.href = "../Bedanktpagina.php";
            } else {
                form.reportValidity();
            }
        }
    </script>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
