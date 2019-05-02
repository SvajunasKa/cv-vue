<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$_POST = json_decode(file_get_contents('php://input'), true);
$data = $_POST['data'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($data['name']));
    $email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
    $message = trim($data['message']);
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      http_response_code(400);
      echo "Prašau, baigti pilyti formą";
      exit;
    }

    $recipient = "svajunas_kaseta@yahoo.com";
    $subject = "Žinutė nuo $name";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
      http_response_code(200);
      echo "Ačiū, žinutė buvo išsiųsta.";
    } else {
      http_response_code(500);
      $response = "Žinutės išsiųsti nepavyko";
      echo $response;
    }


}
?>
