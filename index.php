<!DOCTYPE html> 
<html> 
<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script>
	$(document).bind("mobileinit", function(){
	  $.mobile.pageLoadErrorMessage = 'Yikes, we broke the internet!';
          $.mobile.defaultPageTransition = 'flow';
	});
	</script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js">	</script>
	
	<script>
	$( document ).ready(function() {
	
    $( "a" ).click(function( event ) {
        //alert( "As you can see, the link no longer took you to jquery.com" );
        event.preventDefault();
		//alert('hey you'+event.type);
    });
});
	</script>
</head> 
<body> 

<div data-role="page" id="one" data-theme="b" data-title="Page Foo">

	<div data-role="header">
		<h1>My First Application</h1>
	</div><!-- /header -->

	<div data-role="content">	
		
				<p><a href="account_list.php" data-role="button">Accounts</a></p>
				<p><a href="contact_list.php" data-role="button">Contacts</a></p>
				
		
			
<!--	<form>
		<label for="slider-0">Input slider:</label>
		<input type="range" name="slider" id="slider-0" value="25" min="0" max="100"  />
	</form>	-->

		<p><a href="#two" data-role="button">Show page "two"</a></p>
	</div><!-- /content -->
        
        <div data-role="footer" data-id="foo1" data-position="fixed">
	<div data-role="navbar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="account_add.php">Add Account</a></li>
			<li><a href="contact_add.php">Add Contact</a></li>
			
		</ul>
	</div><!-- /navbar -->
</div><!-- /footer -->
</div><!-- /page -->

<!-- Start of second page: #two -->
<div data-role="page" id="account" data-theme="a">

	<div data-role="header">
		<h1>Account List</h1>
                <a href="#one" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Two</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to page "one"</a></p>	
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page two -->


<div data-role="page" id="contact" data-theme="a">
    <div data-role="header">
		<h1>Contact List</h1>
                <a href="#one" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
	</div><!-- /header -->
    </div>


</body>
</html>