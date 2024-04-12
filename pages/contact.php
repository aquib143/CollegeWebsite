<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendmail()
{
    $name = trim($_GET["name"]); // Name of your website or yours
    //$to = "info@southernmetals.in";  // mail of reciever
    $to = "rahmanibrand@gmail.com"; // mail of reciever
    $subject = trim($_GET["subject"]);
    $phone = trim($_GET["phone"]);
    $organization = trim($_GET["organization"]);
    $body = trim($_GET["message"]);
    $email = trim($_GET["email"]);
    // $from = "aquibrahmani143@gmail.com";  // you mail
    //$password = "geqtofjtgqkxrkpf";  // your mail password




    # Mail Content
    $content = "Name: $name\n";
    $content = "Topic: $subject\n";
    $content = "Phone: $phone\n";
    $content = "Organization: $organization\n";
    $content .= "Email: $email\n\n";
    $content .= "Message:\n$body\n";


    // Ignore from here

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    $mail = new PHPMailer();

    // To Here

    //SMTP Settings
    $mail->isSMTP();
    // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
    $mail->Host = "smtp.gmail.com"; // smtp address of your email
    $mail->SMTPAuth = true;
    //$mail->Username = 'info@southernmetals.in';
    //$mail->Password = 'V!vek@@321';
    $mail->Username = 'aquibrahmani143@gmail.com';
    $mail->Password = 'tqssxjerpajckjkb';
    $mail->Port = 587; // port
    $mail->SMTPSecure = "tls"; // tls or ssl
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ]);

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email);
    $mail->addAddress($to); // enter email address whom you want to send
    $mail->Subject = ("$subject");
    $mail->Body = "Name : $name <br> Phone Number :  $phone <br> Email ID : $email <br><br> <b>Message</b> <br> $body";


    if ($mail->send()) {
        // echo "Email is sent!";
    } else {
        echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }
}


// sendmail();  // call this function when you want to

if (isset($_GET['sendmail'])) {
    sendmail();

    //echo "<script>alert('sendmail');</script>";

    echo '<script type="text/javascript">';
    echo ' alert("Email Successfully Send Aquib")'; //not showing an alert box.
    echo '</script>';
    ;


}
?>


<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- ----------------- CSS------------------ -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- -----------------Font Awesome------------------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


</head>

