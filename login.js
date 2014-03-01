$(document).ready(function() {
   $('loginButton').click(test);

function test() {
	var email = $("input#email").val();
	var password = $("input#password").val();
	checkLogin(email, password);
}

function checkLogin(email, pass){
	var dataString = "username=" + email + "&password=" + pass; // constructing our param variable that will be send with ajax call
	//var formData = {username:"test@test",password:"test"}; //Array 
	// Ajax Call to check if the username / password are correct

	$.post("checkLogin.php",
		{username:"test@test", password:"test"},
		function(data, textStatus, jqXHR)
		{
			alert(data);
		});
/*
	$.ajax({
		url: "checkLogin.php",
		type: "POST",
		data: dataString,
    	success: function(data, textStatus, jqXHR) {
			if (data == "notFound"){
				alert("LOGIN INCORRECT");
			} else {
				alert("LOGIN SUCCESSFULL!");
			}
		},
    	error: function (jqXHR, textStatus, errorThrown) {
             alert('failure............');
        }

	});*/
}  //end of checkLogin() function
});//end of jQuery code

