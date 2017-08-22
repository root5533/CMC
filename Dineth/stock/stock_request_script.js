var message = document.getElementById("message_point");

function addTableRows() {

    var table = document.getElementById("stock_request_table");
    var current_rows = document.getElementById("stock_request_table").rows.length;
    var row = table.insertRow(current_rows);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    //create a dropdownlist
    var inputlist = document.createElement("input");
    var dropDownList = document.createElement("datalist");
    inputlist.appendChild(dropDownList);
    cell1.appendChild(inputlist);
    inputlist.id = "row"+current_rows+"1";
    inputlist.size = "5";


    //create a textbox
    var textBox1 = document.createElement("input");
    cell2.appendChild(textBox1);
    textBox1.id = "row"+current_rows+"2";
    textBox1.size = "25";

    //create a textbox
    var textBox2 = document.createElement("input");
    cell3.appendChild(textBox2);
    textBox2.id = "row"+current_rows+"3";
    textBox2.size = "4";

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

    var current_rows = document.getElementById("stock_request_table").rows.length;
    if(current_rows==2){
        window.alert("You cannot delete more.");
    }
    else{
        document.getElementById("stock_request_table").deleteRow(current_rows-1);
    }

}

function clearAllText() {
    document.getElementById("col1").value = "";
}

function validateStockRequestForm() {

    var jobid = document.getElementById("jobidtextbox");
    var current_rows = document.getElementById("stock_request_table").rows.length;
    var empty_fields = false;

    for (var i=1;i<current_rows;i++){
        var cell2 = document.getElementById("row"+i+"2");
        var cell3 = document.getElementById("row"+i+"3");
        if(cell2.value == "" || cell3.value == "" || jobid.value == ""){
            empty_fields = true;
        }
    }

    if (empty_fields) {
        window.alert("Please fill all fields.");
        jobid.focus();
        return false;
    }


}

