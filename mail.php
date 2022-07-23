<?php
if(isset($_POST['esubmit'])){
    $to = "hellotechsantoshji@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = "From : $from";

    mail($to, $subject, $message, $headers);
    
    echo "Mail Send...";
 }
?>

<html>
    <body>
        <from method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Email: <input name="email" type="text" autocomplete="off" /><br /><br />
            Subject: <input name="subject" type="text" /><br /><br />
            Message: <br />
            <textarea name="message" rows="15" cols="40"></textarea><br /><br />
            <input name="esubmit" type="submit">
        </from>
    </body>
</html>    
            