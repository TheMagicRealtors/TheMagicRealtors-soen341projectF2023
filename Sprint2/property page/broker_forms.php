<div class="text-center mt-3">
    <button id="editBrokersButton" class="btn btn-primary" style="background-color: #000080;">Edit Brokers</button>
</div>

<div class="broker-form" style="display: none;">
    <!-- Create Broker Form -->
    <h2>Create Broker</h2>
    <form method="POST" action="broker_create.php" onsubmit="return validateCreateBrokerForm();">
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
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validatePhone(phone) {
        const phoneRegex = /^\+1 \d{3} \d{3} \d{4}$/;
        return phoneRegex.test(phone);
    }

   
    function validateBrokerForm(email, phone) {
        if (!validateEmail(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        if (!validatePhone(phone)) {
            alert('Please enter a valid phone number in the format +1 xxx xxx xxxx.');
            return false;
        }

        // All validations passed
        return true;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const editBrokersButton = document.getElementById('editBrokersButton');
        const brokerForm = document.querySelector('.broker-form');

        editBrokersButton.addEventListener('click', function() {
            brokerForm.style.display = (brokerForm.style.display === 'none') ? 'block' : 'none';
        });

        const createBrokerForm = document.querySelector('form[action="broker_create.php"]');
        createBrokerForm.addEventListener('submit', function(event) {
            const brokerEmail = document.querySelector('input[name="broker_email"]');
            const brokerPhone = document.querySelector('input[name="broker_phone"]');

            if (!validateBrokerForm(brokerEmail.value, brokerPhone.value)) {
                event.preventDefault();
                if (!validateEmail(brokerEmail.value)) {
                    brokerEmail.value = ''; // Clear only if email is invalid
                }
                if (!validatePhone(brokerPhone.value)) {
                    brokerPhone.value = ''; // Clear only if phone is invalid
                }
            }
        });

        const updateBrokerForm = document.querySelector('form[action="broker_update.php"]');
        updateBrokerForm.addEventListener('submit', function (event) {
            const newEmail = updateBrokerForm.querySelector('input[name="broker_email"]');
            const newPhone = updateBrokerForm.querySelector('input[name="broker_phone"]');
            const brokerName = updateBrokerForm.querySelector('input[name="broker_name"]');

            const isCreateOperation = false; // Set to false for update form

            let isValid = true;

            if (newEmail.value.trim() !== '' && !validateEmail(newEmail.value)) {
                event.preventDefault();
                isValid = false;
                alert('Please enter a valid email address.');
                newEmail.value = ''; // Clear only if email is invalid
            }

            if (newPhone.value.trim() !== '' && !validatePhone(newPhone.value)) {
                event.preventDefault();
                isValid = false;
                alert('Please enter a valid phone number in the format +1 xxx xxx xxxx.');
                newPhone.value = ''; // Clear only if phone is invalid
            }

        });
       
        const phoneInput = document.querySelector('input[name="broker_phone"]');
        phoneInput.addEventListener('focus', function() {
            if (phoneInput.value === '') {
                phoneInput.value = '+1 ';
            }
        });

        phoneInput.addEventListener('blur', function() {
            if (phoneInput.value === '+1 ') {
                phoneInput.value = '';
            }
        });
    });
</script>