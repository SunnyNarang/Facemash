<html>

    
    
    <head>
        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Pacifico|Righteous" rel="stylesheet">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
 <script src='myscript.js'></script>
 <script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="497563783013-hrfidv6l3td5pq13g82d344dc9be7522.apps.googleusercontent.com">
      
      <script>
      
      function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  localStorage.name = profile.getName();
  localStorage.image = profile.getImageUrl();
  localStorage.emmail = profile.getEmail();
       document.location.href="index.html"; 
        
      }

      </script>
      
        
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
        
      <style>
      
#square {
    background-color:#49c3b6;
    clear:both;
    height:100px;
    width:102%;
}
#head{
position: fixed;
top:0;
width: 100%;
box-shadow:0px 4px 10px #333;
z-index: 10;

}
#body{
   background: url(face_bk.jpg);
    background-size: 100% 100%;
    background-repeat: no-repeat;
    
}
html {
    height: 100%
}
   </style>   
        </head>
        
        
        
        
        <body id="body">
            
            
           
    <center>       
<h1   style="margin-top:200px; font-family: 'Pacifico', cursive; color:#56bc5a;font-size: 60px;">Facemash.</h1>
    
<h1   style="font-family: 'Pacifico',cursive; color: #fff;font-size: 27px;">-Exodia Tech</h1>
  <h1   style=" margin-top:100px;font-family: 'Baloo Bhaina',cursive; color: #fff;font-size: 27px;">Sign in to get started.</h1>

   <div style="margin-top:20px"class="g-signin2" data-onsuccess="onSignIn"></div>

 </center> 
    
    
    
            </body>
    
    
    
    
    
    
    </html>