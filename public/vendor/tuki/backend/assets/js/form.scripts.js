document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number"){
        document.activeElement.blur();
    }
});
function afterAction(data){
	if($('#current_cod_value').length){

		var codValue = $('#current_cod_value').val();
		var bookingCodVal = data[8] ? parseFloat(data[8]): 0;
		$('#current_cod_value').val(parseFloat(codValue) + bookingCodVal);
	}

}
function deductRunsheetCOD(price = 0){
	// console.log(price);
	if(price == 'null'){
		price = 0;
	}
	if($('#current_cod_value').length){

		var codValue = $('#current_cod_value').val();
		var bookingCodVal = price ? price: 0;
		$('#current_cod_value').val(parseFloat(codValue) - parseFloat(bookingCodVal));
	}	
}
$(document).ready(() => {

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	// $(document).find('a').attr('target','_blank');
	var location = window.location.href;
	if(location.indexOf('booking/create') > -1){
		if(location.indexOf('duplicate') > -1 ){
			$(document).find('select[name=consignee_name]').focus();
			onDuplicateNdox();
		}else{
			$(document).find('select[name=customer_id]').focus();
		}
		// alert('load focus');
		// alert(location);
	}
	$(document).find('a[href^="javascript:void(0);"]').removeAttr('target');
	// alert('Base URL: '+ BASE_URL);
	// Price display in bulk booking 
	
	// Price dislay end
	var baseAmount = 0;
	// $('.form-element-delivery_rate').hide();
	$('input[name=length], input[name=height], input[name=breadth]').on('keyup', (e) => {
		calculateVolumetric();
	});
	$('input[name=weight]').on('keyup', (e) => {
		calculatePrice();
	})
	$('input[name=actual_weight],input[name=quantity]').on('keyup', (e) => {
		calculateChargeableWeight()
	})
	function calculateVolumetric(){
		var length = $('input[name=length]').val();
		var height = $('input[name=height]').val();
		var breadth = $('input[name=breadth]').val();
		$('input[name=volumetric_weight]').val( ( length * height * breadth )/5000 );
		calculateChargeableWeight();
	}
	function calculateChargeableWeight(){
		var cv = $('input[name=volumetric_weight]').val();
		var aw = $('input[name=actual_weight]').val();
		var changeWeight = ((cv > aw )? cv : aw);
		var merchandiseType = $('select[name=merchandise_type_id]').val();
		// alert(merchandiseType);
		// console.log(cv);
		// console.log(aw);
		$('input[name=weight]').val( changeWeight );
		if(merchandiseType == 1 && changeWeight > 0.5){
			$('select[name=merchandise_type_id]').val(2).trigger('change');
		}
		calculatePrice();

	}

	$('#select_customer_id, select[name=merchandise_type_id],select[name=booking_type],select[name=mailing_mode_id],select[name=to_location_id]').on('change', function(){
		calculatePrice();
	})
	// $('input[name=weight]').on('change', function($event){
	// 	alert(1);
		
	// 	console.log()
	// })
	function calculatePrice(){
		var chargeableWeight = $('input[name=weight]').val();
		var customer = $('#select_customer_id').val();
		var toBranchId = $('#select_to_branch_id').val();
		var branchId = $('#select_branch_id').val();
		var locationId = $('select[name=to_location_id]').val();
		var mailing_mode_id = $('select[name=mailing_mode_id]').val();
		var merchandise_type_id = $('select[name=merchandise_type_id]').val();
		var booking_type = $('select[name=booking_type]').val();
		var homeDeliveryRate = $('#home_delivery_charge').val();

		// console.log('chargeable weight', chargeableWeight);
		// console.log('customer', customer);
		$.ajax({
			url: BASE_URL+'/booking/calculate-shipping-amount',
			data: {
				customer: customer,
				weight: chargeableWeight,
				'to_branch_id': toBranchId,
				'mailing_mode_id': mailing_mode_id,
				'merchandise_type_id': merchandise_type_id,
				'booking_type': booking_type,
				'location_id': locationId,

			},
			dataType: 'json',
			type: 'get',
			success: function(response){
				// console.log(response)
				if(response){
					// var actual_rate = parseFloat(response.amount) + parseFloat(response.delivery_rate);
					var actual_rate = parseFloat(response.amount);
					$('input[name=delivery_rate]').val(response.delivery_rate);
					$('input[name=amount]').val(response.amount);
					baseAmount = response.amount;
					adjustDeliveryRate();
					// $('input[name=amount]').val(actual_rate);
					
				}
			}

		})
		recalculateHomeDeliver();
	}
	$('input[name=delivery_rate],input[name=home_delivery],input[name=cash_handling_charge],input[name=other_charge]').on('keyup', function(){
		// alert(1);
		adjustDeliveryRate();
	})
	$('input[name=delivery_rate],input[name=amount],input[name=home_delivery],input[name=cash_handling_charge],input[name=other_charge]').on('change', function(){
		adjustDeliveryRate();
	})
	$('input[name=amount]').on('keyup', function(){
		baseAmount = $('input[name=amount]').val();
		adjustDeliveryRate();
	})
	function replaceTotal(){
		var deliveryRate = $('input[name=delivery_rate]').val();
		var basicAmount = $('input[name=amount]').val();
		var homeDeliveryRate = $('input[name=home_delivery_charge]').val();
		var cashHandlingCharge = $('input[name=cash_handling_charge]').val();
		var other_charge = $('input[name=other_charge]').val();
		$('#total_booking_amount').html('NPR. '+ (parseFloat(deliveryRate) + parseInt(basicAmount) + parseFloat(homeDeliveryRate) + parseFloat(cashHandlingCharge) + parseFloat(other_charge)));
	}
	// $('input[name=amount]').on('keyup', function(){
	// 	$('#total_booking_amount').html('NPR. '+ $(this).val());

	// })
	function adjustDeliveryRate(){
		var delivery_rate = $('input[name=delivery_rate]').val();
		var input = baseAmount;
		// alert(baseAmount);
		var actual_rate = parseFloat(delivery_rate) + parseFloat(input);
		console.log('delivery_rate', parseFloat(delivery_rate));
		console.log('input rate', parseFloat(input));
		// $('input[name=amount]').val(actual_rate);
		$('#home_delivery_amount').html('NPR. '+ delivery_rate);
		$('#gross_booking_amount').html('NPR. '+ input);
		replaceTotal();
		


	}
	$('#booking_destination').on('change', function(){
		// alert(1);
		var selected = $(this).find('option:selected');
		$('#bookingConsigneeAddress').val($(selected).html());
	});
	
	$('#paidSwitch').on('switchChange.bootstrapSwitch', function(e) {
		if(e.target.checked == true){
			$('.form-element-amount').find('div').css('display', 'block');
			$('.form-element-payment_date').find('div:first').css('display', 'block');
			$('.form-element-narration').find('div').css('display', 'block');
		}else{
			$('.form-element-amount').find('div').css('display', 'none');
			$('.form-element-payment_date').find('div').css('display', 'none');
			$('.form-element-narration').find('div').css('display', 'none');
		}
	    
	});

	$('#can_cod_switch').on('switchChange.bootstrapSwitch', function(e) {
		if(e.target.checked == true){
			// $('.form-element-max_cod_limit').find('div').css('display', 'block');
			$('.form-element-max_cod_item').find('div:first').css('display', 'block');
			$('.form-element-charge_per_cash_handle').find('div').css('display', 'block');
		}else{
			// $('.form-element-max_cod_limit').find('div').css('display', 'none');
			$('.form-element-max_cod_item').find('div').css('display', 'none');
			$('.form-element-charge_per_cash_handle').find('div').css('display', 'none');
		}
	    
	});
	$('#can_qr_switch').on('switchChange.bootstrapSwitch', function(e) {
		if(e.target.checked == true){
			$('.form-element-charge_per_qrod').find('div').css('display', 'block');
		}else{
			$('.form-element-charge_per_qrod').find('div').css('display', 'none');
		}
	    
	});
	// alert();
	if($('#isExternalLink').is(":checked") == true){
		$('.form-element-link').find('div').css('display', 'block');
		$('.form-element-page_id').find('div').css('display', 'none');
	}else{
		$('.form-element-page_id').find('div').css('display', 'block');
		$('.form-element-link').find('div').css('display', 'none');
	}
	$('#isExternalLink').on('switchChange.bootstrapSwitch', function(e) {
		if(e.target.checked == true){
			$('.form-element-link').find('div').css('display', 'block');
			$('.form-element-page_id').find('div').css('display', 'none');
			
		}else{
			$('.form-element-page_id').find('div').css('display', 'block');
			$('.form-element-link').find('div').css('display', 'none');

			
		}

	});

	$('#hasVat').on('switchChange.bootstrapSwitch', function(e) {
		if(e.target.checked == true){
			$('.form-element-vat_number').find('div').css('display', 'block');
			
		}else{
			$('.form-element-vat_number').find('div').css('display', 'none');
			
		}
	    
	});

	var paymentMode = $('select[name=payment_mode]').val();
	if(paymentMode == 'cod'){
		$('#cod_amount').removeAttr('disabled');
	}
	// alert(paymentMode); 
	// $('select[name=payment_mode]').on('change', function(){
	$('#booking_payment_mode').on('change', function(){
		if($(this).val() == 'credit'){
			$('input[name=amount]').removeAttr('min');
			
		}else{
			$('input[name=amount]').attr({
				min: 1
			});

		}
		if($(this).val() == 'cod'){
			$('#cod_amount').removeAttr('disabled');
		}else{
			$('#cod_amount').attr('disabled', 'disabled');

		}

	})
	$('select[name=merchandise_type_id]').on('change', function(){
		var weight = 0.5;
		if($(this).val() == 2){
			weight = 1;
		}
		$('input[name=actual_weight], input[name=weight]').val(weight);
	});

})

