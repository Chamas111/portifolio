
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set recipient email address
  $to = "ahmad.chamas@outlook.de";

  // Set email subject
  $subject = "New contact message from $name";

  // Set email content
  $content = "Name: $name\n";
  $content .= "Email: $email\n";
  $content .= "Message:\n$message\n";

  // Set email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send email
  if (mail($to, $subject, $content, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>