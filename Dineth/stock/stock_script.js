var message = document.getElementById("message_point");

function addTableRows() {

    var table = document.getElementById("stock_table");
    var current_rows = document.getElementById("stock_table").rows.length;
    var row = table.insertRow(current_rows);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    //create a textbox
    var textBox1 = document.createElement("input");
    cell1.appendChild(textBox1);
    textBox1.id = "row"+current_rows+"1";
    textBox1.size = "5";

    //create a textbox
    var textBox2 = document.createElement("input");
    cell2.appendChild(textBox2);
    textBox2.id = "row"+current_rows+"2";
    textBox2.size = "25";

    //create a textbox
    var textBox3 = document.createElement("input");
    cell3.appendChild(textBox3);
    textBox3.id = "row"+current_rows+"3";
    textBox3.size = "4";

    // cell1.innerHTML = "<select id=\"row\">\n" +
    //     "                                    <option>CL067</option>\n" +
    //     "                                    <option>YU771</option>\n" +
    //     "                                    <option>PC899</option>\n" +
    //     "                                </select>";
    // cell2.innerHTML = "<input id=\"row\" type=\"text\" size=\"25\">";
    // cell3.innerHTML = "<input id=\"row\" type=\"text\" size=\"4\">";
    message.innerHTML = textBox1.id;

}

function deleteTableRows() {

    var current_rows = document.getElementById("stock_table").rows.length;
    if(current_rows==2){
        window.alert("You cannot delete more.");
    }
    else{
        document.getElementById("stock_table").deleteRow(current_rows-1);
    }

}

function clearAllText() {
    document.getElementById("col1").value = "";
}

function validateStockForm() {

    var current_rows = document.getElementById("stock_table").rows.length;
    var empty_fields = false;

    for (var i=1;i<current_rows;i++){
        var cell1 = document.getElementById("row"+i+"1");
        var cell2 = document.getElementById("row"+i+"2");
        var cell3 = document.getElementById("row"+i+"3");
        if(cell1.value == "" || cell2.value == "" || cell3.value == ""){
            empty_fields = true;
        }
    }

    if (empty_fields) {
        window.alert("Please fill all fields.");
        cell1.focus();
        return false;
    }


}

