<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bagian Kerjasama dan Kelembagaan - UIN Sunan Gunung Djati Bandung" name="keywords">
        <meta content="Bagian Kerjasama dan Kelembagaan - UIN Sunan Gunung Djati Bandung" name="description">

        <!-- Favicon -->
        <link href="{{asset('assets')}}/img/Doni-kecil.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="{{asset('assets')}}/lib/animate/animate.min.css" rel="stylesheet">
        <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Nav Bar Start -->
            @include('layouts.navbar')
            <!-- Nav Bar End -->

            <!-- Content -->
            @yield('content')
            <!-- Content End -->

            <!-- Footer Start -->
            @include('layouts.footer')
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
        <script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{asset('assets')}}/lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assets')}}/js/main.js"></script>
        
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
    </body>
</html>