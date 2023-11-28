<?php
include 'header.php';
include 'property_functions.php';

if (isset($_GET['address'])) {
    $selectedAddress = $_GET['address'];
}

$property = getPropertyFromAddress($selectedAddress);

echo '<img src="'.$property['image_url']. '" class="d-block w-100" alt="House Image">';
echo '<h4 class="ml-2 mt-2"> Book a Visit to <b>' . $property['address'] . ', '. $property['district'] . ', ' . $property['city'] . '</b> now!</h4>';

echo '<div style="font: 95% Arial, Helvetica, sans-serif; padding: 16px;background: #F7F7F7;">
        <form method="post" action="processing_booking.php">
            <input type="text" id="email" name="email" placeholder="Email Address" />
            <input type="hidden" name="address" value="' . htmlspecialchars($selectedAddress) . '">
            <br><br>
            <textarea name="availabilities" id="availabilities" placeholder="Type your Availabilities" required></textarea> <br>
<button class="btn btn-outline-light" style="background-color: #000080;">Submit</button>
</form>
</div>';

include 'footer.php';
?>
