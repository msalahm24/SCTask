<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
</head>
<body>
    <link rel="stylesheet" href="inc/style.css">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <br>
    <div class="container">
        <div class="row justify-content-start">
            
            <div class="row justify-content-between">
                <div class="col-4">
                    <h1>Product Add</h1>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary" id="save">Save</button>
                    <a href="listing.php" type="button" class="btn btn-primary">Cancel</a>
                </div>
            </div>
        </div>
        <hr>
        <form  id="product_form" method="POST">
            <table id="tb_productForm">
                <tr>
                    <td><label class="label">SKU</label></td>
                    <td><input type="text" placeholder="#sku" id="sku"></td>
                </tr>
                <br>
                <tr>
                    <td><label class="label">Name</label></td>
                    <td><input type="text" placeholder="#Name" id="name"></td>
                </tr>
                <br>
                <tr>
                    <td><label class="label">Price</label></td>
                    <td><input type="text" placeholder="Ex: 100$" id="price"></td>
                </tr>
                <br><br>
                <tr>
                    <td><label class="label">Type switcher</label></td>
                    <td><select name="type" id="productType" onchange="addFields()">
                        <option disabled selected value="0">Type Switcher</option>
                        <option value="DVD">DVD</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Book">Book</option>
                    </select></td>
                </tr>
                <br>
                </table>
        </form>
        
        <!--
        <form action="POST" id="product_form" name="product">
            <label class="label">SKU</label><input type="text" placeholder="#sku">
            <br>
            <label class="label">SKcascasU</label><input type="text" placeholder="#sku">
            <br>
            <label class="label">SKccsU</label><input type="text" placeholder="#sku">
        </form>
    -->
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>
    <script src="inc/app.js"></script>
</body>
</html>