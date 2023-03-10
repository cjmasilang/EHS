
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

  <title>Policies</title>
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
  <link href="{{ asset('frontend/assets/css/simple-datatables.css') }}" rel="stylesheet">

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
          <li><a href="{{ route('healthpage') }}">Health Events</a></li>
          <li><a href="{{ route('covid_updates') }}">Covid Updates</a></li>
          <li><a href="{{ route('first_aid_training') }}">First Aid Trainings</a></li>
        </ol>
      </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Policies</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                <p>
                    VBI is committed to maintaining the highest Environment, Health, Safety & Security (EHSS) standards throughout the organization, extending to all Entities,
                    Divisions and partners. We aim to match best in class standards, to conduct all operations “Beyond Compliance,” and to inspire this mindset in everyone who
                    works for or with SABIC. In keeping with this ambition, we also believe in prompt, full and transparent reporting of any non-compliance with our requirements
                    and obligations. Our EHSS Policy provides an overall direction to the whole organization and forms the basis which drives our efforts and journey towards
                    EHSS improvement.
                </p>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0">
                <ul>
                    <li><i class=""></i> DRUG & ALCOHOL POLICY. <a href="{{ asset('frontend/assets/Policy PDF/DRUG AND ALCOHOL POLICY.pdf')}}">Click here</a></li>
                    <li><i class=""></i> ENVIROMENTAL POLICY. <a href="{{ asset('frontend/assets/Policy PDF/DRUG AND ALCOHOL POLICY.pdf')}}">Click here</a></li>
                    <li><i class=""></i> HAZCOM. <a href="{{ asset('frontend/assets/Policy PDF/DRUG AND ALCOHOL POLICY.pdf')}}">Click here</a></li>
                    <li><i class=""></i> HIV-AIDS POLICY. <a href="{{ asset('frontend/assets/Policy PDF/DRUG AND ALCOHOL POLICY.pdf')}}">Click here</a></li>
                    <li><i class=""></i> SAFETY HEALTH POLICY. <a href="{{ asset('frontend/assets/Policy PDF/DRUG AND ALCOHOL POLICY.pdf')}}">Click here</a></li>
                    <li><i class=""></i> UBERCULOSIS POLICY. <a href="{{ asset('frontend/assets/Policy PDF/DRUG AND ALCOHOL POLICY.pdf')}}">Click here</a></li>
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
  <script src="{{ asset('frontend/assets/js/simple-datatables.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


</body>

</html>
