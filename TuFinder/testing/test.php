<?php
$pss=password_hash("321", PASSWORD_DEFAULT);
echo $pss;

echo "<br>";
$ds=password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
echo $ds;


if (password_verify('rasmuslerdorf',$ds)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><span></span></p>
<form id="target" >
  <input type="text" value="Hello there">
  <input type="submit" value="Go">
</form>
<div id="other">
  Trigger the handler
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" > </script>
<script>
//   $("form").submit(function( event ) {
//   if ( $( "input" ).first().val() === "correct" ) {
//     console.log("submitted")
   
//   }
 
  $( "span" ).text( "Not valid!" )
 // event.preventDafault()
//});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" > </script>

</body>
</html>