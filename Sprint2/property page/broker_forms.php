<div class="text-center mt-3">
    <button id="editBrokersButton" class="btn btn-primary" style="background-color: #000080;">Edit Brokers</button>
</div>

<div class="broker-form" style="display: none;">
    <!-- Create Broker Form -->
    <h2>Create Broker</h2>
    <form method="POST" action="broker_create.php">
        <div class="form-group">
            <label for="broker_name">Broker Name:</label>
            <input type="text" name="broker_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="broker_email">Email:</label>
            <input type="text" name="broker_email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="broker_phone">Phone:</label>
            <input type="text" name="broker_phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="broker_address">Address:</label>
            <input type="text" name="broker_address" class="form-control" required>
        </div>
        <button type="submit" name="createBroker" class="btn btn-primary" style="background-color: #000080;">Create</button>
    </form>

    <!-- Update Broker Form -->
    <h2>Update Broker</h2>
    <form method="POST" action="broker_update.php">
        <div class="form-group">
            <label for="broker_name">Broker Name:</label>
            <input type="text" name="broker_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="broker_email">New Email:</label>
            <input type="text" name="broker_email" class="form-control">
        </div>
        <div class="form-group">
            <label for="broker_phone">New Phone:</label>
            <input type="text" name="broker_phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="broker_address">New Address:</label>
            <input type="text" name="broker_address" class="form-control">
        </div>
        <button type="submit" name="updateBroker" class="btn btn-primary" style="background-color: #000080;">Update</button>
    </form>

    <!-- Delete Broker Form -->
    <h2>Delete Broker</h2>
    <form method="POST" action="broker_delete.php">
        <div class="form-group">
            <label for="broker_name">Broker Name:</label>
            <input type="text" name="broker_name" class="form-control" required>
        </div>
        <button type="submit" name="deleteBroker" class="btn btn-danger" style="background-color: #c10000;">Delete</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the "Edit Brokers" button and the broker forms container
    const editBrokersButton = document.getElementById('editBrokersButton');
    const brokerForm = document.querySelector('.broker-form');

    // Toggle the visibility of broker forms when the button is clicked
    editBrokersButton.addEventListener('click', function() {
        brokerForm.style.display = (brokerForm.style.display === 'none') ? 'block' : 'none';
    });
});
</script>
