<?php 

//if(!$_POST) exit;

function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

if(isset($_POST["submit_user"])){


$firstname=$_POST["firstname"];

$lastname=$_POST["lastname"];

$email=$_POST["email"];

$phone=$_POST["phone"];

$password=$_POST["password"];

$confirmPassword=$_POST["confirmPassword"];
    
$age=$_POST["age"];
    
$income=$_POST["income"];
    
$grow=$_POST["grow"];

if(isEmail($email)){




$address = "support@dwellar.com";

$e_subject = 'DWELLAR USER REGISTRATION';

$e_body = "First Name => $firstname" . PHP_EOL . "Last Name => $lastname" . PHP_EOL . "email => $email" . PHP_EOL . "phone => $phone" . PHP_EOL . "password => $password" . PHP_EOL . "confirmPassword => $confirmPassword" . PHP_EOL . "age => $age" . PHP_EOL . "income => $income" . PHP_EOL . "grow => $grow" . PHP_EOL .;
 
$msg = wordwrap( $e_body, 100 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;


if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo '<div class="success_message">Delivered Successfully.</div>';
	

} else {

echo '<div class="error_message">Error.</div>';

}

}else{
	echo '<div class="error_message">Invalid E-mail.</div>';

}

}

//submit model form

?>