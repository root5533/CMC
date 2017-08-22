<?php



    include "connect.php";

    //get stock item codes to data list
    function viewStockItems($conn) {

        $query = "select * from stock";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

        while ($row = mysqli_fetch_array($result)) {
            $id_stock_item = $row['id_stock_item'];
            $item_code = $row['stock_item_code'];
            $stock_item_description = $row['stock_item_description'];
            $stock_item_amount = $row['stock_item_amount'];
            echo "<tr><td><input type=\"text\" size=\"5\" id=\"row11\" disabled=\"disabled\" value=\"$item_code\"></td>
                                <td><input type=\"text\" size=\"25\" id=\"row12\" disabled=\"disabled\" value=\"$stock_item_description\"></td>
                                <td><input type=\"text\" size=\"4\" id=\"row13\" disabled=\"disabled\" value=\"$stock_item_amount\"></td></tr>";
        }
    }