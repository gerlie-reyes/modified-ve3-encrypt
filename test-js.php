<?php
$nonceValue = 'nonce_value';// use nonce that generated while using OAuth.

$readableString = 'This is a wild TEXT';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    	<div class="resultPlaceholder"></div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="crypto-js.js"></script><!-- https://github.com/brix/crypto-js/releases crypto-js.js can be download from here -->
        <script src="Encryption.js"></script>
        <script>
            var readableString = '<?php echo $readableString; ?>';
            var nonceValue = '<?php echo $nonceValue; ?>';

            // on page loaded.
            jQuery(document).ready(function($) {
                let encryption = new Encryption();
                var encrypted = encryption.encrypt(readableString, nonceValue);
        	
                $('.resultPlaceholder').html('readable string: '+readableString+'<br><br>');
                $('.resultPlaceholder').append(encrypted+'<br>');
            });
        </script>
    </body>
</html>