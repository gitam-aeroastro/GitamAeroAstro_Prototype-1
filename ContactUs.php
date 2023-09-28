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
        $to = "aeroastro_vzg@gitam.in";
        $subject = "Message From GITAM Aero Astro Website";
        $Msg = str_replace("\n.", "\n..", $_POST('message'));
        $headers = 

        $mail = mail($to, $subject, $Msg);
    }
    
    ?>
</body>
</html>