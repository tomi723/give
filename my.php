<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to = "oluwatomisinjoy723@gmail.com";
$headers='From:$name<$email>';
mail($to,$subject,$message,$headers);
echo "your message";
}
?>