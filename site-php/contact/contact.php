<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="wrap">
        <!-- header -->
        <header id="header">
            <?php
                include '../include/header.php';
            ?>
        </header>
        <!-- //header -->
        <main>
            <section id="mainContent">
                <h2 class="screen_out">메인 컨텐츠</h2>
                <article class="content-article">
                    <h3>연락하기</h3>
                    <p>가장 빠른 새소식 업데이트</p>
                    
                    <?php
                        include 'mailer.php';
                        include 'smtp.php';

                        //Create a new PHPMailer instance
                        $mail = new PHPMailer();

                        //Tell PHPMailer to use SMTP
                        $mail->isSMTP();

                        //Enable SMTP debugging
                        //SMTP::DEBUG_OFF = off (for production use)
                        //SMTP::DEBUG_CLIENT = client messages
                        //SMTP::DEBUG_SERVER = client and server messages
                        $mail->SMTPDebug = SMTP::DEBUG_OFF;

                        //Set the hostname of the mail server
                        $mail->Host = 'smtp.naver.com';
                        //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
                        //if your network does not support SMTP over IPv6,
                        //though this may cause issues with TLS

                        //Set the SMTP port number:
                        // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
                        // - 587 for SMTP+STARTTLS
                        $mail->Port = 465;

                        //Set the encryption mechanism to use:
                        // - SMTPS (implicit TLS on port 465) or
                        // - STARTTLS (explicit TLS on port 587)
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

                        //Whether to use SMTP authentication
                        $mail->SMTPAuth = true;

                        //Username to use for SMTP authentication - use full email address for gmail
                        $mail->Username = 'richclub9';

                        //Password to use for SMTP authentication
                        $mail->Password = 'Forever8879!bb';

                        $mail->CharSet = 'UTF-8';


                        //Set who the message is to be sent from
                        //Note that with gmail you can only use your account address (same as `Username`)
                        //or predefined aliases that you have configured within your account.
                        //Do not use user-submitted addresses in here
                        $mail->setFrom('richclub9@naver.com', 'webstoryboy');

                        //Set an alternative reply-to address
                        //This is a good place to put user-submitted addresses
                        $mail->addReplyTo('richclub9@naver.com', 'webstoryboy');

                        //Set who the message is to be sent to
                        $mail->addAddress('webstupids@gmail.com', 'John Doe');

                        //Set the subject line
                        $mail->Subject = '안녕하세요~';

                        //Read an HTML message body from an external file, convert referenced images to embedded,
                        //convert HTML into a basic plain-text alternative body
                        //$mail->msgHTML("테스트입니다");
                        $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

                        //Replace the plain text body with one created manually
                        $mail->AltBody = '여기는 실제 메일 내용입니다.';

                        //Attach an image file
                        $mail->addAttachment('a.jpg');

                        //send the message, check for errors
                        if (!$mail->send()) {
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        } else {
                            echo 'Message sent!';
                        }
                    ?>
                        
                </article>
            </section>
        </main>
        <!-- footer -->
        <footer id="footer">
            <?php
                include '../include/footer.php';
            ?>
        </footer>
        <!-- //footer -->
    </div>
    
</body>
</html>