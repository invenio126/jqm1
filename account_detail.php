<?php
include 'config.php';
if ($_REQUEST[record]) {
    $configOptions = $sugar_config['dbconfig'];
    $db_link = mysql_pconnect($configOptions['db_host_name'], $configOptions['db_user_name'], $configOptions['db_password']);
    mysql_select_db($configOptions['db_name'], $db_link) or sugar_die("Unable to select database: " . mysql_error());
    $result = mysql_query("select * from accounts where id='" . $_REQUEST[record] . "'", $db_link);
    $row = mysql_fetch_assoc($result);
//    print_r($row);
//    exit;
}
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
                <h1>Account Details</h1>
                <a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse"  >Home</a>
            </div><!-- /header -->
            <div data-role="content">

                <form action="account_edit.php" method="post">
                    <div data-role="fieldcontain">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" data-mini="true" readonly value="<?php echo $row['name']; ?>" />
                    </div>
                    <div data-role="fieldcontain">	

                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" id="phone" data-mini="true" readonly value="<?php echo $row['phone_office']; ?>"/>
                    </div>
                    <div data-role="fieldcontain">	
                        <label for="website">Web Site:</label>
                        <input type="text" name="website" id="website" readonly  value="<?php echo $row['website']; ?>"/>
                    </div>
                    <div data-role="fieldcontain">	
                        <label for="account_type">Account Type:</label>
                        <input type="text" name="account_type" id="account_type" readonly  value="<?php echo $row['account_type']; ?>"/>	
                    </div>
                    <div data-role="fieldcontain">	
                        <label for="ownership">Ownership:</label>
                        <input type="text" name="ownership" id="ownership" readonly  value="<?php echo $row['ownership']; ?>"/>	
                    </div>
                    <div data-role="fieldcontain">		
                        <label for="listing">Listing:</label>
                       <input type="text" name="listing" id="listing" readonly  value=" <?php echo $row['listing']; ?>"/>	
                          </div>
                    <div data-role="fieldcontain">	
                        <label for="textarea" >Billing Address:</label>
                        <textarea name="textarea" readonly id="textarea"><?php echo $row[billing_address_street] ?>
                        <?php echo $row[billing_address_postalcode] ?></textarea>

                    </div>
                </form>

            </div>


            <div data-role="footer" data-id="foo1" data-position="fixed">
                <div data-role="navbar">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="account_add.php">Add Account</a></li>
                        <li><a href="contact_add.php">Add Contact</a></li>
                        <li><a href="account_list.php">Accounts</a></li>
                        <li><a href="contact_list.php">Contacts</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>


    </body>
</html>