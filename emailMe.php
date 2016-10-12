<style type="text/css">
</style>
<?php
if(isset($_POST["button"])){
// Checking For Blank Fields..
    if($_POST["name"]==""||$_POST["subject"]==""||$_POST["email"]==""||$_POST["message"]==""){
        echo "Fill All Fields..";
    }else{
// Check if the "Sender's Email" input field is filled out
        $email=$_POST['email'];
// Sanitize E-mail Address
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
			?>
            <span style="font-size: 12pt; font-family: Georgia, Times New Roman, Times , serif">
			<?php echo "Invalid Sender's Email";?>
            </span>
            <?php
        }
        else{
            $message = $_POST['message'];
            $headers = 'From:'. $email . "\r\n"; // Sender's Email
            $headers = 'Subject' .$email . "\r\n";
            $headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
// Send Mail By PHP Mail Function
            mail("adam-o-connor@hotmail.com", $message, $headers , $headers);
			?>
            <span style="font-size: 12pt; font-family: Georgia, Times New Roman, Times 				, serif">
            <?php 
			echo "Your mail has been sent successfuly ! Thank you for your feedback";		?>
            </span>
            <?php
        }
    }
}
?>