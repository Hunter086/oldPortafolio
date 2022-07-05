<?php
		$to = $_POST['email'];
        $subject = "Contacto";
        $headers = "From: noreply@exmaple.com" . "\r\n";
        $headers = "Reply-To: lucas.bauducco@unraf.edu.ar" . "\r\n";
        $headers = "X-Mailer: PHP/" . phpversion();
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
         
        $message = "
        <html>
        <head>
        <title>HTML</title>
        </head>
        <body>
        <h1>"+$_POST['datalistOptions']+"</h1>
        <p>"+$_POST['select-product']+"</p>
        <p>"+$_POST['cant-product']+"</p>
        <p>"+$_POST['input-text']+"</p>
        </body>
        </html>";
         
        mail($to, $subject, $message, $headers);
        if($mail){
            echo "<h4>Mail enviado</h4>";
        }
?>