<body>
    <!-- --------------Navbar------------ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color: #0b0a43 !important;">
        <a class="navbar-brand" href="#"> <img src="../img/logoWhite.png" width="200px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-uppercase px-2">
                <li class="nav-item ">
                    <a class="nav-link px-3 text-light" href="../index.html">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-light" href="./about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-light" href="./section.html">Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-light" href="./timetable.html">Time Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-light" href="./faculty.html">Faculty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-danger" href="./contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.cuchd.in" target="_blank"
                        class="p-2 btn btn-outline-light btn-sm rounded-pill px-4">Official
                        Site</a>
                </li>


            </ul>

        </div>
    </nav>

    <div class="container-fluid" style="background-color: rgb(242, 242, 242);">
        <h1 style=" font-size: 40px;" class="mb-3 text-center pt-5 font-weight-bold">Contact <span style="color: red;">
                Us</span> </h1>
        <hr class="mx-auto w-25 mb-5">
        <div class="alert alert-success contact__msg" style="display: none" role="alert">
            Your message was sent successfully.
        </div>

        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <form action="action_page.php">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">

                                <input name="name" required id="name" type="text" class="form-control"
                                    placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">

                                <input name="phone" id="phone" type="text" class="form-control"
                                    placeholder="Your Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">

                                <input name="email" required id="email" type="email" class="form-control"
                                    placeholder="Your Email Address">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">

                                <input name="subject" required id="subject" type="text" class="form-control"
                                    placeholder="Your Query Topic">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea name="message" required id="message" class="form-control" rows="14"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <input class="btn btn-primary rounded-pill btn-block" type=" submit" name="sendmail"
                                value="Send Message"></input>

                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-4 col-lg-4 mt-2">
                <div class="" style="background-color: #0b0a43; border-radius: 25px; box-shadow: 5px 5px 25px black; ">
                    <h1 style="color: #fff; padding: 25px; padding-bottom: 0;">Contact Information</h1>
                    <p style="color: gainsboro; margin-bottom: 40px; padding: 25px;">Please email us if you have any
                        queries about
                        the products,
                        advertising, or anything else.
                    </p>
                    <div style="color: #fff; padding-left: 20px; margin-bottom: 20px;">
                        <div style="display: flex;">
                            <i class=" fa fa-map-marker" style="padding: 10px 15px 8px 15px; font-size: 20px;"></i>
                            <p style=" margin-top: 12px;">Flat no.470, GBM Appartment, Ajit Singh Nagar
                            </p>
                        </div>

                        <div style="display: flex;">
                            <i class=" fa fa-phone" style="padding: 10px 15px 8px 15px; font-size: 20px;"></i>
                            <p style=" margin-top: 12px;">+91 62011 32557 </p>
                        </div>
                        <div style="display: flex;">
                            <i class=" fa fa-whatsapp" style="padding: 10px 15px 8px 15px; font-size: 20px;"></i>
                            <p style=" margin-top: 12px;">+91 97986 50189 </p>
                        </div>
                        <div style="display: flex;">
                            <i class=" fa fa-envelope-o" style="padding: 10px 15px 8px 15px; font-size: 20px;"></i>
                            <p style=" margin-top: 12px;">aquibrahmani@mail.com </p>
                        </div>
                        <div style="display: flex;">
                            <i class=" fa fa-envelope-o" style="padding: 10px 15px 8px 15px; font-size: 20px;"></i>
                            <p style=" margin-top: 12px;">23MCA20256@cuchd.in </p>
                        </div>

                        <div style="display: flex;">
                            <i class=" fa fa-globe" style="padding: 10px 15px 8px 15px; font-size: 20px;"></i>
                            <p style=" margin-top: 12px;">www.web2tech.co </p>
                        </div>


                    </div>

                    <h3 style="padding: 25px; padding-top: 0; color: #fff;">We will revert you as soon as possible 😊
                    </h3>

                </div>
            </div>
        </div>
    </div>

    <!-- ------------------footer---------------------- -->
    <footer class="footer mb-0">

        <div style="display: flex; justify-content: center; margin-top: 10px;">

            <a href="https://www.facebook.com/people/Aquib-Rahmani/pfbid025YKKM3GauYvoPjNUZZ62nWHJ1Gg72k8ee9W74jC4amVgUpfX8jjMxsXdMt9LUGukl/"
                target="_blank">
                <i class="footerIcon fa fa-facebook" style="padding: 10px 15px 8px 15px;"></i>
            </a>
            <a href="https://twitter.com/aquibrahmani143?lang=en" target="_blank">
                <i class="footerIcon fa fa-twitter" style="padding: 10px 10px 8px 11px;"></i>
            </a>
            <a href="https://www.linkedin.com/in/aquib-rahmani-013ba9156/" target="_blank">
                <i class=" footerIcon fa fa-linkedin" style="padding: 10px 10px 8px 11px;"></i>
            </a>
            <a href="https://www.youtube.com/@AquibRahmani/videos" target="_blank">
                <i class=" footerIcon fa fa-youtube" style="padding: 10px 12px 8px 12px;"></i>
            </a>
            <a href="https://www.instagram.com/aquibrahmani143/" target="_blank">
                <i class="footerIcon fa fa-instagram" style="padding: 10px 10px 8px 11px;"></i>
            </a>


        </div>
        <!-- <center>
    <hr style="width: 40%; color: #fff;">
</center> -->
        <hr class="bg-light w-50 mx-auto">
        <p style="text-align: center; padding: 20px;  color: #fff;">Copyright © 2023 Web Tech - Designed & Developed
            by
            <a href="https://web2tech.co/" style="color: #fff; text-decoration: none;">Aquib Rahmani</a>
        </p>
    </footer>



</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>