<?php
include('database.php');
include('helpers.php');
global $conn;
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $_SESSION['idedit'] = $_GET['edit'] ;
    $result =mysqli_query($conn,"SELECT * FROM products WHERE ID=$id");
    if(mysqli_num_rows($result) === 1){
       $info = $result->fetch_assoc();
       if(isset($_POST['update'])){
           $image = checkInput($_POST['image']);
           $nameProduct = checkInput($_POST['nameProduct']);
           $description = checkInput($_POST['description']);
           $quantity =checkInput($_POST['quantity']);
           $price = checkInput($_POST['price']);
           $query= "UPDATE `products` SET `image`='$image',`name`='$nameProduct',`description`='$description',`quantity`='$quantity',`price`='$price' WHERE id= $id";
           if(mysqli_query($conn, $query)){
             $_SESSION['message'] = "Task has been updated successfully !";
             header('location: dashboard.php');
           }
       }
      }else {
      die('This Product Not Found');
     }
     
    }
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

    <form action="#" class="m-5" method="POST">
        <div class="mb-3 ">
            <div class="mb-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Add image</label>
                    <input class="form-control" type="file" id="formFile" name="image" value="">
                </div>

                <label for="productName" class="form-label">ProduName</label>
                <input type="name" class="form-control" id="productName" aria-describedby="name"
                    value="<?= $info['name']  ?>" name="nameProduct">
            </div>
            <label for="description" class="form-label">Description</label>
            <input type="name" class="form-control" id="description" aria-describedby="name" name="description"
                value="<?= $info['description']  ?>">
        </div>
        <label for="quantity" class="form-label">Quantity</label>
        <input type="name" class="form-control" id="quantity" aria-describedby="name" name="quantity"
            value="<?= $info['quantity']  ?>">
        </div>
        <label for="price" class="form-label">Price</label>
        <input type="name" class="form-control" id="price" aria-describedby="name" name="price"
            value="<?= $info['price']  ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-primary mt-5" name="update">Update</button>
    </form>
</body>

</html>