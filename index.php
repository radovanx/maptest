<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       
       
        
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
