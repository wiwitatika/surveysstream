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
                            <a class="nav-link active" href="careers.php">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <a href="" class="btn btn-default-blue rounded-pill px-3 py-2 ms-auto" >Get a Free Quote</a>
            </div>
        </div>
    </nav>
    <br><br><br>

    <!-- Careers at SurveyStream  -->
    <section class="section-careers py-5">
        <div>
            <h2 class="text-center py-lg-5" data-aos="fade-in" data-aos-duration="1000">Careers at SurveyStream</h2>
            <div class="d-lg-flex flex-lg-row">

                <!-- bagian 1 -->
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-sm-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title my-4">Are you interested
                                    in a career with
                                    SurveyStream?</h5>
                                <p class="card-text">If you are looking for a rewarding and challenging role working with a professional team of surveyors using the latest technology, we could have the career for you.
                                    <br>
                                    <br>
                                    SurveyStream currently has opportunities for highly motivated and proactive individuals to join our experienced team.
                                </p>
                                <p class="card-text bold">Current vacancies:</p>
                                <ul class="list-unstyled">
                                    <p>
                                        <img src="img/career-list-icon.png" class="pe-3">
                                        Registered Surveyor
                                    </p>
                                    <p class="mb-3">
                                        <img src="img/career-list-icon.png" class="pe-3">
                                        Project Surveyor
                                    </p>
                                    <p class="mb-3">
                                        <img src="img/career-list-icon.png" class="pe-3">
                                        Draftsperson
                                    </p>
                                </ul>
                            </div>
                        </div>
                      </div>
                </div>
            
                <div class="col-lg-6 d-flex justify-content-lg-start justify-content-sm-center">
                    <img src="img/careers-image.jpg" alt="" class="img-fluid">
                </div>
            </div>
            
        </div>
    </section>

    <!-- Apply for a position -->
    <section class="section-apply">
        <div class="container">
            <h2 class="text-center py-5">Apply for a position</h2>
            
            
            <div class="row">
                <div class="col-lg-6 col-sm-12 m-auto d-flex justify-content-center">
                    <form class="form-apply row">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Full Name">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" name="role" class="form-control" id="role" placeholder="Role">
                        </div>
                        <div class="col-12">
                            <label for="addInformation" class="form-label">Additional Information</label>
                            <textarea name="addInformation" class="form-control" id="addInformation" 
                                cols="30" rows="5" placeholder="Additional Information" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-group files">
                                <label>Upload Your File</label>
                                <input type="file" class="form-control" multiple="">
                              </div>
                        </div>
                        
                        <div class="col-12 text-center mb-lg-5">
                            <a class="btn btn-default-blue rounded-pill px-5 py-2" href="">Submit</a>
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