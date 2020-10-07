<?php
require 'Encryption.php';

$nonceValue = 'nonce_value';// use nonce that generated while using OAuth.

$encryptedString = 'eyJjaXBoZXJ0ZXh0IjoienMzYVNYbEl6SVUrUWpYSC8wUkRjcGhaTkVGM21SWlppd0paSC9vMW9HST0iLCJpdiI6IjkzZmYwZWY3ZTlkODkxMjUyYTJjZjA3MDExY2UxNjNkIiwic2FsdCI6IjZjZTAzOTk4NzI0ZmI0ZGI1YzQwZjdjN2ZmNDcyMzkzMGVmMzk3YjkyNDVkY2QzNTQzY2Y1OTQ5MmU0ZTBmZGFkY2UxM2IyNzU5NzBjNGJkZDc0YzA0MjUxZTFmNDQ2MzAzOTg3YjE5MjdhZmZkMzYwOGI0MjdjZjUxNzA5ODAyODg1NWQ0NDFlY2QzNzEwZGY2Y2Q4MTRhNDM5YTUyOGI3MGI3YmIxY2MzNzMyM2JmNjdkZDZlMmY1MWQ2YTNkZDE4OTZiNjBiZjkwYTdmZDU5YmJiNTQ4N2RjMTAwMTEwOTliZWVmMzQ0ZmE1NWMwOTMxNGNmOWYxNDQ4N2NjN2JiNjI5OTZmYWE1YzkzYzJmMjI2NTFhNjhjNDEyYzYyNmRiY2Y2ZWY2MWU0ZDk4YTFjMWZiZjk1Nzk4ZDNhZTcxNTAwOGM2OGVmMDM2ODg3OTg2M2YyZmRmYTFmYmE1YWFlZjI4NzQ5NjBhZjAwMWNjY2JjODk0YTExNjU2OTYwYzBjZTkxMGYxMGM3NjQ4ZjRkMDkwZWYzNDEyYTQ1ZWRkM2NmMjc3MWJiNzJmYjRmOGUxZDA4NTkxYmQ1MGNhNWFjNDEwZmRkOWVjNWM1ZDYwNDdiOWUzZjc2NDBjMTVlODlmYjBkODJhOGVhNDVlZWFmYTNmOWZlYzEyZjA3YzkzIiwiaXRlcmF0aW9ucyI6OTk5fQ==';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
        $Encryption = new Encryption();
        try {
          $decrypted = $Encryption->decrypt($encryptedString, $nonceValue);
          echo '<strong>Decrypted: </strong>' . $decrypted;
        } catch (\Throwable $th) {
          die($th);
        }
        
        ?>
	</body>
</html>