<?php
// save_card.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $cardNumber = $_POST['card_number'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    // Insecure example — do NOT use this in production!
    $data = "Name: $name | Card: $cardNumber | Exp: $expiry | CVV: $cvv\n";
    file_put_contents('cards.txt', $data, FILE_APPEND);

    echo "Your card info (with name) was 'saved'. Again — not securely!";
} else {
    echo "Invalid request.";
}
?>
