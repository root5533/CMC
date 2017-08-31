<?php

include 'dbconnect.php';


function addStockItem($array){

    $stock_item_code = $_POST['stock_item_code'];
    $stock_item_description = $_POST['stock_item_description'];
    $stock_item_amount = $_POST['stock_item_amount'];

    $query = "insert into stock(stock_item_code,stock_item_description,stock_item_amount)
                  values('$stock_item_code','$stock_item_description','$stock_item_amount')";
    $dbc = openDB();
    $result = mysqli_query($dbc,$query)
    or die(mysqli_error($dbc));
    closeDB($dbc);
    echo "<div id='success'> <p>Stock Item added successful</p> </div>";
    return false;

}

function getAllStockItems(){

    $query = "select * from stock";
    $dbc = openDB();
    $result = mysqli_query($dbc,$query)
    or die(mysqli_error($dbc));

    while ($row = mysqli_fetch_array($result)){

        $stock_item_code = $row['stock_item_code'];
        $stock_item_description = $row['stock_item_description'];
        $stock_item_amount = $row['stock_item_amount'];

        echo "  <tr>
                    <td>
                        <input value='$stock_item_code' disabled='disabled' style='background-color: transparent; color: #ffffff; border: transparent; text-align: center;'>
                    </td>
                    <td>
                        <input value='$stock_item_description' disabled='disabled' style='background-color: transparent; color: #ffffff; border: transparent; text-align: center;'>
                    </td>
                    <td>
                        <input value='$stock_item_amount' disabled='disabled' style='background-color: transparent; color: #ffffff; border: transparent; text-align: center;'>
                    </td>
                </tr>";
    }

    closeDB($dbc);
    return false;

}

function getStockItemCodes(){

    $query = "select stock_item_code,stock_item_description from stock";
    $dbc = openDB();
    $result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

    while ($row = mysqli_fetch_array($result)) {

        $item_code = $row['stock_item_code'];
        $description = $row['stock_item_description'];
        echo "<option>$item_code</option>";


    }

    closeDB($dbc);
    return false;

}