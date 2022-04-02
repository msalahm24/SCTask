<?php

use function PHPSTORM_META\type;

    include 'config/init.php';
    $db=new Database;
    $selected_products=isset($_POST["selected_prods"]) ? $_POST["selected_prods"] : null;

    foreach($selected_products as $sku)
    {
        $db->query("DELETE FROM products WHERE sku='" . $sku . "'");    
        $db->execute();
    }
?>