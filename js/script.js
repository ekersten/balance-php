/* Author: Eric Kersten */

var page = 1;

$('.datepicker').datepicker();

$('#form_buscador button[type=submit]').on('click',function(e){
	e.preventDefault();
	page = 1;
	$('#form_buscador').trigger('submit');
});

$('#form_buscador').on('submit',function(e){
	e.preventDefault();
	$('#entries_loader').show();
	$('#entries_holder').hide();

	
	var form_data = $(this).serialize() + '&page=' + page;
	$.ajax({
		url: K.base_url + 'main/entries',
		type: 'post',
		dataType: 'html',
		data: form_data,
		success: function(data, textStatus, jqXHR){
			$('#entries_loader').hide();
			$('#entries_holder').show().html(data);

			// activate tooltips
			$('a[rel=tooltip]').tooltip();
			realoadAccounts();
		}
	});

	return false;
}).trigger('submit');

function realoadAccounts(){
	$('#accounts_loader').show();
	$('#accounts_holder').hide();

	
	var form_data = $(this).serialize() + '&page=' + page;
	$.ajax({
		url: K.base_url + 'main/accounts',
		type: 'post',
		dataType: 'html',
		data: form_data,
		success: function(data, textStatus, jqXHR){
			$('#accounts_loader').hide();
			$('#accounts_holder').show().html(data);
		}
	});
}

$(document).on('click', '.pagination a',function(e){
	e.preventDefault();
	page = $(this).attr('href')
	$('#form_buscador').trigger('submit');
});


$(document).on('click', 'a.delete-entry',function(e){
	e.preventDefault();

	var form_data = {id:$(this).attr('href')};
	if(confirm('Eliminar movimiento?')){
		$.ajax({
			url: K.base_url + 'main/delete_entry',
			type: 'post',
			dataType: 'json',
			data: form_data,
			success: function(data, textStatus, jqXHR){
				if(data.status == 'ok'){
					$('#form_buscador').get(0).reset();	
					$('#form_buscador').trigger('submit');
				}else{
					alert('Error!');
				}
			}
		});
	}
	
});

$('#form_operacion button[type=submit]').on('click',function(e){
	e.preventDefault();
	$('#form_operacion').trigger('submit');
});


$('#form_operacion').on('submit',function(e){
	e.preventDefault();

	var form_data = $(this).serialize();

	$.ajax({
		url: K.base_url + 'main/add_entry',
		type: 'post',
		dataType: 'json',
		data: form_data,
		success: function(data, textStatus, jqXHR){
			if(data.status == 'ok'){
				$('#form_buscador').get(0).reset();	
				$('#form_buscador').trigger('submit');
				//$('#form_operacion').get(0).reset();
			}else{
				alert('Error!');
			}
			
		}
	});
});

$('#form_transferencia button[type=submit]').on('click',function(e){
	e.preventDefault();
	$('#form_transferencia').trigger('submit');
});


$('#form_transferencia').on('submit',function(e){
	e.preventDefault();

	var form_data = $(this).serialize();

	$.ajax({
		url: K.base_url + 'main/transferencia',
		type: 'post',
		dataType: 'json',
		data: form_data,
		success: function(data, textStatus, jqXHR){
			if(data.status == 'ok'){
				$('#form_buscador').get(0).reset();	
				$('#form_buscador').trigger('submit');
				$('#form_transferencia').get(0).reset();
			}else{
				alert('Error!');
			}
			
		}
	});
});
