<!DOCTYPE html> 
<html> 
	<head>
  <meta charset="UTF-8">	
	<title>tester Picker</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="jquery.mobile.structure-1.0.1.css" />
	<link rel="apple-touch-icon" href="images/launch_icon_57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/launch_icon_72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/launch_icon_114.png" />
	<link rel="stylesheet" href="jquery.mobile-1.0.1.css" />
	<link rel="stylesheet" href="custom.css" />
 
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.mobile-1.0.1.min.js"></script>
     
</head> 

<body> 
<div data-role="page" id="home" data-theme="c">

	<div data-role="content">
	<div id="branding">
	<h1>Tester Picker </h1>
	</div>
	<div class="choice_list"> 
	<h1>Category</h1>
	
        
       
        
        <script> 
            
         $.ajax({
         url: '',
         type: 'GET',
         dataType: 'json',
         
         error : function (){ document.title='error'; }, 
         
         success: function (data) {
         
         alert(data);
         }
         }
         );      
 
        </script>
       
        
        
        
	<ul data-role="listview" data-inset="true" >
	
        <li><a href="choose_town.html" data-transition="slidedown"> <img src="sushis.jpg"/> <h3> Some Sushis</h3></a></li>
	<li><a href="choose_town.html"  data-transition="slidedown"> <img src="pizza.jpg"/> <h3> A Pizza </h3></a></li>
	<li><a href="choose_town.html"  data-transition="slidedown"> <img src="kebap.jpg"/> <h3> A Kebap</h3></a></li>
	<li><a href="choose_town.html"  data-transition="slidedown"> <img src="burger.jpg"/> <h3> A Burger</h3></a></li>
	<li><a href="choose_town.html"  data-transition="slidedown"> <img src="nems.jpg"/> <h3> Some Nems </h3></a></li>
	<li><a href="choose_town.html"  data-transition="slidedown"> <img src="tradi.jpg"/> <h3> Something more traditional</h3></a></li>	
	</ul>	
	
	</div>
	</div>

</div><!-- /page -->
</body>
</html>