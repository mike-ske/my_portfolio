<?php 
require 'dbconn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader

require 'vendor/autoload.php';

$save = isset($_POST['send']);

if ($save) {

    $name = trim(htmlspecialchars($_POST['name']) );
    $email = trim(htmlspecialchars($_POST['email']) );

    $item = trim(htmlspecialchars($_POST['select']) );
    $message = trim(htmlspecialchars($_POST['message']) );
    $message = trim($message);
    $message = htmlspecialchars($message);
    $date = date("Y/m/d h:i:s A");
    $date = date("l F, Y", strtotime($date));
    
               
// ============= SUBMIT FORM ========
                if (empty($name) || empty($email) || empty($item) || empty($message) ) {
                    echo "<script>alert('Failed! check empty field')</script>";
                    
                }else{
                    echo "";

                }
                if (!empty($name) && !empty($email) && !empty($item) && !empty($message) ) {
                   
                     
                        // Instantiation and passing `true` enables exceptions
                                $mail = new PHPMailer();

                                //Server settings
                                //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                                $mail->isSMTP();                                            // Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                                $mail->Username   = "thinksoftcreative@gmail.com";                     // SMTP username
                                $mail->Password   = "thinksoft2021";                               // SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                                //Recipients
                                $mail->setFrom('micahalumona@gmail.com', 'Design and System Development Service');
                                $mail->addAddress($email, $name);     // Add a recipient
                                $mail->addAddress($email);               // Name is optional
                                $mail->addCC('micahalumona@gmail.com');
                                $mail->addBCC('thinksoftcreative@gmail.com');

                                // Content
                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = 'Contact/Order Information';
                                $mail->Body    = '<b><strong>Reply to order for '.$item.'Service</strong></b> <br><br>
                                Dear <b>'.$name.'</b> We have recieved your request to order for 
                                <strong>'.$item.' Service</strong> and we are Happy to respond to your request shortly.<br><br>
                                <strong>Please check here for your contact info</strong><br>
                                <p>
                             
                                <table class="table" style="
                                            width: auto;
                                            height: auto;
                                            padding: 8px;
                                            border: 1px solid;
                                            border-collapse: collapse;
                                            margin: auto;
                                            ">
                                    <tr class="head_tab" style="
                                            background: #30305b;
                                            color: #85bafc;
                                            font-size: medium;
                                            ">
                                        <th colspan="3" style="padding: 30px;">CONTACT/ORDER INFO</th>
                                    </tr>
                            
                                    <tr class="row_1" style="background: #e8e8e8;
                                            border: 1px solid #eee;
                                            cursor: pointer;
                                            transition: .5s ease all; ">
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            background: #f0f0f0;
                                            padding: 20px;
                                            ">Name</td>
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            padding: 20px;
                                            ">'.$name.'</td>
                                    </tr>
                                    <tr class="row_1" style="background: #e8e8e8;
                                            border: 1px solid #eee;
                                            cursor: pointer;
                                            transition: .5s ease all; ">
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            background: #f0f0f0;
                                            padding: 20px;
                                            ">Email</td>
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            padding: 20px;
                                            ">'.$email.'</td>
                                    </tr>
                                   
                                    <tr class="row_1" style="background: #e8e8e8;
                                            border: 1px solid #eee;
                                            cursor: pointer;
                                            transition: .5s ease all; ">
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            background: #f0f0f0;
                                            padding: 20px;
                                            ">Item</td>
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            padding: 20px;
                                            ">'.$item.'</td>
                                    </tr>
                                    <tr class="row_1" style="background: #e8e8e8;
                                            border: 1px solid #eee;
                                            cursor: pointer;
                                            transition: .5s ease all; ">
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            background: #f0f0f0;
                                            padding: 20px;
                                            ">Message</td>
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            padding: 20px;
                                            ">'.$message.'</td>
                                    </tr>
                                    <tr class="row_1" style="background: #e8e8e8;
                                            border: 1px solid #eee;
                                            cursor: pointer;
                                            transition: .5s ease all; ">
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            background: #f0f0f0;
                                            padding: 20px;
                                            ">Date of Contact</td>
                                        <td style=" border-collapse: collapse;
                                            padding: 5px 10px;
                                            color: #30305b;
                                            padding: 20px;
                                            ">'.$date.'</td>
                                    </tr>

                                </table>
                 
                                </p>
                                <br><br><hr><br><strong>Welcome and thank you for Trusting in us.</strong>';

                                $mail->send();

                                if ($mail->send()) {
                                    echo  "<script>alert('Message has been sent! Check your email for confirmation. Thank you for contacting us')</script>";

                                }else {
                                    echo  "<script>alert('Message could not be sent. Check your internet connection')</script>";
                                   
                                }
                                // ========== END OF PHP MAILER TO SEND EMAILS =================

                        }
                        else
                        {
                            echo  "<script>alert('Failed! something went wrong')</script>";
                        }


}


?>
