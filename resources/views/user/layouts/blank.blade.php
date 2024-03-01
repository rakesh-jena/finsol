<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Finsol | User</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user.min.css?') }}" rel="stylesheet" id="user-style-default">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" id="custom">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <style>
        .password-eye,
        .password-eye-slash {
            display: none;
            position: absolute;
            top: 10px;
            right: 5px;
            cursor: pointer;
        }

        .show {
            display: block
        }
    </style>
</head>

<body>
    <div id="app">
        @yield('content')
    </div>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert-success").fadeOut("slow", function() {
                    $(this).remove();
                });
            }, 3000);

            $(document).on('click', '.password-eye', function(e) {
                $('.password-eye').removeClass('show')
                $('.password-eye-slash').addClass('show')
                $('input[name="password"]').attr('type', 'text')
            })
            $(document).on('click', '.password-eye-slash', function(e) {
                $('.password-eye-slash').removeClass('show')
                $('.password-eye').addClass('show')
                $('input[name="password"]').attr('type', 'password')
            })
        });

        var urlpath = "{{ url('/register') }}";

        $(document).ready(function() {
            $('#stateSelect').change(function() {
                var stateId = $(this).val();
                console.log(urlpath);
                if (stateId) {
                    $.ajax({
                        url: urlpath + '/get-districts/' + stateId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#districtSelect').empty().append(
                                '<option value="">Select District</option>');
                            $.each(data, function(key, value) {
                                $('#districtSelect').append('<option value="' + value
                                    .d_code + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#districtSelect').empty().append('<option value="">Select District</option>');
                    $('#blockSelect').empty().append('<option value="">Select Block</option>');
                }
            });

            $('#districtSelect').change(function() {
                var districtId = $(this).val();
                if (districtId) {
                    $.ajax({
                        url: urlpath + '/get-blocks/' + districtId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#blockSelect').empty().append(
                                '<option value="">Select Block</option>');
                            $.each(data, function(key, value) {
                                $('#blockSelect').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#blockSelect').empty().append('<option value="">Select Block</option>');
                }
            });
        });

        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
    @yield('js')
</body>

</html>
