$(document).ready(function() {
	$(".slideSign").click(function(){
		$(".whole").css({left:"-105%"});
		setTimeout(function(){
			$(".whole").css({left:"-100%"});
		},1000);
	});

	$(".slideLog").click(function(){
		$(".whole").css({left:"5%"});
		setTimeout(function(){
			$(".whole").css({left:"0%"});
		},1000);
	});

// 
// 	$(".loginBtn").click(function(e){
// 		var username = document.getElementById('username').value;
// 		var password = document.getElementById('password').value;
// 		var dataString = "Username=" + username + "&Password=" + password;
// 		console.log(dataString);
// 		e.preventDefault();
//   //  $.ajax({
// 	// 	 url: "http://sayamkanwar.me/studxino/adminpanel/scripts/checkLogin.php",
// 	// 	 data: dataString,
// 	// 	 success: function(res) {
// 	// 		 console.log(res);
// 	// 	 }
// 	//  });
// 	$.post("http://sayamkanwar.me/studxino/adminpanel/scripts/checkLogin.php",
// {
// 	data: dataString
// },
// function(data,status){
// 		alert("Data: " + data + "\nStatus: " + status);
// });
//  	});

});
