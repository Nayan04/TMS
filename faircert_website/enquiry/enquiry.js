//validation using JS
function addenquiry(){
// alert()
                var name=$("#name").val();
				var contact=$("#contact").val();
				var email=$("#email").val();
				var city=$("#city").val();
				var state=$("#state").val();
				var informed_from=$("#informed_from").val();
				var enquiry_for=$("#enquiry_for").val();
				
				var re=validation();
				if (re==true){
						var datastring1='name='+ name +'&contact='+ contact +'&email='+ email +'&city='+ city +'&state='+ state +'&informed_from='+ informed_from +'&enquiry_for='+ enquiry_for ;
						
						//alert(datastring1);
						
						
						$.post("addenquiry.php", datastring1).done(function( data ) {
						//alert(data);
						document.location="enquiry.php";	
						}); 
					
					}
}
function validation(){
	var name = $('#name').val();
	var contact=$('#contact').val();
	var email=$('#email').val();
	var city=$('#city').val();
	var state=$('#state').val();
	var informed_from=$('#informed_from').val();
	var enquiry_for=$('#enquiry_for').val();
	
	
	if(name==null || name.trim()=="" )
		{
			alert("Enter Name");
			$('#name').focus();
			return false;
		}
	else if (contact==null || contact.trim()=="" )
	{
			alert("Enter contact no.");
			$('#contact').focus();
			return false;
		}
	else if(email==null || email.trim()=="" )
		{
			alert("Enter email");
			$('#email').focus();
			return false;
		}
	else if(city==null || city.trim()=="" )
		{
			alert("Enter city");
			$('#city').focus();
			return false;
		}
	else if(state==null || state.trim()=="" )
		{
			alert("Enter State");
			$('#state').focus();
			return false;
		}
	else if(informed_from==null || informed_from.trim()=="" )
		{
			alert("Enter information");
			$('#informed_from').focus();
			return false;
		}
	else if(enquiry_for==null || enquiry_for.trim()=="" )
		{
			alert("Enter Enquiry");
			$('#enquiry_for').focus();
			return false;
		}
		else{
			return true;
			}
	//
	}