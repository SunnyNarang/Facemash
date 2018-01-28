$(document).ready(function (e){
    
    

    
	var delayMillis = 1000;
   var element = document.getElementById('heart1');
element.style.opacity = "0";
element.style.filter  = 'alpha(opacity=90)';
  var element = document.getElementById('heart2');
element.style.opacity = "0";
element.style.filter  = 'alpha(opacity=90)';
$('#upper_card').hide();
$('#loader-two-random').show();
$('#formloader').hide();


   
      function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  localStorage.setItem('name', profile.getName());
  localStorage.setItem('image', profile.getImageUrl());
  localStorage.setItem('email', profile.getEmail());
  
  
  
  
  
  
  
       
        
      }
 $.ajaxSetup({ cache: false });
 	    
 	    
 	    
 	    
 	    $("#big_card1").mouseenter(function () {
           var element = document.getElementById('heart1');
element.style.opacity = "0.5";
element.style.filter  = 'alpha(opacity=90)';
        

        });
        $("#big_card1").mouseleave(function () {
              var element = document.getElementById('heart1');
element.style.opacity = "0";
element.style.filter  = 'alpha(opacity=90)';
        });
 	       
 	    $("#big_card2").mouseenter(function () {
           var element = document.getElementById('heart2');
element.style.opacity = "0.5";
element.style.filter  = 'alpha(opacity=90)';
        });
        $("#big_card2").mouseleave(function () {
              var element = document.getElementById('heart2');
element.style.opacity = "0";
element.style.filter  = 'alpha(opacity=90)';
        });
 	    	    
	    $.ajax({
    
    url: "threetop.php",
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP

			 $('#toplike1').empty();    
			 $('#toplike2').empty();    
			 $('#toplike3').empty();    
			
			
            $('#toplike1').append(json[0].likes);
            $('#toplike2').append(json[1].likes);
            $('#toplike3').append(json[2].likes);
			
             $('#topname1').empty();    
			 $('#topname2').empty();    
			 $('#topname3').empty();    
			
			$('#topname1').append(json[0].name);
            $('#topname2').append(json[1].name);
            $('#topname3').append(json[2].name);
			
            
            
            $("#topimage1").attr("src", json[0].image);
            $("#topimage2").attr("src", json[1].image);
            $("#topimage3").attr("src", json[2].image);
            
            
    }});
 $.ajax({
    
    url: "pick.php",
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP
            $('#name1').empty();
            $('#name2').empty();
            $('#name1').append(json[0].name);
            $('#name2').append(json[1].name);
            
            $('#like1').empty();
            $('#like2').empty();
            $('#like1').append(json[0].likes);
            $('#like2').append(json[1].likes);
    
            $('#seen1').empty();
            $('#seen2').empty();
            $('#seen1').append(json[0].views);
            $('#seen2').append(json[1].views);
            
            
            $("#image1").attr("src", json[0].image);
            $("#image2").attr("src", json[1].image);
			
            localStorage.one= json[0].id;
            localStorage.two= json[1].id;
            
			setTimeout(function() {
  //your code to be executed after 1 second
  $('#upper_card').show();
			$('#loader-two-random').hide();
}, delayMillis);
			
    }
});
 
 $('#big_card1').click(function(){
     
     $('#upper_card').hide();
$('#loader-two-random').show();
$('#loader-two-random').fadeIn(3000);
         var id = localStorage.one;
	$.post('pick.php',{id:id},
			function(json){ 
            $('#name1').empty();
            $('#name2').empty();
            $('#name1').append(json[0].name);
            $('#name2').append(json[1].name);
            
            $('#like1').empty();
            $('#like2').empty();
            $('#like1').append(json[0].likes);
            $('#like2').append(json[1].likes);
    
            $('#seen1').empty();
            $('#seen2').empty();
            $('#seen1').append(json[0].views);
            $('#seen2').append(json[1].views);
            
            
            $("#image1").attr("src", json[0].image);
            $("#image2").attr("src", json[1].image);
			
			localStorage.one= json[0].id;
            localStorage.two= json[1].id;
			
			setTimeout(function() {
  //your code to be executed after 1 second

			    
			$('#upper_card').show();
			$('#loader-two-random').hide();

			    
			}, delayMillis);
			
	    }, "json");
	    
	    
	    
	    
	    
	    
	    	    
	    $.ajax({
    
    url: "threetop.php",
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP

			 $('#toplike1').empty();    
			 $('#toplike2').empty();    
			 $('#toplike3').empty();    
			
			
            $('#toplike1').append(json[0].likes);
            $('#toplike2').append(json[1].likes);
            $('#toplike3').append(json[2].likes);
			
             $('#topname1').empty();    
			 $('#topname2').empty();    
			 $('#topname3').empty();    
			
			$('#topname1').append(json[0].name);
            $('#topname2').append(json[1].name);
            $('#topname3').append(json[2].name);
			
            
            
            $("#topimage1").attr("src", json[0].image);
            $("#topimage2").attr("src", json[1].image);
            $("#topimage3").attr("src", json[2].image);
            
            
    }
});
     
     
 });
 
 
  $('#big_card2').click(function(){
     
     $('#upper_card').hide();
$('#loader-two-random').show();
$('#loader-two-random').fadeIn(3000);
         var id = localStorage.two;
	$.post('pick.php',{id:id},
			function(json){ 
            $('#name1').empty();
            $('#name2').empty();
            $('#name1').append(json[0].name);
            $('#name2').append(json[1].name);
            
            $('#like1').empty();
            $('#like2').empty();
            $('#like1').append(json[0].likes);
            $('#like2').append(json[1].likes);
    
            $('#seen1').empty();
            $('#seen2').empty();
            $('#seen1').append(json[0].views);
            $('#seen2').append(json[1].views);
            
            
            $("#image1").attr("src", json[0].image);
            $("#image2").attr("src", json[1].image);
			
			localStorage.one= json[0].id;
            localStorage.two= json[1].id;
			
					setTimeout(function() {
  //your code to be executed after 1 second

			    
			$('#upper_card').show();
			$('#loader-two-random').hide();

			    
			}, delayMillis);

	    }, "json");
	    
	    $.ajax({
    
    url: "threetop.php",
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP

			 $('#toplike1').empty();    
			 $('#toplike2').empty();    
			 $('#toplike3').empty();    
			
			
            $('#toplike1').append(json[0].likes);
            $('#toplike2').append(json[1].likes);
            $('#toplike3').append(json[2].likes);
			
             $('#topname1').empty();    
			 $('#topname2').empty();    
			 $('#topname3').empty();    
			
			$('#topname1').append(json[0].name);
            $('#topname2').append(json[1].name);
            $('#topname3').append(json[2].name);
			
            
            
            $("#topimage1").attr("src", json[0].image);
            $("#topimage2").attr("src", json[1].image);
            $("#topimage3").attr("src", json[2].image);
            
            
    }
});
     
     
 });
 
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#formloader').show();
$.ajax({
url: "upload.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#formloader').hide();
$("#message").empty();
$("#message").html(data);
}
});
}));
$(function() {
    $('.submit').click(function() {
        $('#registerform').submit();
        return false;
    });
});

 $(window).load(function() {
  // When the page has loaded
  $("body").fadeIn(10000);
});
 
});