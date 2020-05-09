<?php
// Import PHPMailer classes into the global namespace
        // These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        
        // Load Composer's autoloader
        require 'vendor/autoload.php';
    class Contact2{
        public function sendMail($name, $email, $message){
        
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
    
            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();
                $mail->SMTPAuth   = true; 
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                ); 
                $mail->Host       = 'smtp.gmail.com';
                $mail->Username   = 'webcyborg007@gmail.com';
                $mail->Password   = 'cs201600046dpT';                               // SMTP password
                $mail->SMTPSecure = 'ssl';                                          // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 465;      
                $mail->SMTPDebug = 0;                         // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom('webcyborg007@gmail.com', $name);
                $mail->addAddress('webcyborg007@gmail.com');     // Add a recipient
                //$mail->addReplyTo('adebayooluwadara@gmail.com', 'Hello Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
            
                // Attachments
                $mail->addAttachment('/img/logo.png');         // Add attachments
               // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $name;
                $mail->Body    = "<h2>Name:</h2><p>$name</p><h2>Email:</h2><p>$email</p><h2>Message:</h2><p>$message</p>";
                $mail->AltBody = "<h2>Name:</h2><p>$name</p><h2>Email:</h2><p>$email</p><h2>Message:</h2><p>$message</p>";
    
            
                $mail->send();
                $message  = true;
                return $message;
                //return true;
            } catch (Exception $e) {
                //return false;
                //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            }
    }