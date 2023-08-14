<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin's panel</title>

        <!--Font awesome icons-->
        <link href="/assetsAdmin/fonts/font-awesome5-free/css/all.min.css" rel="stylesheet">
        {{-- latest font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Google web fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <!--Main style-->
        <link rel="stylesheet" href="/assetsAdmin/css/style.dark.min.css">
        <style>
        /* Custom dark mode styles */
        .ck.ck-editor {
            background-color: #333;
            color: #fff;
        }

        .ck.ck-editor__editable {
            color: #000;
            height: 250px;
        }

        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #515157 #ffffff;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 5px;
        }

        *::-webkit-scrollbar-track {
            background: #ffffff;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #515157;
            border-radius: 1px;
            /* border: 3px solid #ffffff; */
        }
        </style>
    </head>

    <body>
        <div class="d-flex flex-column flex-root">
            <!--Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <x-admin.slidebar />
                <main class="page-content d-flex flex-column flex-row-fluid">
                    <x-admin.header-dashboard />
                    <!--//Page Toolbar//-->
                    <div class="toolbar p-4 pb-0">
                        <div class="position-relative container-fluid px-0">
                            <div class="row align-items-center position-relative">
                                <div class="col-md-5 mb-3 mb-lg-0">
                                    <h3 class="mb-2">{{ env('PROJECT_NAME') }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//Page Toolbar End//-->

                    <!--//Page content//-->
                    <div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
                        <div class="container-fluid px-0">
                            @if (session()->has('error'))
                            <x-extra.messages>{{ session()->get('error') }}</x-extra.messages>
                            @endif
                            @if (session()->has('success'))
                            <x-extra.messages>{{ session()->get('success') }}</x-extra.messages>
                            @endif
                            {{ $slot }}
                        </div>
                    </div>
                    <!--//Page content End//-->

                    <!--//Page-footer//-->
                    <footer class="pb-4">
                        <div class="container-fluid px-4">
                            <span class="d-block lh-sm small text-muted text-end">&copy;
                                <script>
                                document.write(new Date().getFullYear())
                                </script>. NFA
                            </span>
                        </div>
                    </footer>
                    <!--/.Page Footer End-->

                </main>
            </div>
        </div>
        <script src="/assetsAdmin/js/theme.bundle.js"></script>
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- {{-- CKEditor --}} -->
        <script src="/ckeditor5-build-classic/ckeditor.js"></script>
        <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        </script>
        <script>

        </script>
    </body>

</html>
