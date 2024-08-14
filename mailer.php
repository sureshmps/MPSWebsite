<?php

    // Only process POST reqeusts.
	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
		
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
		
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	
		
		$subject=strip_tags(trim($_POST["subject"]));
		
        $message = trim($_POST["messege"]);
		
		
        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR empty($subject) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "mympsbkn@gmail.com";

        // Set the email subject.
        //$subject = "New contact from $name";

        // Build the email content.
         $email_content = "Hello,";
        
        $email_content .= "\n$message\n";
		$email_content .= "Thanks \n\n";
		$email_content .= "From: $name\n\n";


        // Build the email headers.
        $email_headers = "From: $name ". "\r\n" .
			"CC:mympsbkn@gmail.com,support@mpsbikaner.in";
		
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>