<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VBEHS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="author" content="CJMM">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/logo3.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/logo3.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <style>
        h2{
            font-style: bold;
        }

        .heading-02{
        font-size: 20px;
        line-height: 15px;
        font-weight: 400;
        margin:5px 0;
        padding-left:5px;
        }
        .heading-02 a{
            color: #000;
            text-decoration:none;
        }
        .heading-02 a:hover{
            color:#080808;
            transition:.7s;
        }

    </style>

</head>

<body>
    @include('includes.header')
    @include('includes.hero')


<main id="main">

    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="content">
                    <h3>About EHSS</h3>
                    <p>
                        These programs are required by, and support, VBI's strong governance and Code of Conduct and our EHSS policy.
                        All outlets and the manufacturing sites are required to perform regular self-assessments and are periodically audited by VBI teams.
                    </p>

                    <div class="text-center text-lg-start">
                    <a href="{{ URL::to('about') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Read More</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>

                </div>

                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('frontend/assets/img/tree.jpg')}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section>

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>EHSS</h2>
            <p>EHSS</p>
        </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box green">
                        <i class="ri-plant-fill"></i>
                        <h3>Enviroment</h3>
                        <p>
                            Ensuring compliances with laws and setting enviromental targets and measuring performance. As well as, educate and influence VBI's employee on enviromental impact.
                        </p>
                        <a href="#" class="read-more"><span>Check More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box green">
                        <i class="ri-first-aid-kit-fill"></i>
                        <h3>Health</h3>
                        <p>
                            VBI provides person-centered care, illness prevention and health promotion, learning opportunities, and public health leadership.
                        </p>
                        <a href="{{ route('healthpage') }}" class="read-more"><span>Check More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-lock-password-fill"></i>
                        <h3>Safety</h3>
                        <p>VBI promotes and Incident free work enviroment through the use of our behavior based safety culture, training and proactive assessment of hazards and risks.</p>
                        <a href="" class="read-more"><span>Check More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box green">
                        <i class=" ri-settings-2-fill "></i>
                        <h3>Security</h3>
                        <p>
                            To provide excellence in security services, giving peace of mind and assurance of protection and safety for our employees, customers and the public in which we come into contact with.
                        </p>
                        <a href="#" class="read-more"><span>Check More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Why EHSS?</h2>
            <p>Frequently Asked Questions</p>
        </header>

                <div class="row">
                    <div class="col-lg-6">

                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        Why we do implement EHS?
                                    </button>
                                </h2>

                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        EHS is important because it protects employees.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        What is environmental health and why is it important?
                                    </button>
                                </h2>

                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Good quality natural environments provide basic needs, in terms of clean air and water, fertile land for food production, and energy and material inputs for production.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        What is EHS Management?
                                    </button>
                                </h2>

                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        codifies and carries out your organization's Environment, Health and Safety. strategy. It makes it easier to improve health and
                                        safety outcomes while achieving corporate sustainability goals.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-6">

                    <div class="accordion accordion-flush" id="faqlist2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                    Why is EHS Management needed?
                                </button>
                            </h2>

                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    is to protect workers from job-related injuries and illnesses, identify and mitigate physical, chemical and biological hazards in the workplace as well as
                                    improving training and communications that clearly explain the company objectives for promoting a safe and healthy work.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                    What are the benefits of the EHS Management System?
                                </button>
                            </h2>

                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    it can help improve compliance with environmental, health, and safety regulations.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                    Features of CQ Environmental Health and Safety (EHS) Management System
                                </button>
                            </h2>

                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    The key components of an EHS management system are risk assessment, policy development, training, communication, monitoring and corrective action.
                                    Risk assessment is the process of identifying hazards and assessing the potential risks they pose.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                @if(session()->get('lang')== '')
                    <h2>Gallery</h2>
                    <p>Check our Activity</p>
                @endif
            </header>

            @php
            $photobig = DB::table('photo')->where('type',1)->orderBy('id','desc')->first();
            $photosmall = DB::table('photo')->where('type',0)->orderBy('id','desc')->limit(5)->get();
            @endphp

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All Activity</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($photosmall as $row)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">

                        <div class="portfolio-wrap">
                            <img src="{{ asset($row->photo) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                            <h4>{{ $row->title }}</h4>

                            <div class="portfolio-links">
                                <a href="{{ asset($row->photo) }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                            </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>



    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">

                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                <p>Western Buyagan, Poblacion,<br>La Trinidad, Baguio, 2601 Benguet</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>09778414113 (Globe)<br>09088916419 (Smart)</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                <p>Monday - Saturday<br>8:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form">
                    <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>

                    <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>

                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Send Message</button>
                    </div>

                    </div>
                </form>

                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->

  </main>

    @include('includes.footer')
    @include('includes.script')

</body>

</html>
