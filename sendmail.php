<?php
    echo "<div class='message-box'>";
    echo "<h2>Message Details</h2>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Phone:</strong> " . htmlspecialchars($_POST['phone']) . "</p>";
    echo "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($_POST['message'])) . "</p>";
    echo "</div>";
?>