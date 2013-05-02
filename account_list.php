<?php
include 'config.php';
$configOptions = $sugar_config['dbconfig'];
$db_link=mysql_pconnect($configOptions['db_host_name'],$configOptions['db_user_name'],$configOptions['db_password']);
mysql_select_db($configOptions['db_name'],$db_link) or sugar_die( "Unable to select database: " . mysql_error());
$result = mysql_query('select id,name from accounts order by name',$db_link);

?>
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
          
          $.mobile.listview.prototype.options.filterCallback = function( text, searchValue ) {
            // only show items that *begin* with the search string
            return text.toLowerCase().substring( 0, searchValue.length ) !== searchValue;
            };
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

<div data-role="page" id="account" data-theme="b">

	<div data-role="header">
		<h1>Account List</h1>
                <a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
	</div><!-- /header -->
        <div data-role="content">
            <div >
               
	<ul data-role="listview" data-autodividers="true" data-theme="c" data-divider-theme="b" data-filter="true" >
<?PHP        
            if($result) {
                while($row = mysql_fetch_assoc($result)) {
                      $link="account_detail.php?record=".$row['id'];
?>           
             <li>
                 
                 <a href="<?php echo $link?>" ><?php echo $row['name']?></a>
                 
                 </li>
<?PHP            }
        
    }
    
?>
	</ul>
            </div>
        </div>
	<div data-role="footer" data-id="foo1" data-position="fixed">
	<div data-role="navbar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="account_add.php">Add Account</a></li>
			<li><a href="contact_add.php">Add Contact</a></li>
			<li><a href="contact_list.php">Contacts</a></li>
		</ul>
	</div><!-- /navbar -->
</div>

   
    </body>
</html>