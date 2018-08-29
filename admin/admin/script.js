$(document).ready(function(){
	/* $(".delete").click(function(){
		var tr = $(this).closest('tr'),
		del_id = $(this).attr('id');//del_id
		  $.ajax({
			url: "deleteUser.php",
			method:"post",
			dataType:"text",
			success:function(result){
				if($result == true ){
					tr.css("background-color" , "tomato");
					tr.fadeOut(500, function(){
						$(this).remove();
					});
				}else{
					//do nothing
				}
			}
		}); 
		
		
	}); */
	
	init();
	
	
});



	function init() {

	$(document).on('click','.menu-list a',function(e){
		var url = $(this).attr( "href" )
		e.preventDefault();
		$("#loading").fadeIn();
		$( "#main_container" ).load( url + " #main_container" );
		setTimeout(function() {
			$("#loading").fadeOut();

		}, 2500);
		window.history.pushState("object or string", "Title", url);

	});

	}
	//$('#message').html("<div class='alert alert-danger'>"+message+"</div>");
function successDel(message){
	$('#modalDel').show();
	$('#btnDel').click(function(){
		$('#modalDel').hide();
	})
}

function successSub(message){
	$('#modalSub').show();
	$('#btnSub').click(function(){
		$('#modalSub').hide();
	})
}

function failedAdmin(message){
	$('#modalAdmin').show();
	$('#btnAdmin').click(function(){
		$('#modalAdmin').hide();
	})
}


function deleteUser(user_id){
	$.get("phpAjax.php",
		{	
			action:"deleteUser",
			id:user_id
		},
		function(data){
			
			if(data.result == true){
				$('#user_'+user_id).css("background-color" , "#d08888").delay(500).fadeOut(500, function(){
					this.remove() 
					successDel();
				});
			}else{
				failedAdmin();
			}
		},"json");
}


function deleteMessage(message_id){
	$.get("phpAjax.php",
		{	
			action:"deleteMessage",
			id:message_id
		},
		function(data){
			
			if(data.result == true){
				$('#message_'+message_id).css("background-color" , "#d08888").delay(500).fadeOut(500, function(){
					this.remove();
					successDel();
				});
			}else{
				alert('خطا ! ');
			}
		},"json");
}



function deleteOrder(order_id){
	$.get("phpAjax.php",
		{	
			action:"deleteOrder",
			id:order_id
		},
		function(data){
			
			if(data.result == true){
				$('#order_'+order_id).css("background-color" , "#d08888").delay(500).fadeOut(500, function(){
					this.remove();
					successDel();
				});
			}else{
				alert('خطا ! ');
			}
		},"json");
}



function deleteWash(wash_id){
	$.get("phpAjax.php",
		{	
			action:"deleteWash",
			id:wash_id
		},
		function(data){
			
			if(data.result == true){
				$('#wash_'+wash_id).css("background-color" , "#d08888").delay(500).fadeOut(500, function(){
					this.remove();
					successDel();
				});
			}else{
				alert('خطا ! ');
			}
		},"json");
}



function deleteCarpet(carpet_id){
	$.get("phpAjax.php",
		{	
			action:"deleteCarpet",
			id:carpet_id
		},
		function(data){
			
			if(data.result == true){
				$('#carpet_'+carpet_id).css("background-color" , "#d08888").delay(500).fadeOut(500, function(){
					this.remove();
					successDel();
				});
			}else{
				//alert('خطا ! ');
			}
		},"json");
}



function deleteService(service_id){
	$.get("phpAjax.php",
		{	
			action:"deleteService",
			id:service_id
		},
		function(data){
			
			if(data.result == true){
				$('#service_'+service_id).css("background-color" , "#d08888").delay(500).fadeOut(500, function(){
					this.remove();
					successDel();
				});
			}else{
				//alert('خطا ! ');
			}
		},"json");
}



$(function () {
	$('form').on('submit', function (e) {

	  e.preventDefault();

	  $.ajax({
		type: 'post',
		url: 'phpAjax.php',
		dataType: 'json',
		data: $('form').serialize(),
		success: function (data) {
			
			if(data.result == true){
				successSub();
			}else{
				alert('خطا ! ');
			}
			
		}
	  });

	});

});

 
 
 
 
 
 
 
 
 
 
	  
/* function addWash(){
	$.get("phpAjax.php",
		{	
			action:"addWash"
		},
		function(data){
			
			if(data.result == true){
				data: $('form').serialize();
				success: function () {
					alert('form was submitted');
				}
			}else{
				alert('خطا ! ');
			}
		},"json");
}  */



