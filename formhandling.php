<?php

// Functions to filter user inputs
function filterName($field)
{
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

    // Validate user name
    if (filter_var($field, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        return $field;
    } else {
        return FALSE;
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>

<body>
    <h2>Contact Us</h2>
    <p>Please fill in this form and send us.</p>
    <form action="" method="post">
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName">
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail">
        </p>
        <p>
            <label for="inputSubject">Subject:</label>
            <input type="text" name="subject" id="inputSubject">
        </p>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"] ?></li>
        <li><em>Email:</em> <?php echo $_POST["email"] ?></li>
        <li><em>Subject:</em> <?php echo $_POST["subject"] ?></li>
        <li><em>Message:</em> <?php echo $_POST["message"] ?></li>
    </ol>
</body>

</html>