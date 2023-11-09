<div class="text-center mt-3">
    <button id="editPropertyButton" class="btn btn-success" style="background-color: white;">Edit Properties</button>
</div>

<div class="property-form" style="display: none;">
   
<!-- Create Property Form -->
    <h2>Create Property</h2>
    <form method="POST" action="property_create.php">
        <div class="form-group">
            <label for="properties_id">Property Number:</label>
            <input type="text" name="properties_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="district">District</label>
            <input type="text" name="district" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nb_bathrooms">Bathroom number</label>
            <input type="text" name="nb_bathrooms" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nb_bedrooms">Bedroom number</label>
            <input type="text" name="nb_bedrooms" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="house_type">House type</label>
            <input type="text" name="house_type" class="form-control">
        </div>
        <div class="form-group">
            <label for="garage">Garage</label>
            <input type="text" name="garage" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <br>
        <div class="input-group mb-3">
  <label class="input-group-text" for="image_url">Upload</label>
  <input type="file" class="form-control" name="image_url">
</div>
        <br>
       
        <button type="submit" name="createProperty" class="btn btn-primary" style="background-color: #000080;">Create</button>
    </form>

    <!-- Update Property Form -->
    <h2>Update Property</h2>
    <form method="POST" action="property_update.php">
        <div class="form-group">
            <label for="properties_id">Property Number</label>
            <input type="text" name="properties_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
        </div> <br>
        <div class="input-group mb-3">
  <label class="input-group-text" for="image_url">Upload Image</label>
  <input type="file" class="form-control" name="image_url">
</div>
<br>

        
        <button type="submit" name="updateProperty" class="btn btn-primary" style="background-color: #000080;">Update</button>
    </form>

    <!-- Delete Property Form -->
    <h2>Delete Property</h2>
    <form method="POST" action="property_delete.php">
        <div class="form-group">
            <label for="properties_id">Property Number</label>
            <input type="text" name="properties_id" class="form-control" required>
        </div>
        <button type="submit" name="deleteProperty" class="btn btn-danger" style="background-color: #c10000;">Delete</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the "Edit Properties" button and the property forms container
    const editPropertyButton = document.getElementById('editPropertyButton');
    const propertyForm = document.querySelector('.property-form');

    // Toggle the visibility of property forms when the button is clicked
    editPropertyButton.addEventListener('click', function() {
        propertyForm.style.display = (propertyForm.style.display === 'none') ? 'block' : 'none';
    });
});
</script>
