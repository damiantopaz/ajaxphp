$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		$("#loader").show();
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var city = $('#city').val();
		if(name!="" && email!="" && phone!="" && city!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {name: name,email: email,phone: phone,city: city},
				cache: false,

				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#loader").hide(1000);
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !');
						setTimeout(() => {
						$('#success').hide();
						}, 3000) 						
					}
					else if(dataResult.statusCode==400){alert("Error occured !");}
					
				}
			});
		}
		else{
			alert('Please fill all the field!');
			 $("#butsave").removeAttr("disabled");

		}
	});
});