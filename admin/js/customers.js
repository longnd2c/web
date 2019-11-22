$(document).ready(function(){

	getCustomers();
	getCustomerOrders();

	function getCustomers(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customersHTML = "";

					$.each(resp.message, function(index, value){

						customersHTML += '<tr>'+
									          '<td>#</td>'+
									          '<td>'+value.Cus_Name+'</td>'+
									          '<td>'+value.Cus_Email+'</td>'+
									          '<td>'+value.Cus_Phone+'</td>'+
									          '<td>'+value.Cus_Address+'</td>'+
									       '</tr>'

					});

					$("#customer_list").html(customersHTML);

				}else if(resp.status == 303){

				}

			}
		})
		
	}

	function getCustomerOrders(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){

						customerOrderHTML +='<tr>'+
								              '<td>#</th>'+
								              '<td>'+ value.O_ID +'</td>'+
								              '<td>'+ value.Cus_ID +'</td>'+
								              '<td>'+ value.P_ID +'</td>'+
								              '<td>'+ value.P_Name +'</td>'+
								              '<td>'+ value.Quantity +'</td>'+
								            '</tr>';

					});

					$("#customer_order_list").html(customerOrderHTML);

				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}

			}
		})
		
	}


});