$('#kt_aside').hover(function(e){
		
		$('body').removeClass('aside-minimize');
	}, function(){

		$('body').addClass('aside-minimize');
	})

$('#booking_destination, #booking_payment_mode, #booking_type_selector').on('change', function(e){
	// removeCodNotice()
	// alert('here');
	var selectedDestination = $('#booking_destination').val();
	var paymentMode = $('select[name=payment_mode]').val();
	var cod_amount = $('#cod_amount').val();
	var bookingType = $('#booking_type_selector').val();
	var customer_id = $('#select_customer_id').val();
	removeCodNotice();
	if(paymentMode == 'cod'){

		checkCodAmount(paymentMode, selectedDestination, cod_amount, customer_id);
		return;
	}else if(bookingType == 'home_delivery'){
		getHomeDeliveryRate(selectedDestination);
	}else{
		// Reset the Home Delivery Rate if paymentMode is not cod or booking_type is not home delivery
		homeDeliverPerKg = 0;
		$('#home_delivery_charge').val(homeDeliverPerKg);

	}
});


function onDuplicateNdox(){
	var merchandiseType = $('select[name=merchandise_type_id]').val();
	if(merchandiseType == 2){
		$('input[name=actual_weight], input[name=weight]').val('');

	}
}
	
$('#cod_amount').on('keyup', function(e){
	var selectedDestination = $('#booking_destination').val();
	var paymentMode = $('select[name=payment_mode]').val();
	var cod_amount = $('#cod_amount').val();
	var customer_id = $('#select_customer_id').val();

	removeCodNotice();
	checkCodAmount(paymentMode, selectedDestination, cod_amount, customer_id);
	
});
var currentRequest = null;
var homeDeliverPerKg = 0;
var branchCashHandlingCharge = 0;
function checkCodAmount(paymentMode, selectedDestination, codAmount, customerId)  {
	if(paymentMode != 'cod'){
		$('#cod_amount').removeAttr('required');

		return false;
	}else{
		$('#cod_amount').attr('required', 'required');
	}
	
	if(paymentMode == 'cod' && selectedDestination && codAmount){
		submitPrevented = true;
		currentRequest = $.ajax({
			url: BASE_URL+'/branch/checkCanAcceptCod',
			data: {
				payment_mode: paymentMode,
				selected_destination: selectedDestination,
				cod_amount: codAmount,
				customer_id: customerId
			},
			type: 'get',
			datatype: 'json',
			beforeSend : function()    {          
                $('#loading-display').remove();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
				$('#cod_amount').after(`<span class="text-primary" id="loading-display">Loading</span>`);
                
            },
			success: function(response){
				$('#loading-display').remove();
				var branches = response.branch;
				disabledForm = true;
				removeCodNotice();
				if(branches.length > 0){

					branches.map((item) => {
						if(item.allowedCod == false){
							var message = item.message;
							var displayMessage = '';
							if(message){
								displayMessage = message;
							}
							// let audio = new Audio('/assets/media/sounds/err.mp3');					
							// audio.play();
							$('#baseForm').before(`<div class="alert alert-danger cod-notice" role="alert">Branch ${item.name} cannot accept this booking.<br /><p>${displayMessage}</p></div>`);

							$('#cod_amount').after(`<span class="text-danger" id="loading-display">Error</span>`);
						}else{
							submitPrevented = false;
							$('#baseForm').before(`<div class="alert alert-success cod-notice" role="alert">COD can be Received by Branch ${item.name} </div>`);
							// $('#home_delivery_charge').val();
							homeDeliverPerKg = item.delivery_rate;
							branchCashHandlingCharge = item.cash_handling_charge;
							recalculateHomeDeliver();
						}
					})
				}else{
					
					$('#baseForm').before(`<div class="alert alert-danger cod-notice" role="alert">The selected COD cannot be accepted by any branch</div>`);
					$('#cod_amount').after(`<span class="text-danger" id="loading-display">Error</span>`);
				}
			}
		})
	}

}
function getHomeDeliveryRate(selectedDestination){
	if(selectedDestination == null){
		return;
	}
	// branch/find/home-delivery-rate
	
	submitPrevented = true;
		currentRequest = $.ajax({
			url: BASE_URL+'/branch/find/home-delivery-rate',
			data: {
				selected_destination: selectedDestination,
			},
			type: 'get',
			datatype: 'json',
			beforeSend : function()    {          
                $('#loading-display').remove();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
				// $('#cod_amount').after(`<span class="text-primary" id="loading-display">Loading</span>`);
                
            },
			success: function(response){
				$('#loading-display').remove();
				var branches = response.branch;
				disabledForm = true;
				removeCodNotice();
				if(branches.length > 0){
					branches.map((item) => {
						submitPrevented = false;
						$('#baseForm').before(`<div class="alert alert-success cod-notice" role="alert">Item can be Received by Branch ${item.name} </div>`);
						homeDeliverPerKg = item.delivery_rate;
						recalculateHomeDeliver();
					})
				}else{
					$('#baseForm').before(`<div class="alert alert-danger cod-notice" role="alert">Booking cannot be accepted by any branch.</div>`);
				}
			}
		})
	// homeDeliverPerKg = item.delivery_rate;
	// recalculateHomeDeliver();
}
function removeCodNotice(){
	// alert(1);
	$('.cod-notice').remove();
}
var submitPrevented = false;
$(document).on('keypress', '#baseForm input', function(event){
	if(event.keyCode == 13){
		event.preventDefault();
		// return false;
	}

});
$('#baseForm').on('submit', function(e){
	if(submitPrevented == true){

		e.preventDefault();
		alert('Form Submission blocked');
		$(this).prop('disabled', false);
	}else{
		$(this).find('#primary-form-submit').attr('disabled', 'disabled').html('Processing..');

	}
})
function recalculateHomeDeliver(){
	var quantity = $('input[name=quantity]').val();
	var cv = $('input[name=volumetric_weight]').val();
	var aw = $('input[name=actual_weight]').val();
	var paymentMode = $('select[name=payment_mode]').val();
	var bookingType = $('select[name=booking_type]').val();
	// var chargeableWeight = ((cv > aw )? cv : aw);
	var chargeableWeight = $('input[name=weight]').val() > 1 ? $('input[name=weight]').val(): 1 ;


	// if(paymentMode != 'cod' || bookingType != 'home_delivery'){
	// 	// alert(bookingType);
	// 	return;
	// }
	// if(bookingType == 'home_delivery'){

	// alert(chargeableWeight);
	// }
	var fDCharge = chargeableWeight * quantity * homeDeliverPerKg; 
	$('#home_delivery_charge').val(fDCharge);
	$('input[name=cash_handling_charge]').val(branchCashHandlingCharge);
}


// $('#manifest_receiving_branch').on('')
