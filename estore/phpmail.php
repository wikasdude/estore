<?PHP
phpinfo();
$sender = 'kuki.sharma786@gmail.com';
$recipient = 'wikasdude@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

//ini_set("SMTP","smtp.gmail.com" );
ini_set("SMTP","tls://smtp.gmail.com");
ini_set("smtp_port","587");

ini_set('sendmail_from', 'kuki.sharma786@gmail.com');

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>