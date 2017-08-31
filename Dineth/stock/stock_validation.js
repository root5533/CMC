
function validateAddStockItemPage() {

    var stock_item_code =  document.getElementById(stock_item_code);
    var stock_item_description =  document.getElementById(stock_item_description);
    var stock_item_amount =  document.getElementById(stock_item_amount);

    var txtbox1_value = stock_item_code.getAttribute("value");
    var txtbox2_value = stock_item_description.getAttribute("value");
    var txtbox3_value = stock_item_amount.getAttribute("value");

    var error_flag = false;

    if(txtbox1_value == "" && txtbox2_value == "" && txtbox3_value == ""){

        stock_item_code.setAttribute("style", "border-color: red;");
        stock_item_description.setAttribute("style", "border-color: red;");
        stock_item_amount.setAttribute("style", "border-color: red;");

        error_flag = true;
    }
    else if (txtbox1_value == "" && txtbox2_value == ""){

        stock_item_code.setAttribute("style", "border-color: red;");
        stock_item_description.setAttribute("style", "border-color: red;");

        error_flag = true;
    }
    else if(txtbox2_value == "" && txtbox3_value == ""){

        stock_item_description.setAttribute("style", "border-color: red;");
        stock_item_amount.setAttribute("style", "border-color: red;");

        error_flag = true;
    }
    else if(txtbox1_value == "" && txtbox3_value == ""){

        stock_item_code.setAttribute("style", "border-color: red;");
        stock_item_amount.setAttribute("style", "border-color: red;");

        error_flag = true;
    }
    else if (txtbox1_value == ""){

        stock_item_code.setAttribute("style", "border-color: red;");

        error_flag = true;
    }
    else if (txtbox2_value == ""){

        stock_item_description.setAttribute("style", "border-color: red;");

        error_flag = true;
    }
    else if (txtbox3_value == ""){

        stock_item_amount.setAttribute("style", "border-color: red;");

        error_flag = true;
    }

    if (error_flag){
        return false;
    }
    else {
        return true;
    }
}