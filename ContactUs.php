<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $errors = [];

    if (!empty($_POST)) {
        $name = $_POST('name');
        $email = $_POST('email');
        $contactNo = $_POST('contactNo');
        $linkDIN = $_POST('LinkdinProfile');
        $Msg = $_POST('message');
    
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
    if(empty($contactNo)) {
        $TorFContact = false;
    }
    if(empty($linkDIN)) {
        $TorFLinkDin = false ;
    }
    if (!empty($errors)) {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
    
    }
    
    ?>
</body>
</html>