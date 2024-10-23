<?php
    error_reporting(0);
    $result = "";
    
    if(isset($_POST['submit'])) {
        
        require 'library/phpmailer/PHPMailerAutoload.php';
        
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
                
        $mail->isSMTP();
        $mail->Host = 'mail.surveystream.com.au';  
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl'; 
        $mail->Username = 'info@surveystream.com.au';                 
        $mail->Password = 'hellosurveystream';                           
                                   
        $mail->setFrom('info@surveystream.com.au', $_POST['name']);
        $mail->addAddress('wiwitatika23@gmail.com');
        //$mail->addReplyTo($_POST['email'], $_POST['name']);
        
        $mail->isHTML();                                  
    
        $result = "";
        if($_GET['select'] == 'detail-survey') {
            $result = "I have Select Detail Survey";
        }elseif($_GET['select'] == 'set-out-survey') {
            $result = "I have Select Set Out Survey";
        }elseif($_GET['select'] == 'identification-survey') {
            $result = "I have Select Identification Survey";
        }elseif($_GET['select'] == 'boundary-survey') {
            $result = "I have Select Boundary Survey";
        }else {
            $result = "";
        }

        $mail->Subject = $result;
        $_POST['subject'];
        $mail->Body    = '<p>Full Name : ' . $_POST['fullName'] . '<br>
                            Email : ' . $_POST['email'] . '<br>
                            Phone Number : ' . $_POST['phoneNumber'] . '<br>
                            Message : ' . $_POST['message'] . '</p>';
        
        
        if(!$mail->send()){
            $error = "<div class='alert alert-danger' 
                        style='background: #dd4b39;
                        border: none;
                        border-left: 5px solid #c23321;
                        border-radius: 0px;
                        margin-bottom: 40px;
                        color: #fff;
                        padding: 20px 30px 20px 20px;'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        Pesan yang anda kirimkan gagal, silahkan coba lagi.
                    </div>";
            /*echo 
            '<script type="text/javascript">
                setTimeout(function(){
                    swal("WOW!","Message!","error");
                }, 500);
            </script>';*/
        }else {
            echo 
            "<script>
            document.location='success.html';
            </script>";
            /*echo '<script type="text/javascript">
                setTimeout(function(){
                    swal({
                        title: "Pesan anda berhasil dikirim!",
                        text: "Terimakasih telah menghubungi kami..",
                        icon: "success",
                        dangerMode: true
                    });
                }, 500);
            </script>';*/
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surveys Stream</title>

    <link href="img/shortcut-icon.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="library/fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="logo-navbar">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/blue-menu-icon.png" alt="" class="img-fluid">
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <div class="ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/api/careers.php">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/api/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <a href="" class="btn btn-default-blue rounded-pill px-3 py-2 ms-auto" >Get a Free Quote</a>
            </div>
        </div>
    </nav>
    <br><br><br>

    <!-- Contact Us -->
    <section class="section-contact-us">
        <div class="container">
            <h2 class="text-center py-5" data-aos="fade-in" data-aos-duration="1000">Contact Us</h2>
            
            
            <div class="row">
                <div class="col-lg-6 col-sm-12 m-auto d-flex justify-content-center">
                    <form class="form-apply row" method="POST">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Full Name">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Phone Number">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="message" 
                                cols="30" rows="5" placeholder="Message" required></textarea>
                        </div>
                        
                        <div class="col-12 text-center mb-lg-5">
                            <button type="submit" name="submit" value="submit" class="btn btn-default-blue rounded-pill px-5 py-2">Submit</button>
                            <p class="d-flex justify-content-center align-items-start flex-row my-5">
                                <img src="img/email-blue-icon.png" alt="" class="pt-1">
                                <span class="px-4">info@surveystream.com.au</span>
                            </p>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <section class="section-footer pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <img src="img/logo-footer.png" alt="logo-footer" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <h5 class="mb-3">Operating Hours</h5>
                        <p>Monday-Friday: 8am-5pm</p>
                        <p>Excluding public holidays</p>
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <h5 class="mb-3">Contact Us</h5>
                        <p class="d-flex align-items-start flex-row">
                            <img src="img/email.png" alt="" class="pt-1">
                            <span class="px-4">info@surveystream.com</span>
                        </p>
                    </div>
                </div>
            </div>
            <p class="copyright text-center m-auto py-3">
                Copyright © 2021 SurveyStream. All Rights Reserved
            </p>
        </section>
    </footer>

    <script src="library/jquery/jquery.js"></script>
    <script src="library/bootstrap/js/bootstrap.min.js"></script>
    <script src="library/fontawesome/js/all.min.js"></script>
    <script src="https://platform.instagram.com/en_US/embeds.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>