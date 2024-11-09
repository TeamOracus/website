<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require '../../vendor/autoload.php';
$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();

class ContactForm
{
    private $firstName;
    private $lastName;
    private $phone;
    private $email;
    private $subject;
    private $message;

    public function __construct($firstName, $lastName, $phone, $email, $subject, $message)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function sendEmail()
    {
        $mail = new PHPMailer(true);

        try {
            // SMTP Server settings
            $mail->isSMTP();
            $mail->Host = $_ENV['MAIL_SERVER'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['MAIL_USER']; // SMTP username
            $mail->Password = $_ENV['MAIL_PASSWORD']; // SMTP password
            $mail->SMTPSecure = ($_ENV['MAIL_ENCRYPTION'] === 'tls') ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS; // Use TLS encryption
            $mail->Port = $_ENV['MAIL_PORT']; // TCP port (587 for TLS, 465 for SSL)

            // Email settings
            $mail->setFrom($this->email, $this->firstName . ' ' . $this->lastName);
            $mail->addAddress($_ENV['MAIL_USER']);
            $mail->addReplyTo($this->email);

            $mail->isHTML(true);
            $mail->Subject = "Contact Form Submission: " . $this->subject;

            // Email body content
            $bodyContent = "<h2>New Contact Form Submission</h2>";
            $bodyContent .= "<p><strong>First Name:</strong> " . $this->firstName . "</p>";
            $bodyContent .= "<p><strong>Last Name:</strong> " . $this->lastName . "</p>";
            $bodyContent .= "<p><strong>Phone:</strong> " . $this->phone . "</p>";
            $bodyContent .= "<p><strong>Email:</strong> " . $this->email . "</p>";
            $bodyContent .= "<p><strong>Message:</strong><br>" . nl2br($this->message) . "</p>";

            $mail->Body = $bodyContent;

            // Send the email
            $mail->send();
            return "Your message was sent successfully!";
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $contactForm = new ContactForm(
        $_POST['fname'],
        $_POST['lname'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['subject'],
        $_POST['msg']
    );

    // Attempt to send the email and output the result
    $result = $contactForm->sendEmail();
    echo $result;
}
