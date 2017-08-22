<?php
    require "connect.php";
    require "stock_func.php";

    if (isset($_POST['send_stock_request'])) {
        $id_stock_request_item = $_POST['item_code'];
        $stock_request_item_amount = $_POST['amount'];
        $request_description = $_POST['description'];
        $job_entry_id = $_POST['job_id'];
        sendStockRequest($_POST,$conn);
    }

?>