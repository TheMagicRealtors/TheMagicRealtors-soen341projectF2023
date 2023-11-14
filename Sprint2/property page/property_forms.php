<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
  <meta http-equiv="'X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/main.min.css">
  <title>The Magic Realtors</title>
</head>
<!--<div class="text-center mt-3">
    <button id="editPropertyButton" class="btn btn-primary" style="background-color: #000080;">Edit Properties</button>
</div>-->
<style>
   .property-form {
      display: block !important; /* Ensure the form is visible */
   }
</style>

<div class="property-form container mx-auto" style="display: none;">
   
<!-- Create Property Form -->
<h1 class="display-4">Create Property</h1>
    <form method="POST" action="property_create.php">

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
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" name="createProperty" class="btn btn-primary" style="background-color: #000080;">Create</button>
    `</div>
    </form>

    <!-- Update Property Form -->
    <h1 class="display-4">Update Property</h1>
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

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" name="updateProperty" class="btn btn-primary" style="background-color: #000080;">Update</button>
</div>
    </form>


    <!-- Delete Property Form -->
    <h1 class="display-4">Delete Property</h1>
    <form method="POST" action="property_delete.php">
        <div class="form-group">
            <label for="properties_id">Property Number</label>
            <input type="text" name="properties_id" class="form-control" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" name="deleteProperty" class="btn btn-danger mb-2">Delete</button>
        </div>
    </form>
</div>

<!--<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the "Edit Properties" button and the property forms container
    const editPropertyButton = document.getElementById('editPropertyButton');
    const propertyForm = document.querySelector('.property-form');

    // Toggle the visibility of property forms when the button is clicked
    editPropertyButton.addEventListener('click', function() {
        propertyForm.style.display = (propertyForm.style.display === 'none') ? 'block' : 'none';
    });
});
</script>-->
