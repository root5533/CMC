<!DOCTYPE html>
<html>

<head>
    <title>Workshop Management System</title>
    <link rel="stylesheet" href="css/formstyle.css" type="text/css">
</head>

<body>



<div id="topBar">
    <!-- <div id="searchBar">
        <label for="search">Search</label>
        <input type="text" name="search" title="Type any keyword to search the website" id="search" size="25">
    </div>
    -->
    <div id="loginBar">
        <button>Login</button>
    </div>
</div>


<div id="header">
    <img src="../images/cmc_logo.png" id="logo">
    <h1 id="headingWMS">Workshop Management System</h1>
    <h1 id="headingCMCW">Colombo Municipal Council Workshop</h1>
    <div id="navbar">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="">Maintenance</a></li>
            <li><a href="">Equipment</a></li>
            <li><a href="">Electrical</a></li>
            <li><a href="">Production</a></li>
            <li><a href="">About</a></li>
        </ul>
    </div>
    <div id="navbar2">
        <ul>
            <li><a href="stock_pile.php">Stock pile</a></li>
            <li><a href="add_stock_items.php">Add Stock Items</a></li>
            <li><a href="">Stock Requests</a></li>
            <li><a href="">Stock Issue</a></li>
            <li><a href="">Purchase Stock</a></li>
            <li><a href="">Seal Quotation</a></li>
        </ul>
    </div>
</div>
<br>

<h3>Stock Item Registration</h3>

<?php

require 'stock_func.php';

$outform = true;
$stock_item_code = null;
$stock_item_description = null;
$stock_item_amount = null;

if (isset($_POST['add_item'])) {

    $stock_item_code = $_POST['stock_item_code'];
    $stock_item_description = $_POST['stock_item_description'];
    $stock_item_amount = $_POST['stock_item_amount'];
    $outform = addStockItem($_POST);
}

if ($outform == true) {
    echo
    "
    <script src='stock_validation.js'></script>
    <div id='infoHolder'>
        <table>
            <form action='add_stock_items.php' method='post' onsubmit='return validateAddStockItemPage()'>
                <tr>
                    <td>
                        <label>Stock item Code : </label>
                    </td>
                    <td>
                        <input type='text' name='stock_item_code' value='$stock_item_code' size='5' id='stock_item_code' required>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Stock item Description : </label>
                    </td>
                    <td>
                        <input type='text' name='stock_item_description' value='$stock_item_description' size='50' id='stock_item_description' required>
                    </td>
                </tr>    
                <tr>
                    <td>
                        <label>Stock item Amount : </label>
                    </td>
                    <td>
                        <input type='text' name='stock_item_amount' value='$stock_item_amount' size='4' id='stock_item_amount' required>
                    </td>
                </tr>       
                <tr class='blank_row'>
                    <td colspan='2'>  </td>
                </tr>
                <tr>
                    <td>
                        <input type='submit' name='add_item' value='Add Item'>
                    </td>
                    <td>
                        <input type='reset' value='Reset Form'> 
                    </td>
                </tr>
            </form>
        </table>";
}
?>

</div>

<div class="footer">
    <p>Colombo Municipal Council Workshop</p>
    <p>Madampitiya Road, Colombo 10</p>
</div>

</body>