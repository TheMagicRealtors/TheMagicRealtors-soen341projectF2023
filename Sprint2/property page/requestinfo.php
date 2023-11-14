<?php
include 'header.php';
echo '<div>
<h1 style="font-size: 72px; color: white;">................................................</h1>
</div>';
echo '<h4> Request More Information</h4>';
echo '<div style="font: 95% Arial, Helvetica, sans-serif; padding: 16px;background: #F7F7F7;">
        <form method="post" action="processing_booking.php">
            <textarea name="moreinfo" id="moreinfo" placeholder="Write here" required></textarea>
<button class="btn btn-outline-light" style="background-color: #000080;">Submit</button>
</form>
</div>';

include 'footer.php';
?>