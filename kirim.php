<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

function tambah($data)
{
    # code...

// if(isset($_POST['submit']))

    # code...

    try{
        if (isset($_POST['submit'])) {
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            //command rspon
            // $alert = '';

            $nama_pengirim  = $data['nama_pengirim'];
            $subject        = $data['subject'];
            $email          = $data['email'];
            $message        = $data['message'];

            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'mywebsiteagimhidayat@gmail.com';                     // SMTP username
            $mail->Password   = 'rahasiabanget';                               // SMTP password
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, $nama_pengirim);
            $mail->addAddress('mywebsiteagimhidayat@gmail.com', 'Agim Hidayat');     // Add a recipient
            
            $mail->addReplyTo($email, $nama_pengirim);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message; 
            // $mail->send();   

            if($mail->send())
            {
                echo "<script>
                        alert('Thank you for your comman.');
                        document.location.href = 'index.php';
                    </script>";
            }
            else{
                echo "<script>
                        alert('Unfined');
                        document.location.href = 'index.php';
                      </script>";
            }
        }

        return true;
    }catch(Exception $e){
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo "<script>
                alert('Your email is unfined.');
                document.location.href = 'index.php';
            </script>";
        return false;
    }
}