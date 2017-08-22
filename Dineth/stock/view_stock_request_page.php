<!DOCTYPE html>
<html>
<head>
    <title>Workshop Management System</title>
    <link rel="stylesheet" type="text/css" href="view_stock_request_stylesheet.css">
    <script src="view_stock_request_script.js"></script>

</head>


<body>

<div id="topBar">

</div>


<div id="header">
	<h1 id="headingWMS">Workshop Management System</h1>
	<h1 id="headingCMCW">Colombo Municipal Council Workshop</h1>
	<div id="navbar">
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Dashboard</a></li>
		<li><a href="">Settings</a></li>
		<li><a href="">Notifications</a></li>
	</ul>
	</div>
</div>


<h3 id="message_point">New Complain Recieved</h3>
<div id="infoHolder">

    <table id="request_table">
        <form action="stock_request.php" method="POST" id="stock_request_form_2" onsubmit="return validateStockRequestForm()">
            <tr class="top_pane">
                <td class="col1"></td>
                <td class="col1">
                    <label for="compNum">Search</label>
                    <input type="textbox" name="" id="jobidtextbox" disabled="disabled" size="8">
                    <button onclick="addTableRows()" class="stock_request_button">Search</button>
                </td>
                <td class="col1"></td>
            </tr>
            <tr class="middle_pane">
                <td class="col1"></td>
                <td class="col1">

                        <table id="stock_request_table">
                            <tr>
                                <th>Item Code</th>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                            <?php require "view_stock_func.php"; viewStockItems($conn);?>
                        </table>

                </td>
    <!--            <td class="col1">-->
    <!--                <button onclick="addTableRows()">Add</button>-->
    <!--                <button onclick="deleteTableRows()">Delete</button>-->
    <!--            </td>-->
            </tr>
        </form>
        <tr class="button_panel_1">
            <td class="col1"></td>
            <td class="col1">
                <button onclick="addTableRows()" class="stock_request_button">Add Item</button>
                <button onclick="deleteTableRows()" class="stock_request_button">Delete Item</button>
            </td>
            <td class="col1"></td>
        </tr>
    </table>


</div>



</body>



</html>
