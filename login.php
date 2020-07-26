<html>
    <head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		$(".toggle").click(function(){

$(this).children('i').toggleClass('fa-pencil');

$(".form").animate({
  height: "toggle",
  'padding-top': 'toggle',
  'padding-bottom': 'toggle',
  opacity: "toggle"
});

});

});
</script>
    </head>
    <body>
    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Local Event Ticket</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Digital Tree</a></span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
    <button><a href="index.php">Login</a></button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form>
      <input type="text" placeholder="Username"/>
	  <input type="password" placeholder="Password"/>
	  <input type="password" placeholder="Confirm Password"/>
      <input type="email" placeholder="Email Address"/>
	  <input type="tel" placeholder="Phone Number"/>
	  <textarea placeholder="Address"></textarea>
     <button><a href="index.php"> Register </a></button>
    </form>
  </div>
  <div class="cta"><a href="password_reset.php">Forgot your password?</a></div>
</div>
    </body>
</html>