<?php
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="main-container">
        <h2>Order Summary</h2>
        <div class="summary-container">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)): ?>
    <p><strong>First name:</strong> <?= htmlspecialchars($_POST['first_name'] ?? '') ?></p>
    <p><strong>Surname:</strong> <?= htmlspecialchars($_POST['surname'] ?? '') ?></p>
    <p><strong>Postcode:</strong> <?= htmlspecialchars($_POST['postcode'] ?? '') ?></p>
    <p><strong>House number:</strong> <?= htmlspecialchars($_POST['house_number'] ?? '') ?></p>
    <p><strong>Country:</strong> <?= htmlspecialchars($_POST['country'] ?? '') ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($_POST['email'] ?? '') ?></p>
    <p><strong>Birthdate:</strong> <?= htmlspecialchars($_POST['birthdate'] ?? '') ?></p>
    <p><strong>Newsletter:</strong> <?= isset($_POST['newsletter']) ? 'Yes' : 'No' ?></p>
<?php else: ?>
    <p>No data submitted.</p>
<?php endif; ?> 
        </div>
    </div>
    <script src="script.js" defer></script>
    <script>
        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add("open-popup");
        }
        function closePopup() {
            popup.classList.remove("open-popup");
            window.location.href = "index.php"; 
        }
    </script>


<?php if (!empty($_POST['product'])): ?>
    <p><strong>Products ordered:</strong></p>
    <ul>
        <?php foreach ($_POST['product'] as $product): ?>
            <li><?= htmlspecialchars($product) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</body>
</html>

<?php
    include 'includes/footer.php';
?>
