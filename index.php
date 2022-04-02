<?php
    include 'config/init.php';

    $db=new Database;
    
    $listing_template=new Template("templates/listing.php");
    function getAll()
    {
        $GLOBALS['db']->query("SELECT * FROM products");
        $result=$GLOBALS['db']->resultSet();
        return $result;
    }

    $listing_template->products=getAll();

    echo $listing_template;
?>
