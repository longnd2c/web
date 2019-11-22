$(document).ready(function(){

	var productList;

	function getProducts(){
		$.ajax({
			url : '../admin/classes/Products.php',
			method : 'POST',
			data : {GET_PRODUCT:1},
			success : function(response){
				//console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var productHTML = '';

					productList = resp.message.products;

					if (productList) {
						$.each(resp.message.products, function(index, value){

							productHTML += '<tr>'+
								              '<td>'+''+'</td>'+
								              '<td>'+ value.P_Name +'</td>'+
								              '<td><img width="60" height="60" src="../img/product/'+value.P_IMG+'"></td>'+
								              '<td>'+ value.P_Price +'</td>'+
								              '<td>'+ value.P_Quantity +'</td>'+
								              '<td>'+ value.Cate_Name +'</td>'+
								              '<td>'+ value.B_Name +'</td>'+
								              '<td><a class="btn btn-sm btn-info edit-product" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a pid="'+value.P_ID+'" class="btn btn-sm btn-danger delete-product" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
								            '</tr>';

						});

						$("#product_list").html(productHTML);
					}

					


					var catSelectHTML = '<option value="">Select Category</option>';
					$.each(resp.message.categories, function(index, value){

						catSelectHTML += '<option value="'+ value.Cate_ID +'">'+ value.Cate_Name +'</option>';

					});

					$(".category_list").html(catSelectHTML);

					var brandSelectHTML = '<option value="">Select Brand</option>';
					$.each(resp.message.brands, function(index, value){

						brandSelectHTML += '<option value="'+ value.B_ID +'">'+ value.B_Name +'</option>';

					});

					$(".brand_list").html(brandSelectHTML);

				}
			}

		});
	}

	getProducts();

	$(".add-product").on("click", function(){

		$.ajax({

			url : '../admin/classes/Products.php',
			method : 'POST',
			data : new FormData($("#add-product-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#add-product-form").trigger("reset");
					$("#add_product_modal").modal('hide');
					getProducts();
				}else if(resp.status == 303){
					alert(resp.message);
				}
			}

		});

	});


	$(document.body).on('click', '.edit-product', function(){

		console.log($(this).find('span').text());

		var product = $.parseJSON($.trim($(this).find('span').text()));

		console.log(product);

		$("input[name='e_product_name']").val(product.P_Name);
		$("select[name='e_brand_id']").val(product.B_ID);
		$("select[name='e_category_id']").val(product.Cate_ID);
		$("textarea[name='e_product_desc']").val(product.P_Description);
		$("input[name='e_product_qty']").val(product.P_Quantity);
		$("input[name='e_product_price']").val(product.P_Price);
		$("input[name='e_product_image']").siblings("img").attr("src", "../img/product/"+product.P_IMG);
		$("input[name='pid']").val(product.P_ID);
		$("#edit_product_modal").modal('show');

	});

	$(".submit-edit-product").on('click', function(){

		$.ajax({

			url : '../admin/classes/Products.php',
			method : 'POST',
			data : new FormData($("#edit-product-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#edit-product-form").trigger("reset");
					$("#edit_product_modal").modal('hide');
					getProducts();
					alert(resp.message);
				}else if(resp.status == 303){
					alert(resp.message);
				}
			}

		});


	});

	$(document.body).on('click', '.delete-product', function(){

		var pid = $(this).attr('pid');
		if (confirm("Are you sure to delete this item ?")) {
			$.ajax({

				url : '../admin/classes/Products.php',
				method : 'POST',
				data : {DELETE_PRODUCT: 1, pid:pid},
				success : function(response){
					console.log(response);
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						getProducts();
					}else if (resp.status == 303) {
						alert(resp.message);
					}
				}

			});
		}else{
			alert('Cancelled');
		}
		

	});

});