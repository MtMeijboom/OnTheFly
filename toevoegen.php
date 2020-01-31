<!DOCTYPE html>  
<html>  
<head>  
    <title>Vliegtuigen Toevoegen</title> 
	<link rel="stylesheet" href="Eerste les.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"/>
</head>  
<body>  
<div class="wrapper">
  <nav class="tabs">
    <div class="selector"></div>
    <a href="eerste les.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a class="active" href="toevoegen.php"><class="active"><i class="fas fa-hand-rock"></i>Toevoegen</a>
  </nav>
</div>
<script>
	var tabs = $('.tabs');
	var selector = $('.tabs').find('a').length;
	//var selector = $(".tabs").find(".selector");
	var activeItem = tabs.find('.active');
	var activeWidth = activeItem.innerWidth();
	$(".selector").css({
	  "left": activeItem.position.left + "px", 
	  "width": activeWidth + "px"
	});

	$(".tabs").on("click","a",function(e){
	  e.preventDefault();
	  $('.tabs a').removeClass("active");
	  $(this).addClass('active');
	  var activeWidth = $(this).innerWidth();
	  var itemPos = $(this).position();
	  $(".selector").css({
		"left":itemPos.left + "px", 
		"width": activeWidth + "px"
	  });
	});
</script>
<h1>Voer hier vliegtuigen in</h1>  
<p><em>Welkom</em></p>  
</body>  
</html>  