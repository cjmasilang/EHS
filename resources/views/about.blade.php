
<style>
    .row content {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About VBEHS</title>
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

</head>

<body>

  @include('includes.header')

  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{('/')}}">Home</a></li>
          <li>About</li>
        </ol>
      </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>About Us</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                  These programs are required by, and support, VBI's strong governance and Code of Conduct and our EHSS policy.
                  All outlets and the manufacturing sites are required to perform regular self-assessments and are periodically audited by VBI teams.
                  Our facilities must then develop corrective and preventive actions for any potential issues identified in these self-assessment or audits,
                   which are tracked to completion. A continuous improvement drive is central to our thinking and so each year we set new,
                   more stringent goals and objectives to enhance EHSS performance.
              </p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <ul>
                  <li><i class=""></i> Go beyond compliance.</li>
                  <li><i class=""></i> Identify and appropriately manage risks.</li>
                  <li><i class=""></i> Provide safe, stable, and compliant operation.</li>
                  <li><i class=""></i> Minimize environmental impact.</li>
                  <li><i class=""></i> Ensure rigorous, comprehensive security and crisis management systems.</li>
                  <li><i class=""></i> Deliver good relationships with the communities in which we operate.</li>
                  <li><i class=""></i> Drive continual improvement.</li>
                </ul>

            </div>
          </div>

        </div>
      </section>


  </main>
@include('includes.footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


</body>

</html>
