<script>
	var cartTable = $(".cart-table tbody");
	$(document).ready(function(){
		$(".products-table").on('click','.add-product',function(){
			var currentRow=$(this).closest("tr"); 
			var slug=currentRow.find("td:eq(0)").text(); 
			if(slug){
				$.get('{{ url('add-temp-item') }}?slug=' + slug, function(data) {
					cartItemCreate(data);
				});
			}
		});
	});

	function removeItem(id) {
		if(id){
			$.get('{{ url('remove-temp-item') }}?id=' + id, function(data) {
				cartItemCreate(data);
			});
		}
	}

	function decreaseItem(id) {
		if(id){
			$.get('{{ url('decrease-temp-item') }}?id=' + id, function(data) {
				cartItemCreate(data);
			});
		}
	}

	function increaseItem(id) {
		if(id){
			$.get('{{ url('increase-temp-item') }}?id=' + id, function(data) {
				cartItemCreate(data);
			});
		}
	}

	function cartItemCreate(data) {
		cartTable.empty();
		$.each(data, function( key, value ){
			cartTable.append("<tr><td><p>"+value.product.name+"</p><p style='color: #0acf97'>["+value.product.code+"]</p></td>" +
				"<td style='text-align: center;'><a class='remove-items' onclick='decreaseItem("+value.id+")'><i class='fa fa-minus'></i> </a><span style='padding: 5px;'>"+value.product_qty+"</span><a class='remove-items' onclick='increaseItem("+value.id+")'> <i class='fa fa-plus'></i></a></td>"+
				"<td style='text-align: right;'>" + value.total_cost + "</td>" +
				"<td style='text-align: center;'><a class='remove-items' onclick='removeItem("+value.id+")'><i class='fa fa-window-close' style='color: red;'></i></a></td></tr>");
		});
	}

</script>