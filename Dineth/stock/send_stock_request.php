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
            <li><a href="stock_pile.php.php">Stock pile</a></li>
            <li><a href="add_stock_items.php">Add Stock Items</a></li>
            <li><a href="">Stock Requests</a></li>
            <li><a href="">Stock Issue</a></li>
            <li><a href="">Purchase Stock</a></li>
            <li><a href="">Seal Quotation</a></li>
        </ul>
    </div>
</div>
<br>

<h3>Send Stock Requests</h3>

    <div id='infoHolder'>
        <table>
            <form method="post" action="send_stock_request.php">
                <tr>
                    <td style='text-align: center; font-weight: bold;'>
                        Code
                    </td>
                    <td style='text-align: center; font-weight: bold;'>
                        Description
                    </td>
                    <td style='text-align: center; font-weight: bold;'>
                        Amount
                    </td>
                </tr>
                <tr>
                    <td>
                        <select>
                            <?php require "stock_func.php"; addTableRows(); ?>
                        </select>
                    </td>
                    <td>
                        <input value='' type='text'>
                    </td>
                    <td>
                        <input value='' type='text'>
                    </td>
                </tr>
            </form>
        </table>
        <table>
                <tr>
                    <td>
                        <input type='submit' name='add_item' value='Add Item' onclick="">
                    </td>
                    <td>
                        <input type='reset' value='Reset Form'> 
                    </td>
                </tr>
        </table>

</div>

<div class="footer">
    <p>Colombo Municipal Council Workshop</p>
    <p>Madampitiya Road, Colombo 10</p>
</div>

</body>