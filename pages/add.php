<?php
include('helpers.php');
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>add product</title>
</head>

<body>

    <form action="helpers.php" class="m-5" method="POST">
        <div class="mb-3 ">
            <div class="mb-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Add image</label>
                    <input class="form-control" type="file" id="formFile" name="image" value="">
                </div>

                <label for="productName" class="form-label">ProduName</label>
                <input type="name" class="form-control" id="productName" aria-describedby="name" name="nameProduct">
            </div>
            <label for="description" class="form-label">Description</label>
            <input type="name" class="form-control" id="description" aria-describedby="name" name="description">
        </div>
        <label for="quantity" class="form-label">Quantity</label>
        <input type="name" class="form-control" id="quantity" aria-describedby="name" name="quantity">
        </div>
        <label for="price" class="form-label">Price</label>
        <input type="name" class="form-control" id="price" aria-describedby="name" name="price">
        </div>
        <button type="submit" class="btn btn-primary mt-5" name="save">Save</button>
    </form>
</body>

</html>