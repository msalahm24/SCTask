<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="templates\inc\style.css">
    <div class="container">
        <br>
        <div class="container">
            <div class="row justify-content-start">

                <div class="row justify-content-between">
                    <div class="col-4">
                        <h1>Product List</h1>
                    </div>
                    <div class="col-4">
                        <a href="addproduct.php" type="button" class="btn btn-primary">ADD</a>
                        <button type="button" class="btn btn-primary" id="MassDelete" onclick="delete_product()">MASS DELETE</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <?php foreach($products as $product ):?>
                        <div class="col-sm-2" id="<?php echo $product->sku; ?>" >
                            <input type="checkbox" id="<?php echo $product->sku; ?>" class="delete-checkbox"><br>
                            <div class="product_details">
                                    <?php echo $product->name;?> <br>
                                    <?php echo $product->price;?><br>
                                    <?php echo $product->attribute;?><br>
                                    <?php echo $product->sku;?><br>
                            </div>
                        </div>
                        <br>
                    <?php endforeach;?>
                </div>
            </div>
            <br>
            
            <hr>
            <center>Scandiweb Test assignment</center>

        </div>
    </div>
    <script src="templates\inc\app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>