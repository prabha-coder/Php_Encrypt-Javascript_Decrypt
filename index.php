<!DOCTYPE html>
<html>
<body>

<?php
$encrypt_val=base64_encode("value");
echo $encrypt_val; //Output dmFsdWU=
?> 
<script>
var dec = window.atob('dmFsdWU=');
console.log(dec); //Output "value"
</script>
</body>
</html>
