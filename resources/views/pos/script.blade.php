<script type="text/javascript">

	var cartTable = $(".cart-table tbody");

	// window.onbeforeunload = function () {
	// 	return 'You will lost items in cart, Are you sure?';
	// }

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

	$(document).ready(function(){
		$(".set-products-table").on('click','.add-product',function(){
			var currentRow=$(this).closest("tr"); 
			var slug=currentRow.find("td:eq(0)").text(); 
			if(slug){
				$.get('{{ url('add-temp-set-item') }}?slug=' + slug, function(data) {
					console.log(data);
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
			if(!value.product) {
				var calldata = value.set;
			} else if (!value.set) {
				var calldata = value.product;
			}
			cartTable.append("<tr><td><p>"+calldata.name+"</p><p style='color: #0acf97'>["+calldata.code+"]</p></td>" +
				"<td style='text-align: center;'><a class='remove-items' onclick='decreaseItem("+value.id+")'><i class='fa fa-minus'></i> </a><span style='padding: 5px;'>"+value.product_qty+"</span><a class='remove-items' onclick='increaseItem("+value.id+")'> <i class='fa fa-plus'></i></a></td>"+
				"<td style='text-align: right;'>" + value.total_cost + "</td>" +
				"<td style='text-align: center;'><a class='remove-items' onclick='removeItem("+value.id+")'><i class='fa fa-window-close' style='color: red;'></i></a></td></tr>");
		});
		costInfo();
	}

	function costInfo() {
		$.get('{{ url('temp-item-cost-info') }}', function(data) {
			$("#total-item").text(data.totalItem + ' Pcs ||');
			$("#total-cost").text(data.totalCost);
			var discount = $("#discount-percent").val();
			var percentAmount = (data.totalCost * (discount / 100)).toFixed(2);
			var netAmount = (data.totalCost - percentAmount).toFixed(2);
			$("#discount-amount").text(percentAmount);
			$("#hidden-discount-amount").val(percentAmount);
			$("#net-amount").text(netAmount);
		});
	}

	$(document).ready(function() {
		var discount = $("#discount-percent");
		discount.keyup(function() {
			var discountVal = discount.val();
			if (discountVal > 100) {
				alert('Discount should less than 100%');
				var discountVal = 0;
				discount.val(0);
			}
			var totalCost = $("#total-cost").text();
			var percentAmount = (totalCost * (discountVal / 100)).toFixed(2);
			var netAmount = (totalCost - percentAmount).toFixed(2);
			$("#discount-amount").text(percentAmount);
			$("#hidden-discount-amount").val(percentAmount);
			$("#net-amount").text(netAmount);
		});
	});

	function cartProceed() {
		var discountAmout = $("#discount-amount").text();
		$.get('{{ url('cart-items-proceed') }}?discount=' + discountAmout, function() {
			// console.log(data);
			location.reload();
		});
	}

</script>