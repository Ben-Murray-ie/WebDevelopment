//Shopping/Basket Script

//Confirm script is accessed by index page.
console.log("Basket Script Recognised")

//Declare variable to house value of total.
var total = 0;

//Function to add products to basket. Parameter "item" is number corresponding to item on product menu.
function addProd(item){
	//Confirm that function has started.
	console.log("Adding item to Basket...");
	//Products details in index.php are given ids (eg. productTitle1). Declare variables for these details below with "item" indicating the product to address.
	var name = "productTitle" + item;
	var price = "productPrice" + item;
	//With the correct product addressed by id, create variables to hold the innerHTML associated with that id.
	var addName = document.getElementById(name).innerHTML;
	var addPrice = document.getElementById(price).innerHTML;
	//Create variable to refer to checkout product table, specify "tbody" by tag name to ignore "thead", which contains column headings.
	var table = document.getElementById('checkoutTable').getElementsByTagName('tbody')[0];
	//Insert new row in tbody.
	var row = table.insertRow(0);
	//Insert 3 new cells into new row.
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	//Insert variables for name and price.
	cell1.innerHTML = addName;
	cell2.innerHTML = addPrice;
	//Insert html to create remove button in column 3, with onclick event to run deleteRow() function below.
	cell3.innerHTML = '<button type="button" class="btn btn-danger removeButton" onclick="deleteRow(this)">Remove</button>';
	//Cast price to number and add to total.
	total+=Number(addPrice);
	//Update total in checkout modal.
	document.getElementById("totalCost").innerHTML=total;	
}

//Function to delete row when remove button is clicked.
function deleteRow(removeBtn) {
	//Confirm that function has started.
	console.log("Deleting row...")
	//Create variable to refer to parentNode(row) of parentNode(table) of remove button.
	var removeRow=removeBtn.parentNode.parentNode;
	//Create variable to hold contents of price column for this row, cast to number.
	var resetTotal = Number(removeRow.cells[1].innerHTML);
	//Deduct value of price column for this row from total.
	total = (total - resetTotal);
	//Update total displayed in checkout modal.
	document.getElementById("totalCost").innerHTML=total;
	//Remove row containing remove button.
	removeRow.parentNode.removeChild(removeRow);
	
}

//Checkout function.
function checkOut(){
	//Confirm that function has started.
	console.log("Checking out...")
	//Refer to element "loginSuccess" on index page.
	var logSuccess = document.getElementById('loginSuccess');
	//If login successful message is not visible, user is not logged in and must log in before checking out.
	if (logSuccess.style.visibility == 'hidden') {
		alert("Please log in before checkout.");
	//If user is logged in, proceed with checkout.
	} else {
	//Refer to checkoutTable element.
	var table = document.getElementById('checkoutTable');
	//If table does not contain more rows than thead row containing column headings, basket is empty and no purchase can be made.
	if (table.rows.length < 2){
		alert("Cannot complete purchase. No items in basket.");
	//If basket is not empty, proceed with purchase.
	} else {
		//Inform user that checkout is successful.
		alert("Order complete, thank you for your purchase!");
			//Reset total to 0.
			total = 0;
			//Set total displayed in modal to new value (0).
			document.getElementById("totalCost").innerHTML=total;
			//Delete all rows, excluding column heading row, using deleteRow function.
			while(table.rows.length > 1) {
				table.deleteRow(1);
			}
		}
	}
}