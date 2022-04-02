let prods = [];
let selected_prods = [];

function delete_product() {
    prods = document.getElementsByClassName("delete-checkbox");
    for (var id = 0; id < prods.length; id++) {
        if (prods[id].checked == true) {
            selected_prods.push(prods[id].id);
        }
      // console.log(selected_prods);
    }
    for (var id = 0; id < selected_prods.length; id++) {
        document.getElementById(selected_prods[id]).remove();
    }
    $.ajax({
        type:"POST",
        url:"delete.php",
        data:{selected_prods:selected_prods},
        dataType:"html"
    });
    prods = [];
    selected_prods = [];
}

function addFields() {
    var select = document.getElementById('productType');
    var value = select.options[select.selectedIndex].value;
    var form_el = document.getElementById("product_form");
    switch (value) {
        case "1":
            //check if other elements visiable in dom
            if (document.getElementById("dynamic_table") != null) {
                document.getElementById("dynamic_table").remove();
            }
            // for size
            var table_el = document.createElement("table");
            table_el.id = "dynamic_table";
            form_el.appendChild(table_el);
            var tr_el = document.createElement("tr");
            tr_el.id = "tr_size";
            table_el.appendChild(tr_el);
            var td_label = document.createElement("td");
            tr_el.appendChild(td_label);
            var label = document.createElement('label');
            label.className = "label";
            label.innerHTML = "Size";
            td_label.appendChild(label)
            var td_input = document.createElement("td");
            tr_el.appendChild(td_input);
            var size_input = document.createElement("input");
            size_input.id = "size";
            size_input.type = "text";
            size_input.placeholder = "Please, provide size in MB"
            td_input.appendChild(size_input);
            break;
        case "3":
            //check if other elements visiable in dom
            if (document.getElementById("dynamic_table") != null) {
                document.getElementById("dynamic_table").remove();
            }
            var table_el = document.createElement("table");
            table_el.id = "dynamic_table";
            form_el.appendChild(table_el);
            var tr_el = document.createElement("tr");
            tr_el.id = "tr_weight";
            table_el.appendChild(tr_el);
            var td_label = document.createElement("td");
            tr_el.appendChild(td_label);
            var label = document.createElement('label');
            label.className = "label";
            label.innerHTML = "weight";
            td_label.appendChild(label)
            var td_input = document.createElement("td");
            tr_el.appendChild(td_input);
            var size_input = document.createElement("input");
            size_input.id = "weight";
            size_input.type = "text";
            size_input.placeholder = "Please, provide weight"
            td_input.appendChild(size_input);
            break;

        case "2":
            //check if other elements visiable in dom
            if (document.getElementById("dynamic_table") != null) {
                document.getElementById("dynamic_table").remove();
            }
            // for height 
            var table_el = document.createElement("table");
            table_el.id = "dynamic_table";
            form_el.appendChild(table_el);
            var tr_desc = document.createElement("tr");
            table_el.appendChild(tr_desc);
            var td_desc = document.createElement("td");
            tr_desc.appendChild(td_desc);
            var label_desc = document.createElement("label");
            label_desc.innerHTML = "Please, provide dimensions";
            td_desc.appendChild(label_desc);
            var tr_el = document.createElement("tr");
            tr_el.id = "tr_height";
            table_el.appendChild(tr_el);
            var td_label = document.createElement("td");
            tr_el.appendChild(td_label);
            var label = document.createElement('label');
            label.className = "label";
            label.innerHTML = "height";
            td_label.appendChild(label)
            var td_input = document.createElement("td");
            tr_el.appendChild(td_input);
            var size_input = document.createElement("input");
            size_input.id = "height";
            size_input.type = "text";
            size_input.placeholder = "Height"
            td_input.appendChild(size_input);
            // for width 
            var tr_el = document.createElement("tr");
            tr_el.id = "tr_width";
            table_el.appendChild(tr_el);
            var td_label = document.createElement("td");
            tr_el.appendChild(td_label);
            var label = document.createElement('label');
            label.className = "label";
            label.innerHTML = "width";
            td_label.appendChild(label)
            var td_input = document.createElement("td");
            tr_el.appendChild(td_input);
            var size_input = document.createElement("input");
            size_input.id = "width";
            size_input.type = "text";
            size_input.placeholder = "Width"
            td_input.appendChild(size_input);
            // for lenght
            var tr_el = document.createElement("tr");
            tr_el.id = "tr_lenght";
            table_el.appendChild(tr_el);
            var td_label = document.createElement("td");
            tr_el.appendChild(td_label);
            var label = document.createElement('label');
            label.className = "label";
            label.innerHTML = "lenght";
            td_label.appendChild(label)
            var td_input = document.createElement("td");
            tr_el.appendChild(td_input);
            var size_input = document.createElement("input");
            size_input.id = "length";
            size_input.type = "text";
            size_input.placeholder = "Lenght"
            td_input.appendChild(size_input);


    }
}