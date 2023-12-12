<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Namangan Futbol Akademiyasi</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Namangan foutbol akademiyasi" name="keywords" />
        <meta content="Namangan foutbol akademiyasi" name="description" />
        <!-- Favicon -->
        <link href="/public/img/favicon.ico" rel="icon" />
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap"
            rel="stylesheet" />

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Libraries Stylesheet -->
        <link href="{{ asset("/lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet" />
        <!-- Template Stylesheet -->
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
        <style>
            .ck.ck-editor {
                background-color: #333;
                color: #fff;
            }

            .ck.ck-editor__editable {
                color: #000;
                height: 250px;
            }

            * {
                scrollbar-width: auto;
                scrollbar-color: #515157 #ffffff;
            }
            *::-webkit-scrollbar {
                width: 5px;
            }

            *::-webkit-scrollbar-track {
                background: #ffffff;
            }

            *::-webkit-scrollbar-thumb {
                background-color: #515157;
                border-radius: 1px;
            }
        </style>
    </head>

    <body>
        <x-extra.main-extra.site-name />
        <x-main.header />
        <x-extra.main-extra.partners />
        {{ $slot }}
        <x-main.footer />

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
