<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Finsol | Sampurna Suvidha Kendra</title>

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
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" id="custom">
<style>
    .card-span .card-span-img {
        border-radius: 1rem;
    }
</style>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark"
            data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">
            <div class="container"><a class="navbar-brand" href="{{ route('home') }}"><img class="logoimgwidth"
                        src="{{ asset('assets/img/logos/finsollogo.svg') }}"></a><button
                    class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">

                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item dropdown"><a class="nav-link logincolor" href="#about" role="button"
                                aria-haspopup="true" aria-expanded="false">About</a>
                        </li>

                        <li class="nav-item dropdown"><a class="nav-link logincolor" href="#services" role="button"
                                aria-haspopup="true" aria-expanded="false">Services</a>
                        </li>

                        <li class="nav-item dropdown"><a class="nav-link logincolor" href="#contact" role="button"
                                aria-haspopup="true" aria-expanded="false">Contact</a>
                        </li>

                        @auth
                            <li class="nav-item dropdown"><a class="nav-link logincolor" href="{{ route('home') }}"
                                    role="button" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                            @else
                            <li class="nav-item dropdown"><a class="nav-link logincolor" href="{{ route('login_page') }}"
                                    role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>

        <style>
            [data-custom-class='body'],
            [data-custom-class='body'] * {
                background: transparent !important;
            }

            [data-custom-class='title'],
            [data-custom-class='title'] * {
                font-family: Arial !important;
                font-size: 26px !important;
                color: #000000 !important;
            }

            [data-custom-class='subtitle'],
            [data-custom-class='subtitle'] * {
                font-family: Arial !important;
                color: #595959 !important;
                font-size: 14px !important;
            }

            [data-custom-class='heading_1'],
            [data-custom-class='heading_1'] * {
                font-family: Arial !important;
                font-size: 19px !important;
                color: #000000 !important;
            }

            [data-custom-class='heading_2'],
            [data-custom-class='heading_2'] * {
                font-family: Arial !important;
                font-size: 17px !important;
                color: #000000 !important;
            }

            [data-custom-class='body_text'],
            [data-custom-class='body_text'] * {
                color: #595959 !important;
                font-size: 14px !important;
                font-family: Arial !important;
            }

            [data-custom-class='link'],
            [data-custom-class='link'] * {
                color: #3030F1 !important;
                font-size: 14px !important;
                font-family: Arial !important;
                word-break: break-word !important;
            }
        </style>
        <div class="container mt-10 mb-10">
            <div data-custom-class="body">
                <div><strong><span style="font-size: 26px;"><span data-custom-class="title">
                                <bdt class="block-component"></bdt>
                                <bdt class="question">PRIVACY POLICY</bdt>
                                <bdt class="statement-end-if-in-editor"></bdt>
                            </span></span></strong></div>
                <div><br></div>
                <div><span style="color: rgb(127, 127, 127);"><strong><span style="font-size: 15px;"><span
                                    data-custom-class="subtitle">Last updated <bdt class="question">July 19, 2023
                                    </bdt></span></span></strong></span></div>
                <div><br></div>
                <div><br></div>
                <div><br></div>
                <div style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span
                            style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">This
                                privacy notice for <bdt class="question">FINSOL & LEGAL (OPC) PRIVATE LIMITED<bdt
                                        class="block-component"></bdt> (doing business as <bdt class="question">
                                        Finsol, Sampurna Suvidha Kendra</bdt>)<bdt class="statement-end-if-in-editor">
                                    </bdt>
                                </bdt> (<bdt class="block-component"></bdt>"<strong>we</strong>,"
                                "<strong>us</strong>," or "<strong>our</strong>"<bdt
                                    class="statement-end-if-in-editor"></bdt></span><span
                                data-custom-class="body_text">), describes how and why we might collect, store, use,
                                and/or share (<bdt class="block-component"></bdt>"<strong>process</strong>"<bdt
                                    class="statement-end-if-in-editor"></bdt>) your information when you use our
                                services (<bdt class="block-component"></bdt>"<strong>Services</strong>"<bdt
                                    class="statement-end-if-in-editor"></bdt>), such as when
                                you:</span></span></span><span style="font-size: 15px;"><span
                            style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span
                                    style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                        <bdt class="block-component"></bdt>
                                    </span></span></span></span></span></div>
                <ul>
                    <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text">Visit our website<bdt class="block-component"></bdt>
                                    at <bdt class="question">sampurnasuvidhakendra.com</bdt><span
                                        style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span
                                                data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                        style="color: rgb(89, 89, 89);">
                                                        <bdt class="statement-end-if-in-editor">, or any website of
                                                            ours that links to this privacy notice</bdt>
                                                    </span></span></span></span></span></span></span></span></li>
                </ul>
                <div>
                    <bdt class="block-component"><span style="font-size: 15px;"><span style="font-size: 15px;"><span
                                    style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span
                                            style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                <bdt class="block-component"></bdt>
                    </bdt></span></span></span></span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span
                                        style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text">Engage with us in other related ways, including
                                        any sales, marketing, or events<span style="font-size: 15px;"><span
                                                style="color: rgb(89, 89, 89);"><span
                                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                            style="color: rgb(89, 89, 89);">
                                                            <bdt class="statement-end-if-in-editor"></bdt>
                                                        </span></span></span></span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                style="color: rgb(127, 127, 127);"><span
                                    data-custom-class="body_text"><strong>Questions or concerns? </strong>Reading this
                                    privacy notice will help you understand your privacy rights and choices. If you do
                                    not agree with our policies and practices, please do not use our Services. If you
                                    still have any questions or concerns, please contact us at <bdt class="question">
                                        contact@sampurnasuvidhakendra.com</bdt>.</span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><strong><span style="font-size: 15px;"><span
                                    data-custom-class="heading_1">SUMMARY OF KEY POINTS</span></span></strong></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong><em>This summary provides key points from our
                                        privacy notice, but you can find out more details about any of these topics by
                                        clicking the link following each key point or by using
                                        our </em></strong></span></span><a data-custom-class="link"
                            href="#toc"><span style="font-size: 15px;"><span
                                    data-custom-class="body_text"><strong><em>table of
                                            contents</em></strong></span></span></a><span
                            style="font-size: 15px;"><span data-custom-class="body_text"><strong><em> below to find
                                        the section you are looking for.</em></strong></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>What personal information do we process?</strong>
                                When you visit, use, or navigate our Services, we may process personal information
                                depending on how you interact with us and the Services, the choices you make, and the
                                products and features you use. Learn more about </span></span><a
                            data-custom-class="link" href="#personalinfo"><span style="font-size: 15px;"><span
                                    data-custom-class="body_text">personal information you disclose to
                                    us</span></span></a><span data-custom-class="body_text">.</span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>Do we process any sensitive personal
                                    information?</strong>
                                <bdt class="block-component"></bdt>We do not process sensitive personal information.
                                <bdt class="else-block"></bdt>
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>Do we receive any information from third
                                    parties?</strong>
                                <bdt class="block-component"></bdt>We do not receive any information from third
                                parties.<bdt class="else-block"></bdt>
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>How do we process your information?</strong> We
                                process your information to provide, improve, and administer our Services, communicate
                                with you, for security and fraud prevention, and to comply with law. We may also process
                                your information for other purposes with your consent. We process your information only
                                when we have a valid legal reason to do so. Learn more about </span></span><a
                            data-custom-class="link" href="#infouse"><span style="font-size: 15px;"><span
                                    data-custom-class="body_text">how we process your
                                    information</span></span></a><span data-custom-class="body_text">.</span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>In what situations and with which <bdt
                                        class="block-component"></bdt>parties do we share personal
                                    information?</strong> We may share information in specific situations and with
                                specific <bdt class="block-component"></bdt>third parties. Learn more
                                about </span></span><a data-custom-class="link" href="#whoshare"><span
                                style="font-size: 15px;"><span data-custom-class="body_text">when and with whom we
                                    share your personal information</span></span></a><span
                            style="font-size: 15px;"><span data-custom-class="body_text">.<bdt
                                    class="block-component"></bdt></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>How do we keep your information safe?</strong> We
                                have <bdt class="block-component"></bdt>organizational<bdt
                                    class="statement-end-if-in-editor"></bdt> and technical processes and procedures in
                                place to protect your personal information. However, no electronic transmission over the
                                internet or information storage technology can be guaranteed to be 100% secure, so we
                                cannot promise or guarantee that hackers, cybercriminals, or other <bdt
                                    class="block-component"></bdt>unauthorized<bdt class="statement-end-if-in-editor">
                                </bdt> third parties will not be able to defeat our security and improperly collect,
                                access, steal, or modify your information. Learn more about </span></span><a
                            data-custom-class="link" href="#infosafe"><span style="font-size: 15px;"><span
                                    data-custom-class="body_text">how we keep your information
                                    safe</span></span></a><span data-custom-class="body_text">.</span><span
                            style="font-size: 15px;"><span data-custom-class="body_text">
                                <bdt class="statement-end-if-in-editor"></bdt>
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>What are your rights?</strong> Depending on where
                                you are located geographically, the applicable privacy law may mean you have certain
                                rights regarding your personal information. Learn more about </span></span><a
                            data-custom-class="link" href="#privacyrights"><span style="font-size: 15px;"><span
                                    data-custom-class="body_text">your privacy rights</span></span></a><span
                            data-custom-class="body_text">.</span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>How do you exercise your rights?</strong> The
                                easiest way to exercise your rights is by <bdt class="block-component">submitting a
                                </bdt></span></span><a data-custom-class="link"
                            href="https://app.termly.io/notify/b4cfe8d7-34f8-49f3-ad90-4035f4421719"
                            rel="noopener noreferrer" target="_blank"><span style="font-size: 15px;"><span
                                    data-custom-class="body_text">data subject access request</span></span></a><span
                            style="font-size: 15px;"><span data-custom-class="body_text">
                                <bdt class="block-component"></bdt>, or by contacting us. We will consider and act upon
                                any request in accordance with applicable data protection laws.
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text">Want to learn more about what we do with any information
                                we collect? </span></span><a data-custom-class="link" href="#toc"><span
                                style="font-size: 15px;"><span data-custom-class="body_text">Review the privacy notice
                                    in full</span></span></a><span style="font-size: 15px;"><span
                                data-custom-class="body_text">.</span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div id="toc" style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                style="color: rgb(127, 127, 127);"><span style="color: rgb(0, 0, 0);"><strong><span
                                            data-custom-class="heading_1">TABLE OF
                                            CONTENTS</span></strong></span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link"
                                href="#infocollect"><span style="color: rgb(89, 89, 89);">1. WHAT INFORMATION DO WE
                                    COLLECT?</span></a></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link"
                                href="#infouse"><span style="color: rgb(89, 89, 89);">2. HOW DO WE PROCESS YOUR
                                    INFORMATION?<bdt class="block-component"></bdt></span></a></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                style="color: rgb(89, 89, 89);"><a data-custom-class="link" href="#whoshare">3. WHEN
                                    AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a></span><span
                                data-custom-class="body_text">
                                <bdt class="block-component"></bdt>
                            </span></a><span style="color: rgb(127, 127, 127);"><span
                                    style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span
                                            style="color: rgb(89, 89, 89);">
                                            <bdt class="block-component"></bdt>
                                        </span></span><span data-custom-class="body_text"><span
                                            style="color: rgb(89, 89, 89);"><span
                                                style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);">
                                                    <bdt class="block-component"></bdt>
                                                </span></span>
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link"
                                href="#inforetain"><span style="color: rgb(89, 89, 89);">4. HOW LONG DO WE KEEP YOUR
                                    INFORMATION?</span></a><span style="color: rgb(127, 127, 127);"><span
                                    style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span
                                            style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);">
                                                <bdt class="block-component"></bdt>
                                            </span></span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link"
                                href="#infosafe"><span style="color: rgb(89, 89, 89);">5. HOW DO WE KEEP YOUR
                                    INFORMATION SAFE?</span></a><span style="color: rgb(127, 127, 127);"><span
                                    style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span
                                            style="color: rgb(89, 89, 89);">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link"
                                href="#infominors"><span style="color: rgb(89, 89, 89);">6. DO WE COLLECT INFORMATION
                                    FROM MINORS?</span></a><span style="color: rgb(127, 127, 127);"><span
                                    style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span
                                            style="color: rgb(89, 89, 89);">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                        </span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                style="color: rgb(89, 89, 89);"><a data-custom-class="link" href="#privacyrights">7.
                                    WHAT ARE YOUR PRIVACY RIGHTS?</a></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link"
                                href="#DNT"><span style="color: rgb(89, 89, 89);">8. CONTROLS FOR DO-NOT-TRACK
                                    FEATURES<bdt class="block-component"></span>
                                <bdt class="block-component"><span style="font-size: 15px;"><span
                                            data-custom-class="body_text"></span></bdt></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><a data-custom-class="link"
                                href="#policyupdates"><span style="color: rgb(89, 89, 89);">9. DO WE MAKE UPDATES TO
                                    THIS NOTICE?</span></a></span></div>
                    <div style="line-height: 1.5;"><a data-custom-class="link" href="#contact"><span
                                style="color: rgb(89, 89, 89); font-size: 15px;">10. HOW CAN YOU CONTACT US ABOUT THIS
                                NOTICE?</span></a></div>
                    <div style="line-height: 1.5;"><a data-custom-class="link" href="#request"><span
                                style="color: rgb(89, 89, 89);">11. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE
                                COLLECT FROM YOU?</span></a></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div id="infocollect" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span
                                style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control"
                                            style="color: rgb(0, 0, 0);"><strong><span
                                                    data-custom-class="heading_1">1. WHAT INFORMATION DO WE
                                                    COLLECT?</span></strong></span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div id="personalinfo" style="line-height: 1.5;"><span data-custom-class="heading_2"
                            style="color: rgb(0, 0, 0);"><span style="font-size: 15px;"><strong>Personal information
                                    you disclose to us</strong></span></span></div>
                    <div>
                        <div><br></div>
                        <div style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span
                                    style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                        data-custom-class="body_text"><span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                    data-custom-class="body_text"><strong><em>In
                                                            Short:</em></strong></span></span></span></span><span
                                        data-custom-class="body_text"><span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                    data-custom-class="body_text"><strong><em> </em></strong><em>We
                                                        collect personal information that you provide to
                                                        us.</em></span></span></span></span></span></span></div>
                    </div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text">We collect personal information that you voluntarily
                                    provide to us when you <span style="font-size: 15px;">
                                        <bdt class="block-component"></bdt>
                                    </span>register on the Services, </span><span style="font-size: 15px;"><span
                                        data-custom-class="body_text"><span style="font-size: 15px;">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                        </span></span><span data-custom-class="body_text">express an interest in
                                        obtaining information about us or our products and Services, when you
                                        participate in activities on the Services, or otherwise when you contact
                                        us.</span></span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><span style="font-size: 15px;">
                                        <bdt class="block-component"></bdt>
                                    </span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><strong>Personal Information Provided by
                                        You.</strong> The personal information that we collect depends on the context of
                                    your interactions with us and the Services, the choices you make, and the products
                                    and features you use. The personal information we collect may include the
                                    following:<span style="font-size: 15px;"><span data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                data-custom-class="body_text">
                                                <bdt class="question">email addresses</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                            data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                data-custom-class="body_text">
                                                <bdt class="question">phone numbers</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                            data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                data-custom-class="body_text">
                                                <bdt class="question">names</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                            data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span></span></span></span></span></div>
                    <ul>
                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                data-custom-class="body_text">
                                                <bdt class="question">passwords</bdt>
                                            </span></span></span></span></span></li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                            data-custom-class="body_text">
                                            <bdt class="forloop-component"></bdt>
                                        </span><span data-custom-class="body_text">
                                            <bdt class="statement-end-if-in-editor"></bdt>
                                        </span></span></span></span></span></div>
                    <div id="sensitiveinfo" style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text"><strong>Sensitive Information.</strong>
                                <bdt class="block-component"></bdt>We do not process sensitive information.
                            </span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                data-custom-class="body_text">
                                <bdt class="else-block"></bdt>
                            </span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                            data-custom-class="body_text">
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></span></span></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><strong>Payment Data.</strong> We may collect data
                                    necessary to process your payment if you make purchases, such as your payment
                                    instrument number, and the security code associated with your payment instrument.
                                    All payment data is stored by<bdt class="forloop-component"></bdt><span
                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                        data-custom-class="body_text">
                                                        <bdt class="block-component"></bdt>
                                                    </span></span></span></span></span>
                                    <bdt class="question">Instamojo.com</bdt><span
                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                data-custom-class="body_text"><span
                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                            data-custom-class="body_text"><span
                                                                style="font-size: 15px;"><span
                                                                    data-custom-class="body_text">
                                                                    <bdt class="block-component"></bdt>
                                                                </span></span></span><span
                                                            data-custom-class="body_text"><span
                                                                style="font-size: 15px;"><span
                                                                    style="color: rgb(89, 89, 89);"><span
                                                                        data-custom-class="body_text"><span
                                                                            style="font-size: 15px;"><span
                                                                                style="color: rgb(89, 89, 89);"><span
                                                                                    data-custom-class="body_text"><span
                                                                                        style="color: rgb(89, 89, 89);"><span
                                                                                            style="font-size: 15px;"><span
                                                                                                data-custom-class="body_text">
                                                                                                <bdt
                                                                                                    class="forloop-component">
                                                                                                </bdt>
                                                                                            </span></span></span></span></span></span></span></span></span></span></span></span>.
                                                You may find their privacy notice link(s) here:<span
                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                            data-custom-class="body_text">
                                                            <bdt class="forloop-component"></bdt><span
                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                        data-custom-class="body_text"><span
                                                                            style="font-size: 15px;"><span
                                                                                data-custom-class="body_text">
                                                                                <bdt class="block-component"></bdt>
                                                                            </span></span></span></span></span>
                                                        </span></span></span>
                                                <bdt class="question"><a
                                                        href="https://www.instamojo.com/company/privacy/"
                                                        target="_blank"
                                                        data-custom-class="link">https://www.instamojo.com/company/privacy/</a>
                                                </bdt><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                            data-custom-class="body_text"><span
                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                        data-custom-class="body_text"><span
                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                    data-custom-class="body_text"><span
                                                                                        style="font-size: 15px;"><span
                                                                                            data-custom-class="body_text">
                                                                                            <bdt
                                                                                                class="block-component">
                                                                                            </bdt>
                                                                                        </span></span></span></span></span></span></span></span>
                                                            <bdt class="forloop-component"></bdt><span
                                                                style="font-size: 15px;"><span
                                                                    data-custom-class="body_text">.<bdt
                                                                        class="block-component"></bdt></span></span>
                                                        </span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                            data-custom-class="body_text">
                                            <bdt class="statement-end-if-in-editor">
                                                <bdt class="block-component"></bdt>
                                            </bdt>
                                        </span></span></span></span>
                            <bdt class="block-component">
                        </span></span></bdt>
                    </div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text">All personal information that you provide to us must
                                    be true, complete, and accurate, and you must notify us of any changes to such
                                    personal information.</span></span></span></div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                    <bdt class="block-component"></bdt>
                                    </bdt>
                                </span><span data-custom-class="body_text"><span
                                        style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                            data-custom-class="body_text"><span
                                                style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                    data-custom-class="body_text">
                                                    <bdt class="statement-end-if-in-editor">
                                                        <bdt class="block-component"></bdt>
                                                    </bdt>
                                                </span></span></span></span></bdt>
                                </span></span></span></span></span></span></span></span><span
                            style="font-size: 15px;"><span data-custom-class="body_text">
                                <bdt class="block-component"></bdt>
                            </span></span></div>
                    <div id="infouse" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span
                                style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control"
                                            style="color: rgb(0, 0, 0);"><strong><span
                                                    data-custom-class="heading_1">2. HOW DO WE PROCESS YOUR
                                                    INFORMATION?</span></strong></span></span></span></span></span>
                    </div>
                    <div>
                        <div style="line-height: 1.5;"><br></div>
                        <div style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span
                                    style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                        data-custom-class="body_text"><span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                    data-custom-class="body_text"><strong><em>In
                                                            Short: </em></strong><em>We process your information to
                                                        provide, improve, and administer our Services, communicate with
                                                        you, for security and fraud prevention, and to comply with law.
                                                        We may also process your information for other purposes with
                                                        your consent.</em></span></span></span></span></span></span>
                        </div>
                    </div>
                    <div style="line-height: 1.5;"><br></div>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    data-custom-class="body_text"><strong>We process your personal information for a
                                        variety of reasons, depending on how you interact with our Services,
                                        including:</strong>
                                    <bdt class="block-component"></bdt>
                                </span></span></span></div>
                    <ul>
                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text"><strong>To facilitate account creation and
                                            authentication and otherwise manage user accounts. </strong>We may process
                                        your information so you can create and log in to your account, as well as keep
                                        your account in working order.<span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                    data-custom-class="body_text"><span style="font-size: 15px;"><span
                                                            style="color: rgb(89, 89, 89);"><span
                                                                data-custom-class="body_text"><span
                                                                    style="font-size: 15px;"><span
                                                                        style="color: rgb(89, 89, 89);"><span
                                                                            data-custom-class="body_text">
                                                                            <bdt class="statement-end-if-in-editor">
                                                                            </bdt>
                                                                        </span></span></span></span></span></span></span></span></span></span></span></span>
                        </li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                    <bdt class="block-component"></bdt>
                                </span></span></span></div>
                    <ul>
                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text"><strong>To deliver and facilitate delivery of
                                            services to the user. </strong>We may process your information to provide
                                        you with the requested service.<span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                    data-custom-class="body_text"><span
                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                data-custom-class="body_text"><span
                                                                    style="font-size: 15px;"><span
                                                                        style="color: rgb(89, 89, 89);"><span
                                                                            data-custom-class="body_text"><span
                                                                                style="font-size: 15px;"><span
                                                                                    style="color: rgb(89, 89, 89);"><span
                                                                                        data-custom-class="body_text">
                                                                                        <bdt
                                                                                            class="statement-end-if-in-editor">
                                                                                        </bdt>
                                                                                    </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span>
                        </li>
                    </ul>
                    <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                    <bdt class="block-component"></bdt>
                                </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span>
                        </li>
                        </ul>
                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        data-custom-class="body_text">
                                        <bdt class="block-component"></bdt>
                                    </span></span></span></span></span></span></span></span></span></span></span></span>
                            </li>
                            </ul>
                            <div style="line-height: 1.5;"><span
                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                            data-custom-class="body_text">
                                            <bdt class="block-component"></bdt>
                                        </span></span></span></li>
                                </ul>
                                <div style="line-height: 1.5;">
                                    <bdt class="block-component"><span style="font-size: 15px;"></span></bdt>
                                </div>
                                <ul>
                                    <li style="line-height: 1.5;"><span
                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                    data-custom-class="body_text"><strong>To send administrative
                                                        information to you. </strong>We may process your information to
                                                    send you details about our products and services, changes to our
                                                    terms and policies, and other similar information.<span
                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                data-custom-class="body_text">
                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                            </span></span></span></span></span></span></li>
                                </ul>
                                <div style="line-height: 1.5;">
                                    <bdt class="block-component"><span style="font-size: 15px;"></bdt>
                                    </span></span></span></span></span></span></span></span></span></li>
                                    </ul>
                                    <div style="line-height: 1.5;">
                                        <bdt class="block-component"><span style="font-size: 15px;"></bdt>
                                        </span></span></span></span></span></span></span></span></span></span></span></span>
                                        </li>
                                        </ul>
                                        <div style="line-height: 1.5;">
                                            <bdt class="block-component"><span style="font-size: 15px;"><span
                                                        data-custom-class="body_text"></span></span></bdt>
                                            </li>
                                            </ul>
                                            <p style="font-size: 15px; line-height: 1.5;">
                                                <bdt class="block-component"><span style="font-size: 15px;"></bdt>
                                                </span></span></span></span></span></span></span></span></span></span></span>
                                                </li>
                                                </ul>
                                            <p style="font-size: 15px; line-height: 1.5;">
                                                <bdt class="block-component"><span style="font-size: 15px;"></bdt>
                                                </span></span></span></span></span></span></span></span></span></span></span>
                                                </li>
                                                </ul>
                                            <p style="font-size: 15px; line-height: 1.5;">
                                                <bdt class="block-component"></bdt>
                                            </p>
                                            <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                                            style="color: rgb(89, 89, 89);"><span
                                                                style="color: rgb(89, 89, 89);"><span
                                                                    data-custom-class="body_text"><strong>To request
                                                                        feedback. </strong>We may process your
                                                                    information when necessary to request feedback and
                                                                    to contact you about your use of our Services.<span
                                                                        style="color: rgb(89, 89, 89);"><span
                                                                            style="color: rgb(89, 89, 89);"><span
                                                                                data-custom-class="body_text"><span
                                                                                    style="color: rgb(89, 89, 89);"><span
                                                                                        data-custom-class="body_text"><span
                                                                                            style="color: rgb(89, 89, 89);"><span
                                                                                                data-custom-class="body_text">
                                                                                                <bdt
                                                                                                    class="statement-end-if-in-editor">
                                                                                                </bdt>
                                                                                            </span></span></span></span></span></span></span></span></span></span></span>
                                                </li>
                                            </ul>
                                            <p style="font-size: 15px; line-height: 1.5;">
                                                <bdt class="block-component"></bdt>
                                                </span></span></span></span></span></span></span></span></span></span></span>
                                                </li>
                                                </ul>
                                            <div style="line-height: 1.5;">
                                                <bdt class="block-component"><span style="font-size: 15px;"><span
                                                            data-custom-class="body_text"></span></span></bdt>
                                            </div>
                                            <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px;"><span
                                                            data-custom-class="body_text"><strong>To send you marketing
                                                                and promotional communications. </strong>We may process
                                                            the personal information you send to us for our marketing
                                                            purposes, if this is in accordance with your marketing
                                                            preferences. You can opt out of our marketing emails at any
                                                            time. For more information, see <bdt
                                                                class="block-component"></bdt>"<bdt
                                                                class="statement-end-if-in-editor"></bdt>
                                                        </span></span><a href="#privacyrights"><span
                                                            data-custom-class="link"><span
                                                                style="font-size: 15px;"><span
                                                                    data-custom-class="link">WHAT ARE YOUR PRIVACY
                                                                    RIGHTS?</span></span></span></a><span
                                                        style="font-size: 15px;"><span data-custom-class="body_text">
                                                            <bdt class="block-component"></bdt>"<bdt
                                                                class="statement-end-if-in-editor"></bdt> below.
                                                        </span>
                                                        <bdt class="statement-end-if-in-editor"><span
                                                                data-custom-class="body_text"></span></bdt>
                                                    </span></li>
                                            </ul>
                                            <div style="line-height: 1.5;">
                                                <bdt class="block-component"><span style="font-size: 15px;"></bdt>
                                                </span></span></span></li>
                                                </ul>
                                                <div style="line-height: 1.5;">
                                                    <bdt class="block-component"><span style="font-size: 15px;"></bdt>
                                                    </span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;"><span style="font-size: 15px;">
                                                            <bdt class="block-component"><span
                                                                    data-custom-class="body_text"></bdt>
                                                        </span></span></li>
                                                        </ul>
                                                        <div style="line-height: 1.5;">
                                                            <bdt class="block-component"><span
                                                                    style="font-size: 15px;"><span
                                                                        data-custom-class="body_text"></bdt>
                                                            </span></span></li>
                                                            </ul>
                                                            <div style="line-height: 1.5;">
                                                                <bdt class="block-component"><span
                                                                        style="font-size: 15px;"><span
                                                                            data-custom-class="body_text"></span></span>
                                                                </bdt>
                                                            </div>
                                                            <ul>
                                                                <li style="line-height: 1.5;"><span
                                                                        data-custom-class="body_text"><span
                                                                            style="font-size: 15px;"><strong>To protect
                                                                                our Services.</strong> We may process
                                                                            your information as part of our efforts to
                                                                            keep our Services safe and secure, including
                                                                            fraud monitoring and
                                                                            prevention.</span></span>
                                                                    <bdt class="statement-end-if-in-editor"><span
                                                                            style="font-size: 15px;"><span
                                                                                data-custom-class="body_text"></span></span>
                                                                    </bdt>
                                                                </li>
                                                            </ul>
                                                            <div style="line-height: 1.5;">
                                                                <bdt class="block-component"><span
                                                                        style="font-size: 15px;"><span
                                                                            data-custom-class="body_text"></span></span>
                                                                </bdt>
                                                                </li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                    <bdt class="block-component"><span
                                                                            style="font-size: 15px;"><span
                                                                                data-custom-class="body_text"></span></span>
                                                                    </bdt>
                                                                    </li>
                                                                    </ul>
                                                                    <div style="line-height: 1.5;">
                                                                        <bdt class="block-component"><span
                                                                                style="font-size: 15px;"><span
                                                                                    data-custom-class="body_text"></span></span>
                                                                        </bdt>
                                                                        </li>
                                                                        </ul>
                                                                        <div style="line-height: 1.5;">
                                                                            <bdt class="block-component"><span
                                                                                    style="font-size: 15px;"><span
                                                                                        data-custom-class="body_text"></span></span>
                                                                            </bdt>
                                                                            </li>
                                                                            </ul>
                                                                            <div style="line-height: 1.5;">
                                                                                <bdt class="block-component"><span
                                                                                        style="font-size: 15px;"><span
                                                                                            data-custom-class="body_text"></span></span>
                                                                                </bdt>
                                                                                </li>
                                                                                </ul>
                                                                                <div style="line-height: 1.5;">
                                                                                    <bdt class="block-component"><span
                                                                                            style="font-size: 15px;"><span
                                                                                                data-custom-class="body_text">
                                                                                    </bdt></span></span></li>
                                                                                    </ul>
                                                                                    <div style="line-height: 1.5;">
                                                                                        <bdt class="block-component">
                                                                                            <span
                                                                                                style="font-size: 15px;"><span
                                                                                                    data-custom-class="body_text">
                                                                                        </bdt></span></span></li>
                                                                                        </ul>
                                                                                        <div style="line-height: 1.5;">
                                                                                            <bdt
                                                                                                class="block-component">
                                                                                                <span
                                                                                                    style="font-size: 15px;"><span
                                                                                                        data-custom-class="body_text"></span></span>
                                                                                            </bdt>
                                                                                        </div>
                                                                                        <ul>
                                                                                            <li
                                                                                                style="line-height: 1.5;">
                                                                                                <span
                                                                                                    style="font-size: 15px;"><span
                                                                                                        data-custom-class="body_text"><strong>To
                                                                                                            comply with
                                                                                                            our legal
                                                                                                            obligations.</strong>
                                                                                                        We may process
                                                                                                        your information
                                                                                                        to comply with
                                                                                                        our legal
                                                                                                        obligations,
                                                                                                        respond to legal
                                                                                                        requests, and
                                                                                                        exercise,
                                                                                                        establish, or
                                                                                                        defend our legal
                                                                                                        rights.<bdt
                                                                                                            class="statement-end-if-in-editor">
                                                                                                        </bdt>
                                                                                                    </span></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div style="line-height: 1.5;">
                                                                                            <bdt
                                                                                                class="block-component">
                                                                                                <span
                                                                                                    style="font-size: 15px;"><span
                                                                                                        data-custom-class="body_text"></span></span>
                                                                                            </bdt>
                                                                                            </li>
                                                                                            </ul>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <bdt
                                                                                                    class="block-component">
                                                                                                    <span
                                                                                                        style="font-size: 15px;"><span
                                                                                                            data-custom-class="body_text"></span></span>
                                                                                                </bdt>
                                                                                                <bdt
                                                                                                    class="block-component">
                                                                                                    <span
                                                                                                        style="font-size: 15px;"><span
                                                                                                            data-custom-class="body_text">
                                                                                                </bdt></span></span>
                                                                                                <bdt
                                                                                                    class="block-component">
                                                                                                    <span
                                                                                                        style="font-size: 15px;"><span
                                                                                                            data-custom-class="body_text"></span></span>
                                                                                                </bdt>
                                                                                                <bdt
                                                                                                    class="block-component">
                                                                                                    <span
                                                                                                        style="font-size: 15px;"><span
                                                                                                            data-custom-class="body_text"></span></span>
                                                                                                </bdt>
                                                                                            </div>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <br>
                                                                                            </div>
                                                                                            <div id="whoshare"
                                                                                                style="line-height: 1.5;">
                                                                                                <span
                                                                                                    style="color: rgb(127, 127, 127);"><span
                                                                                                        style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                    id="control"
                                                                                                                    style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                            data-custom-class="heading_1">3.
                                                                                                                            WHEN
                                                                                                                            AND
                                                                                                                            WITH
                                                                                                                            WHOM
                                                                                                                            DO
                                                                                                                            WE
                                                                                                                            SHARE
                                                                                                                            YOUR
                                                                                                                            PERSONAL
                                                                                                                            INFORMATION?</span></strong> </span> </span> </span> </span> </span>
                                                                                            </div>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <br>
                                                                                            </div>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <span
                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                            data-custom-class="body_text"><strong><em>In
                                                                                                                    Short:</em></strong><em> We
                                                                                                                may
                                                                                                                share
                                                                                                                information
                                                                                                                in
                                                                                                                specific
                                                                                                                situations
                                                                                                                described
                                                                                                                in this
                                                                                                                section
                                                                                                                and/or
                                                                                                                with the
                                                                                                                following
                                                                                                                <bdt
                                                                                                                    class="block-component">
                                                                                                                </bdt>
                                                                                                                third
                                                                                                                parties.
                                                                                                            </em></span></span></span>
                                                                                            </div>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <span
                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                            data-custom-class="body_text">
                                                                                                            <bdt
                                                                                                                class="block-component">
                                                                                                        </span>
                                                                                            </div>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <br>
                                                                                            </div>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <span
                                                                                                    style="font-size: 15px;"><span
                                                                                                        data-custom-class="body_text">We
                                                                                                        <bdt
                                                                                                            class="block-component">
                                                                                                        </bdt>may need
                                                                                                        to share your
                                                                                                        personal
                                                                                                        information in
                                                                                                        the following
                                                                                                        situations:
                                                                                                    </span></span>
                                                                                            </div>
                                                                                            <ul>
                                                                                                <li
                                                                                                    style="line-height: 1.5;">
                                                                                                    <span
                                                                                                        style="font-size: 15px;"><span
                                                                                                            data-custom-class="body_text"><strong>Business
                                                                                                                Transfers.</strong>
                                                                                                            We may share
                                                                                                            or transfer
                                                                                                            your
                                                                                                            information
                                                                                                            in
                                                                                                            connection
                                                                                                            with, or
                                                                                                            during
                                                                                                            negotiations
                                                                                                            of, any
                                                                                                            merger, sale
                                                                                                            of company
                                                                                                            assets,
                                                                                                            financing,
                                                                                                            or
                                                                                                            acquisition
                                                                                                            of all or a
                                                                                                            portion of
                                                                                                            our business
                                                                                                            to another
                                                                                                            company.</span></span>
                                                                                                </li>
                                                                                            </ul>
                                                                                            <div
                                                                                                style="line-height: 1.5;">
                                                                                                <span
                                                                                                    style="font-size: 15px;"><span
                                                                                                        data-custom-class="body_text">
                                                                                                        <bdt
                                                                                                            class="block-component">
                                                                                                        </bdt>
                                                                                                    </span></span></li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    style="line-height: 1.5;">
                                                                                                    <span
                                                                                                        style="font-size: 15px;">
                                                                                                        <bdt
                                                                                                            class="block-component">
                                                                                                            <span
                                                                                                                data-custom-class="body_text"></span>
                                                                                                        </bdt>
                                                                                                    </span></li>
                                                                                                    </ul>
                                                                                                    <div
                                                                                                        style="line-height: 1.5;">
                                                                                                        <bdt
                                                                                                            class="block-component">
                                                                                                            <span
                                                                                                                style="font-size: 15px;"><span
                                                                                                                    data-custom-class="body_text"></span></span>
                                                                                                        </bdt>
                                                                                                        </li>
                                                                                                        </ul>
                                                                                                        <div
                                                                                                            style="line-height: 1.5;">
                                                                                                            <bdt
                                                                                                                class="block-component">
                                                                                                                <span
                                                                                                                    style="font-size: 15px;"><span
                                                                                                                        data-custom-class="body_text">
                                                                                                            </bdt>
                                                                                                            </span></span>
                                                                                                            </li>
                                                                                                            </ul>
                                                                                                            <div
                                                                                                                style="line-height: 1.5;">
                                                                                                                <bdt
                                                                                                                    class="block-component">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px;"><span
                                                                                                                            data-custom-class="body_text"></span></span>
                                                                                                                </bdt>
                                                                                                                </li>
                                                                                                                </ul>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <bdt
                                                                                                                        class="block-component">
                                                                                                                        <span
                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                data-custom-class="body_text"></span></span>
                                                                                                                    </bdt>
                                                                                                                    <span
                                                                                                                        style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                style="color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px;"><span
                                                                                                                                        style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt
                                                                                                                                            class="block-component">
                                                                                                                                            <span
                                                                                                                                                data-custom-class="heading_1">
                                                                                                                                        </bdt>
                                                                                                                                    </span></span></span></span></span></span></span></span><span
                                                                                                                        data-custom-class="body_text"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                    style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                        style="font-size: 15px;"><span
                                                                                                                                            style="color: rgb(89, 89, 89);"><span
                                                                                                                                                style="font-size: 15px;"><span
                                                                                                                                                    style="color: rgb(89, 89, 89);"><span
                                                                                                                                                        data-custom-class="body_text">
                                                                                                                                                        <bdt
                                                                                                                                                            class="block-component">
                                                                                                                                                        </bdt>
                                                                                                                                                    </span>
                                                                                                                                                    <bdt
                                                                                                                                                        class="block-component">
                                                                                                                                                        <span
                                                                                                                                                            data-custom-class="body_text">
                                                                                                                                                            <bdt
                                                                                                                                                                class="block-component">
                                                                                                                                                            </bdt>
                                                                                                                                                        </span>
                                                                                                                                                </span></span></span></span></span></span></span></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="inforetain"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">4.
                                                                                                                                                HOW
                                                                                                                                                LONG
                                                                                                                                                DO
                                                                                                                                                WE
                                                                                                                                                KEEP
                                                                                                                                                YOUR
                                                                                                                                                INFORMATION?</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><strong><em>In
                                                                                                                                        Short: </em></strong><em>We
                                                                                                                                    keep
                                                                                                                                    your
                                                                                                                                    information
                                                                                                                                    for
                                                                                                                                    as
                                                                                                                                    long
                                                                                                                                    as
                                                                                                                                    necessary
                                                                                                                                    to
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                    fulfill
                                                                                                                                    <bdt
                                                                                                                                        class="statement-end-if-in-editor">
                                                                                                                                    </bdt>
                                                                                                                                    the
                                                                                                                                    purposes
                                                                                                                                    outlined
                                                                                                                                    in
                                                                                                                                    this
                                                                                                                                    privacy
                                                                                                                                    notice
                                                                                                                                    unless
                                                                                                                                    otherwise
                                                                                                                                    required
                                                                                                                                    by
                                                                                                                                    law.
                                                                                                                                </em></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">We
                                                                                                                                will
                                                                                                                                only
                                                                                                                                keep
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                for
                                                                                                                                as
                                                                                                                                long
                                                                                                                                as
                                                                                                                                it
                                                                                                                                is
                                                                                                                                necessary
                                                                                                                                for
                                                                                                                                the
                                                                                                                                purposes
                                                                                                                                set
                                                                                                                                out
                                                                                                                                in
                                                                                                                                this
                                                                                                                                privacy
                                                                                                                                notice,
                                                                                                                                unless
                                                                                                                                a
                                                                                                                                longer
                                                                                                                                retention
                                                                                                                                period
                                                                                                                                is
                                                                                                                                required
                                                                                                                                or
                                                                                                                                permitted
                                                                                                                                by
                                                                                                                                law
                                                                                                                                (such
                                                                                                                                as
                                                                                                                                tax,
                                                                                                                                accounting,
                                                                                                                                or
                                                                                                                                other
                                                                                                                                legal
                                                                                                                                requirements).
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                No
                                                                                                                                purpose
                                                                                                                                in
                                                                                                                                this
                                                                                                                                notice
                                                                                                                                will
                                                                                                                                require
                                                                                                                                us
                                                                                                                                keeping
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                for
                                                                                                                                longer
                                                                                                                                than
                                                                                                                                <span
                                                                                                                                    style="font-size: 15px;"><span
                                                                                                                                        style="color: rgb(89, 89, 89);"><span
                                                                                                                                            data-custom-class="body_text">
                                                                                                                                            <bdt
                                                                                                                                                class="block-component">
                                                                                                                                            </bdt>
                                                                                                                                        </span></span></span>
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                the
                                                                                                                                period
                                                                                                                                of
                                                                                                                                time
                                                                                                                                in
                                                                                                                                which
                                                                                                                                users
                                                                                                                                have
                                                                                                                                an
                                                                                                                                account
                                                                                                                                with
                                                                                                                                us
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                <span
                                                                                                                                    style="font-size: 15px;"><span
                                                                                                                                        style="color: rgb(89, 89, 89);"><span
                                                                                                                                            data-custom-class="body_text">
                                                                                                                                            <bdt
                                                                                                                                                class="else-block">
                                                                                                                                            </bdt>
                                                                                                                                        </span></span></span>.
                                                                                                                            </span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">When
                                                                                                                                we
                                                                                                                                have
                                                                                                                                no
                                                                                                                                ongoing
                                                                                                                                legitimate
                                                                                                                                business
                                                                                                                                need
                                                                                                                                to
                                                                                                                                process
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information,
                                                                                                                                we
                                                                                                                                will
                                                                                                                                either
                                                                                                                                delete
                                                                                                                                or
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                anonymize
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                such
                                                                                                                                information,
                                                                                                                                or,
                                                                                                                                if
                                                                                                                                this
                                                                                                                                is
                                                                                                                                not
                                                                                                                                possible
                                                                                                                                (for
                                                                                                                                example,
                                                                                                                                because
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                has
                                                                                                                                been
                                                                                                                                stored
                                                                                                                                in
                                                                                                                                backup
                                                                                                                                archives),
                                                                                                                                then
                                                                                                                                we
                                                                                                                                will
                                                                                                                                securely
                                                                                                                                store
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                and
                                                                                                                                isolate
                                                                                                                                it
                                                                                                                                from
                                                                                                                                any
                                                                                                                                further
                                                                                                                                processing
                                                                                                                                until
                                                                                                                                deletion
                                                                                                                                is
                                                                                                                                possible.<span
                                                                                                                                    style="color: rgb(89, 89, 89);">
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                </span>
                                                                                                                            </span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="infosafe"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">5.
                                                                                                                                                HOW
                                                                                                                                                DO
                                                                                                                                                WE
                                                                                                                                                KEEP
                                                                                                                                                YOUR
                                                                                                                                                INFORMATION
                                                                                                                                                SAFE?</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><strong><em>In
                                                                                                                                        Short: </em></strong><em>We
                                                                                                                                    aim
                                                                                                                                    to
                                                                                                                                    protect
                                                                                                                                    your
                                                                                                                                    personal
                                                                                                                                    information
                                                                                                                                    through
                                                                                                                                    a
                                                                                                                                    system
                                                                                                                                    of
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                    organizational
                                                                                                                                    <bdt
                                                                                                                                        class="statement-end-if-in-editor">
                                                                                                                                    </bdt>
                                                                                                                                    and
                                                                                                                                    technical
                                                                                                                                    security
                                                                                                                                    measures.
                                                                                                                                </em></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">We
                                                                                                                                have
                                                                                                                                implemented
                                                                                                                                appropriate
                                                                                                                                and
                                                                                                                                reasonable
                                                                                                                                technical
                                                                                                                                and
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                organizational
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                security
                                                                                                                                measures
                                                                                                                                designed
                                                                                                                                to
                                                                                                                                protect
                                                                                                                                the
                                                                                                                                security
                                                                                                                                of
                                                                                                                                any
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                we
                                                                                                                                process.
                                                                                                                                However,
                                                                                                                                despite
                                                                                                                                our
                                                                                                                                safeguards
                                                                                                                                and
                                                                                                                                efforts
                                                                                                                                to
                                                                                                                                secure
                                                                                                                                your
                                                                                                                                information,
                                                                                                                                no
                                                                                                                                electronic
                                                                                                                                transmission
                                                                                                                                over
                                                                                                                                the
                                                                                                                                Internet
                                                                                                                                or
                                                                                                                                information
                                                                                                                                storage
                                                                                                                                technology
                                                                                                                                can
                                                                                                                                be
                                                                                                                                guaranteed
                                                                                                                                to
                                                                                                                                be
                                                                                                                                100%
                                                                                                                                secure,
                                                                                                                                so
                                                                                                                                we
                                                                                                                                cannot
                                                                                                                                promise
                                                                                                                                or
                                                                                                                                guarantee
                                                                                                                                that
                                                                                                                                hackers,
                                                                                                                                cybercriminals,
                                                                                                                                or
                                                                                                                                other
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                unauthorized
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                third
                                                                                                                                parties
                                                                                                                                will
                                                                                                                                not
                                                                                                                                be
                                                                                                                                able
                                                                                                                                to
                                                                                                                                defeat
                                                                                                                                our
                                                                                                                                security
                                                                                                                                and
                                                                                                                                improperly
                                                                                                                                collect,
                                                                                                                                access,
                                                                                                                                steal,
                                                                                                                                or
                                                                                                                                modify
                                                                                                                                your
                                                                                                                                information.
                                                                                                                                Although
                                                                                                                                we
                                                                                                                                will
                                                                                                                                do
                                                                                                                                our
                                                                                                                                best
                                                                                                                                to
                                                                                                                                protect
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information,
                                                                                                                                transmission
                                                                                                                                of
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                to
                                                                                                                                and
                                                                                                                                from
                                                                                                                                our
                                                                                                                                Services
                                                                                                                                is
                                                                                                                                at
                                                                                                                                your
                                                                                                                                own
                                                                                                                                risk.
                                                                                                                                You
                                                                                                                                should
                                                                                                                                only
                                                                                                                                access
                                                                                                                                the
                                                                                                                                Services
                                                                                                                                within
                                                                                                                                a
                                                                                                                                secure
                                                                                                                                environment.<span
                                                                                                                                    style="color: rgb(89, 89, 89);">
                                                                                                                                    <bdt
                                                                                                                                        class="statement-end-if-in-editor">
                                                                                                                                    </bdt>
                                                                                                                                </span><span
                                                                                                                                    style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                        data-custom-class="body_text">
                                                                                                                                        <bdt
                                                                                                                                            class="block-component">
                                                                                                                                        </bdt>
                                                                                                                                    </span></span>
                                                                                                                            </span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="infominors"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">6.
                                                                                                                                                DO
                                                                                                                                                WE
                                                                                                                                                COLLECT
                                                                                                                                                INFORMATION
                                                                                                                                                FROM
                                                                                                                                                MINORS?</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><strong><em>In
                                                                                                                                        Short:</em></strong><em> We
                                                                                                                                    do
                                                                                                                                    not
                                                                                                                                    knowingly
                                                                                                                                    collect
                                                                                                                                    data
                                                                                                                                    from
                                                                                                                                    or
                                                                                                                                    market
                                                                                                                                    to
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                    children
                                                                                                                                    under
                                                                                                                                    18
                                                                                                                                    years
                                                                                                                                    of
                                                                                                                                    age
                                                                                                                                    <bdt
                                                                                                                                        class="else-block">
                                                                                                                                    </bdt>
                                                                                                                                    .
                                                                                                                                </em>
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                            </span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">We
                                                                                                                                do
                                                                                                                                not
                                                                                                                                knowingly
                                                                                                                                solicit
                                                                                                                                data
                                                                                                                                from
                                                                                                                                or
                                                                                                                                market
                                                                                                                                to
                                                                                                                                children
                                                                                                                                under
                                                                                                                                18
                                                                                                                                years
                                                                                                                                of
                                                                                                                                age.
                                                                                                                                By
                                                                                                                                using
                                                                                                                                the
                                                                                                                                Services,
                                                                                                                                you
                                                                                                                                represent
                                                                                                                                that
                                                                                                                                you
                                                                                                                                are
                                                                                                                                at
                                                                                                                                least
                                                                                                                                18
                                                                                                                                or
                                                                                                                                that
                                                                                                                                you
                                                                                                                                are
                                                                                                                                the
                                                                                                                                parent
                                                                                                                                or
                                                                                                                                guardian
                                                                                                                                of
                                                                                                                                such
                                                                                                                                a
                                                                                                                                minor
                                                                                                                                and
                                                                                                                                consent
                                                                                                                                to
                                                                                                                                such
                                                                                                                                minor
                                                                                                                                dependent’s
                                                                                                                                use
                                                                                                                                of
                                                                                                                                the
                                                                                                                                Services.
                                                                                                                                If
                                                                                                                                we
                                                                                                                                learn
                                                                                                                                that
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                from
                                                                                                                                users
                                                                                                                                less
                                                                                                                                than
                                                                                                                                18
                                                                                                                                years
                                                                                                                                of
                                                                                                                                age
                                                                                                                                has
                                                                                                                                been
                                                                                                                                collected,
                                                                                                                                we
                                                                                                                                will
                                                                                                                                deactivate
                                                                                                                                the
                                                                                                                                account
                                                                                                                                and
                                                                                                                                take
                                                                                                                                reasonable
                                                                                                                                measures
                                                                                                                                to
                                                                                                                                promptly
                                                                                                                                delete
                                                                                                                                such
                                                                                                                                data
                                                                                                                                from
                                                                                                                                our
                                                                                                                                records.
                                                                                                                                If
                                                                                                                                you
                                                                                                                                become
                                                                                                                                aware
                                                                                                                                of
                                                                                                                                any
                                                                                                                                data
                                                                                                                                we
                                                                                                                                may
                                                                                                                                have
                                                                                                                                collected
                                                                                                                                from
                                                                                                                                children
                                                                                                                                under
                                                                                                                                age
                                                                                                                                18,
                                                                                                                                please
                                                                                                                                contact
                                                                                                                                us
                                                                                                                                at
                                                                                                                                <span
                                                                                                                                    style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                        data-custom-class="body_text">
                                                                                                                                        <bdt
                                                                                                                                            class="block-component">
                                                                                                                                        </bdt>
                                                                                                                                        <bdt
                                                                                                                                            class="question">
                                                                                                                                            contact@sampurnasuvidhakendra.com
                                                                                                                                        </bdt>
                                                                                                                                        <bdt
                                                                                                                                            class="else-block">
                                                                                                                                        </bdt>
                                                                                                                                    </span></span>.</span><span
                                                                                                                                data-custom-class="body_text">
                                                                                                                                <bdt
                                                                                                                                    class="else-block">
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                            </span></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="privacyrights"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">7.
                                                                                                                                                WHAT
                                                                                                                                                ARE
                                                                                                                                                YOUR
                                                                                                                                                PRIVACY
                                                                                                                                                RIGHTS?</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><strong><em>In
                                                                                                                                        Short:</em></strong><em> <span
                                                                                                                                        style="color: rgb(89, 89, 89);"><span
                                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                                data-custom-class="body_text"><em>
                                                                                                                                                    <bdt
                                                                                                                                                        class="block-component">
                                                                                                                                                    </bdt>
                                                                                                                                                </em></span></span> </span>You
                                                                                                                                    may
                                                                                                                                    review,
                                                                                                                                    change,
                                                                                                                                    or
                                                                                                                                    terminate
                                                                                                                                    your
                                                                                                                                    account
                                                                                                                                    at
                                                                                                                                    any
                                                                                                                                    time.</em><span
                                                                                                                                    style="color: rgb(89, 89, 89);"><span
                                                                                                                                        style="font-size: 15px;">
                                                                                                                                        <bdt
                                                                                                                                            class="block-component">
                                                                                                                                    </span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="withdrawconsent"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><strong><u>Withdrawing
                                                                                                                                        your
                                                                                                                                        consent:</u></strong>
                                                                                                                                If
                                                                                                                                we
                                                                                                                                are
                                                                                                                                relying
                                                                                                                                on
                                                                                                                                your
                                                                                                                                consent
                                                                                                                                to
                                                                                                                                process
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information,
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                which
                                                                                                                                may
                                                                                                                                be
                                                                                                                                express
                                                                                                                                and/or
                                                                                                                                implied
                                                                                                                                consent
                                                                                                                                depending
                                                                                                                                on
                                                                                                                                the
                                                                                                                                applicable
                                                                                                                                law,
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                you
                                                                                                                                have
                                                                                                                                the
                                                                                                                                right
                                                                                                                                to
                                                                                                                                withdraw
                                                                                                                                your
                                                                                                                                consent
                                                                                                                                at
                                                                                                                                any
                                                                                                                                time.
                                                                                                                                You
                                                                                                                                can
                                                                                                                                withdraw
                                                                                                                                your
                                                                                                                                consent
                                                                                                                                at
                                                                                                                                any
                                                                                                                                time
                                                                                                                                by
                                                                                                                                contacting
                                                                                                                                us
                                                                                                                                by
                                                                                                                                using
                                                                                                                                the
                                                                                                                                contact
                                                                                                                                details
                                                                                                                                provided
                                                                                                                                in
                                                                                                                                the
                                                                                                                                section
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                "
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                            </span></span></span><a
                                                                                                                        data-custom-class="link"
                                                                                                                        href="#contact"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    data-custom-class="body_text">HOW
                                                                                                                                    CAN
                                                                                                                                    YOU
                                                                                                                                    CONTACT
                                                                                                                                    US
                                                                                                                                    ABOUT
                                                                                                                                    THIS
                                                                                                                                    NOTICE?</span></span></span></a><span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                "
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                below
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                .
                                                                                                                            </span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px;"><span
                                                                                                                            data-custom-class="body_text">However,
                                                                                                                            please
                                                                                                                            note
                                                                                                                            that
                                                                                                                            this
                                                                                                                            will
                                                                                                                            not
                                                                                                                            affect
                                                                                                                            the
                                                                                                                            lawfulness
                                                                                                                            of
                                                                                                                            the
                                                                                                                            processing
                                                                                                                            before
                                                                                                                            its
                                                                                                                            withdrawal
                                                                                                                            nor,
                                                                                                                            <bdt
                                                                                                                                class="block-component">
                                                                                                                            </bdt>
                                                                                                                            when
                                                                                                                            applicable
                                                                                                                            law
                                                                                                                            allows,
                                                                                                                            <bdt
                                                                                                                                class="statement-end-if-in-editor">
                                                                                                                            </bdt>
                                                                                                                            will
                                                                                                                            it
                                                                                                                            affect
                                                                                                                            the
                                                                                                                            processing
                                                                                                                            of
                                                                                                                            your
                                                                                                                            personal
                                                                                                                            information
                                                                                                                            conducted
                                                                                                                            in
                                                                                                                            reliance
                                                                                                                            on
                                                                                                                            lawful
                                                                                                                            processing
                                                                                                                            grounds
                                                                                                                            other
                                                                                                                            than
                                                                                                                            consent.
                                                                                                                            <bdt
                                                                                                                                class="block-component">
                                                                                                                            </bdt>
                                                                                                                        </span></span>
                                                                                                                    <bdt
                                                                                                                        class="block-component">
                                                                                                                        <span
                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                data-custom-class="body_text"></span></span>
                                                                                                                    </bdt>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px;"><span
                                                                                                                            data-custom-class="heading_2"><strong>Account
                                                                                                                                Information</strong></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        data-custom-class="body_text"><span
                                                                                                                            style="font-size: 15px;">If
                                                                                                                            you
                                                                                                                            would
                                                                                                                            at
                                                                                                                            any
                                                                                                                            time
                                                                                                                            like
                                                                                                                            to
                                                                                                                            review
                                                                                                                            or
                                                                                                                            change
                                                                                                                            the
                                                                                                                            information
                                                                                                                            in
                                                                                                                            your
                                                                                                                            account
                                                                                                                            or
                                                                                                                            terminate
                                                                                                                            your
                                                                                                                            account,
                                                                                                                            you
                                                                                                                            can:
                                                                                                                            <bdt
                                                                                                                                class="forloop-component">
                                                                                                                            </bdt>
                                                                                                                        </span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px;"><span
                                                                                                                            data-custom-class="body_text">Upon
                                                                                                                            your
                                                                                                                            request
                                                                                                                            to
                                                                                                                            terminate
                                                                                                                            your
                                                                                                                            account,
                                                                                                                            we
                                                                                                                            will
                                                                                                                            deactivate
                                                                                                                            or
                                                                                                                            delete
                                                                                                                            your
                                                                                                                            account
                                                                                                                            and
                                                                                                                            information
                                                                                                                            from
                                                                                                                            our
                                                                                                                            active
                                                                                                                            databases.
                                                                                                                            However,
                                                                                                                            we
                                                                                                                            may
                                                                                                                            retain
                                                                                                                            some
                                                                                                                            information
                                                                                                                            in
                                                                                                                            our
                                                                                                                            files
                                                                                                                            to
                                                                                                                            prevent
                                                                                                                            fraud,
                                                                                                                            troubleshoot
                                                                                                                            problems,
                                                                                                                            assist
                                                                                                                            with
                                                                                                                            any
                                                                                                                            investigations,
                                                                                                                            enforce
                                                                                                                            our
                                                                                                                            legal
                                                                                                                            terms
                                                                                                                            and/or
                                                                                                                            comply
                                                                                                                            with
                                                                                                                            applicable
                                                                                                                            legal
                                                                                                                            requirements.</span></span>
                                                                                                                    <bdt
                                                                                                                        class="statement-end-if-in-editor">
                                                                                                                        <span
                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                data-custom-class="body_text"></span></span>
                                                                                                                    </bdt>
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><span
                                                                                                                                    style="font-size: 15px;"><span
                                                                                                                                        style="color: rgb(89, 89, 89);"><span
                                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                                style="color: rgb(89, 89, 89);"><span
                                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                                        style="font-size: 15px;"><span
                                                                                                                                                            style="color: rgb(89, 89, 89);">
                                                                                                                                                            <bdt
                                                                                                                                                                class="block-component">
                                                                                                                                                            </bdt>
                                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></span>
                                                                                                                    <bdt
                                                                                                                        class="block-component">
                                                                                                                        <span
                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                data-custom-class="body_text"></span></span>
                                                                                                                    </bdt>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        data-custom-class="body_text"><span
                                                                                                                            style="font-size: 15px;">If
                                                                                                                            you
                                                                                                                            have
                                                                                                                            questions
                                                                                                                            or
                                                                                                                            comments
                                                                                                                            about
                                                                                                                            your
                                                                                                                            privacy
                                                                                                                            rights,
                                                                                                                            you
                                                                                                                            may
                                                                                                                            email
                                                                                                                            us
                                                                                                                            at
                                                                                                                            <bdt
                                                                                                                                class="question">
                                                                                                                                contact@sampurnasuvidhakendra.com
                                                                                                                            </bdt>
                                                                                                                            .
                                                                                                                        </span></span>
                                                                                                                    <bdt
                                                                                                                        class="statement-end-if-in-editor">
                                                                                                                        <span
                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                data-custom-class="body_text"></span></span>
                                                                                                                    </bdt>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="DNT"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">8.
                                                                                                                                                CONTROLS
                                                                                                                                                FOR
                                                                                                                                                DO-NOT-TRACK
                                                                                                                                                FEATURES</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">Most
                                                                                                                                web
                                                                                                                                browsers
                                                                                                                                and
                                                                                                                                some
                                                                                                                                mobile
                                                                                                                                operating
                                                                                                                                systems
                                                                                                                                and
                                                                                                                                mobile
                                                                                                                                applications
                                                                                                                                include
                                                                                                                                a
                                                                                                                                Do-Not-Track
                                                                                                                                (
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                "DNT"
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                )
                                                                                                                                feature
                                                                                                                                or
                                                                                                                                setting
                                                                                                                                you
                                                                                                                                can
                                                                                                                                activate
                                                                                                                                to
                                                                                                                                signal
                                                                                                                                your
                                                                                                                                privacy
                                                                                                                                preference
                                                                                                                                not
                                                                                                                                to
                                                                                                                                have
                                                                                                                                data
                                                                                                                                about
                                                                                                                                your
                                                                                                                                online
                                                                                                                                browsing
                                                                                                                                activities
                                                                                                                                monitored
                                                                                                                                and
                                                                                                                                collected.
                                                                                                                                At
                                                                                                                                this
                                                                                                                                stage
                                                                                                                                no
                                                                                                                                uniform
                                                                                                                                technology
                                                                                                                                standard
                                                                                                                                for
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                recognizing
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                and
                                                                                                                                implementing
                                                                                                                                DNT
                                                                                                                                signals
                                                                                                                                has
                                                                                                                                been
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                finalized
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                .
                                                                                                                                As
                                                                                                                                such,
                                                                                                                                we
                                                                                                                                do
                                                                                                                                not
                                                                                                                                currently
                                                                                                                                respond
                                                                                                                                to
                                                                                                                                DNT
                                                                                                                                browser
                                                                                                                                signals
                                                                                                                                or
                                                                                                                                any
                                                                                                                                other
                                                                                                                                mechanism
                                                                                                                                that
                                                                                                                                automatically
                                                                                                                                communicates
                                                                                                                                your
                                                                                                                                choice
                                                                                                                                not
                                                                                                                                to
                                                                                                                                be
                                                                                                                                tracked
                                                                                                                                online.
                                                                                                                                If
                                                                                                                                a
                                                                                                                                standard
                                                                                                                                for
                                                                                                                                online
                                                                                                                                tracking
                                                                                                                                is
                                                                                                                                adopted
                                                                                                                                that
                                                                                                                                we
                                                                                                                                must
                                                                                                                                follow
                                                                                                                                in
                                                                                                                                the
                                                                                                                                future,
                                                                                                                                we
                                                                                                                                will
                                                                                                                                inform
                                                                                                                                you
                                                                                                                                about
                                                                                                                                that
                                                                                                                                practice
                                                                                                                                in
                                                                                                                                a
                                                                                                                                revised
                                                                                                                                version
                                                                                                                                of
                                                                                                                                this
                                                                                                                                privacy
                                                                                                                                notice.
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                </bdt>
                                                                                                                            </span></span></span></span></span></span></span></span></span></span></span>
                                                                                                                    </bdt>
                                                                                                                    </span></span></span></span></span></span></span></span></span></span>
                                                                                                                    <bdt
                                                                                                                        class="block-component">
                                                                                                                        <span
                                                                                                                            style="font-size: 15px;">
                                                                                                                    </bdt>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="policyupdates"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">9.
                                                                                                                                                DO
                                                                                                                                                WE
                                                                                                                                                MAKE
                                                                                                                                                UPDATES
                                                                                                                                                TO
                                                                                                                                                THIS
                                                                                                                                                NOTICE?</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><em><strong>In
                                                                                                                                        Short: </strong>Yes,
                                                                                                                                    we
                                                                                                                                    will
                                                                                                                                    update
                                                                                                                                    this
                                                                                                                                    notice
                                                                                                                                    as
                                                                                                                                    necessary
                                                                                                                                    to
                                                                                                                                    stay
                                                                                                                                    compliant
                                                                                                                                    with
                                                                                                                                    relevant
                                                                                                                                    laws.</em></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">We
                                                                                                                                may
                                                                                                                                update
                                                                                                                                this
                                                                                                                                privacy
                                                                                                                                notice
                                                                                                                                from
                                                                                                                                time
                                                                                                                                to
                                                                                                                                time.
                                                                                                                                The
                                                                                                                                updated
                                                                                                                                version
                                                                                                                                will
                                                                                                                                be
                                                                                                                                indicated
                                                                                                                                by
                                                                                                                                an
                                                                                                                                updated
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                "Revised"
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                date
                                                                                                                                and
                                                                                                                                the
                                                                                                                                updated
                                                                                                                                version
                                                                                                                                will
                                                                                                                                be
                                                                                                                                effective
                                                                                                                                as
                                                                                                                                soon
                                                                                                                                as
                                                                                                                                it
                                                                                                                                is
                                                                                                                                accessible.
                                                                                                                                If
                                                                                                                                we
                                                                                                                                make
                                                                                                                                material
                                                                                                                                changes
                                                                                                                                to
                                                                                                                                this
                                                                                                                                privacy
                                                                                                                                notice,
                                                                                                                                we
                                                                                                                                may
                                                                                                                                notify
                                                                                                                                you
                                                                                                                                either
                                                                                                                                by
                                                                                                                                prominently
                                                                                                                                posting
                                                                                                                                a
                                                                                                                                notice
                                                                                                                                of
                                                                                                                                such
                                                                                                                                changes
                                                                                                                                or
                                                                                                                                by
                                                                                                                                directly
                                                                                                                                sending
                                                                                                                                you
                                                                                                                                a
                                                                                                                                notification.
                                                                                                                                We
                                                                                                                                encourage
                                                                                                                                you
                                                                                                                                to
                                                                                                                                review
                                                                                                                                this
                                                                                                                                privacy
                                                                                                                                notice
                                                                                                                                frequently
                                                                                                                                to
                                                                                                                                be
                                                                                                                                informed
                                                                                                                                of
                                                                                                                                how
                                                                                                                                we
                                                                                                                                are
                                                                                                                                protecting
                                                                                                                                your
                                                                                                                                information.
                                                                                                                            </span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="contact"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">10.
                                                                                                                                                HOW
                                                                                                                                                CAN
                                                                                                                                                YOU
                                                                                                                                                CONTACT
                                                                                                                                                US
                                                                                                                                                ABOUT
                                                                                                                                                THIS
                                                                                                                                                NOTICE?</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">If
                                                                                                                                you
                                                                                                                                have
                                                                                                                                questions
                                                                                                                                or
                                                                                                                                comments
                                                                                                                                about
                                                                                                                                this
                                                                                                                                notice,
                                                                                                                                you
                                                                                                                                may
                                                                                                                                <span
                                                                                                                                    style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                        data-custom-class="body_text">
                                                                                                                                        <bdt
                                                                                                                                            class="block-component">
                                                                                                                                        </bdt>
                                                                                                                                        email
                                                                                                                                        us
                                                                                                                                        at
                                                                                                                                        <bdt
                                                                                                                                            class="question">
                                                                                                                                            contact@sampurnasuvidhakendra.com
                                                                                                                                        </bdt>
                                                                                                                                        <bdt
                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                        </bdt>
                                                                                                                                    </span></span><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                            data-custom-class="body_text"> or
                                                                                                                                            contact
                                                                                                                                            us
                                                                                                                                            by
                                                                                                                                            post
                                                                                                                                            at:</span></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text"><span
                                                                                                                                    style="font-size: 15px;"><span
                                                                                                                                        style="color: rgb(89, 89, 89);"><span
                                                                                                                                            style="color: rgb(89, 89, 89);"><span
                                                                                                                                                data-custom-class="body_text">
                                                                                                                                                <bdt
                                                                                                                                                    class="question">
                                                                                                                                                    FINSOL
                                                                                                                                                    &
                                                                                                                                                    LEGAL
                                                                                                                                                    (OPC)
                                                                                                                                                    PRIVATE
                                                                                                                                                    LIMITED
                                                                                                                                                </bdt>
                                                                                                                                            </span></span></span></span></span><span
                                                                                                                                data-custom-class="body_text"><span
                                                                                                                                    style="color: rgb(89, 89, 89);"><span
                                                                                                                                        data-custom-class="body_text">
                                                                                                                                        <bdt
                                                                                                                                            class="block-component">
                                                                                                                                        </bdt>
                                                                                                                                        </bdt>
                                                                                                                                    </span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px;"><span
                                                                                                                            data-custom-class="body_text">
                                                                                                                            <bdt
                                                                                                                                class="question">
                                                                                                                                101,RAJ
                                                                                                                                KRISHNA
                                                                                                                                APARTMENT,B.C.
                                                                                                                                Road,
                                                                                                                            </bdt>
                                                                                                                            <span
                                                                                                                                style="color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px;">
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                </span></span>
                                                                                                                        </span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        data-custom-class="body_text"
                                                                                                                        style="font-size: 15px;">
                                                                                                                        <bdt
                                                                                                                            class="question">
                                                                                                                            Phulwari<span
                                                                                                                                data-custom-class="body_text"><span
                                                                                                                                    style="color: rgb(89, 89, 89);"><span
                                                                                                                                        style="font-size: 15px;">
                                                                                                                                        <bdt
                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                        </bdt>
                                                                                                                                    </span></span></span>
                                                                                                                        </bdt>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px;"><span
                                                                                                                            data-custom-class="body_text">
                                                                                                                            <bdt
                                                                                                                                class="question">
                                                                                                                                Patna
                                                                                                                            </bdt>
                                                                                                                            <span
                                                                                                                                style="color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px;">
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                    ,
                                                                                                                                    <bdt
                                                                                                                                        class="question">
                                                                                                                                        Bihar
                                                                                                                                    </bdt>
                                                                                                                                    <bdt
                                                                                                                                        class="statement-end-if-in-editor">
                                                                                                                                    </bdt>
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                    <bdt
                                                                                                                                        class="question">
                                                                                                                                        800001
                                                                                                                                    </bdt>
                                                                                                                                    <bdt
                                                                                                                                        class="statement-end-if-in-editor">
                                                                                                                                    </bdt>
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                    <bdt
                                                                                                                                        class="block-component">
                                                                                                                                    </bdt>
                                                                                                                                </span></span>
                                                                                                                        </span>
                                                                                                                        </bdt>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px;"><span
                                                                                                                            data-custom-class="body_text"><span
                                                                                                                                style="font-size: 15px;"><span
                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                        style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt
                                                                                                                                            class="block-component">
                                                                                                                                        </bdt>
                                                                                                                                    </span></span></span>
                                                                                                                            <bdt
                                                                                                                                class="question">
                                                                                                                                India
                                                                                                                            </bdt>
                                                                                                                            <span
                                                                                                                                style="font-size: 15px;"><span
                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                        style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt
                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                            <span
                                                                                                                                                style="font-size: 15px;"><span
                                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                                        style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt
                                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                                            <span
                                                                                                                                                                style="font-size: 15px;"><span
                                                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                                                        style="color: rgb(89, 89, 89);">
                                                                                                                                                                        <bdt
                                                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                                                        </bdt>
                                                                                                                                                                    </span></span></span>
                                                                                                                                                        </bdt>
                                                                                                                                                        <bdt
                                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                                        </bdt>
                                                                                                                                                    </span></span></span><span
                                                                                                                                                data-custom-class="body_text"><span
                                                                                                                                                    style="color: rgb(89, 89, 89);"><span
                                                                                                                                                        style="font-size: 15px;">
                                                                                                                                                        <bdt
                                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                                        </bdt>
                                                                                                                                                    </span></span></span>
                                                                                                                                        </bdt>
                                                                                                                                    </span></span></span>
                                                                                                                        </span><span
                                                                                                                            data-custom-class="body_text"><span
                                                                                                                                style="font-size: 15px;"><span
                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                        style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt
                                                                                                                                            class="statement-end-if-in-editor">
                                                                                                                                            <span
                                                                                                                                                style="color: rgb(89, 89, 89);"><span
                                                                                                                                                    style="font-size: 15px;"><span
                                                                                                                                                        data-custom-class="body_text">
                                                                                                                                                        <bdt
                                                                                                                                                            class="block-component">
                                                                                                                                                            <bdt
                                                                                                                                                                class="block-component">
                                                                                                                                                            </bdt>
                                                                                                                                                    </span></span></span>
                                                                                                                                    </span></span></span><span
                                                                                                                                style="font-size: 15px;"><span
                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                        style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                            style="font-size: 15px;"><span
                                                                                                                                                data-custom-class="body_text">
                                                                                                                                                <bdt
                                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                                    <bdt
                                                                                                                                                        class="block-component">
                                                                                                                                                    </bdt>
                                                                                                                                            </span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div id="request"
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="color: rgb(127, 127, 127);"><span
                                                                                                                            style="color: rgb(89, 89, 89); font-size: 15px;"><span
                                                                                                                                style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                    style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                        id="control"
                                                                                                                                        style="color: rgb(0, 0, 0);"><strong><span
                                                                                                                                                data-custom-class="heading_1">11.
                                                                                                                                                HOW
                                                                                                                                                CAN
                                                                                                                                                YOU
                                                                                                                                                REVIEW,
                                                                                                                                                UPDATE,
                                                                                                                                                OR
                                                                                                                                                DELETE
                                                                                                                                                THE
                                                                                                                                                DATA
                                                                                                                                                WE
                                                                                                                                                COLLECT
                                                                                                                                                FROM
                                                                                                                                                YOU?</span></strong></span></span></span></span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    style="line-height: 1.5;">
                                                                                                                    <span
                                                                                                                        style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                            style="font-size: 15px; color: rgb(89, 89, 89);"><span
                                                                                                                                data-custom-class="body_text">
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                </bdt>
                                                                                                                                You
                                                                                                                                have
                                                                                                                                the
                                                                                                                                right
                                                                                                                                to
                                                                                                                                request
                                                                                                                                access
                                                                                                                                to
                                                                                                                                the
                                                                                                                                personal
                                                                                                                                information
                                                                                                                                we
                                                                                                                                collect
                                                                                                                                from
                                                                                                                                you,
                                                                                                                                change
                                                                                                                                that
                                                                                                                                information,
                                                                                                                                or
                                                                                                                                delete
                                                                                                                                it.
                                                                                                                                <bdt
                                                                                                                                    class="statement-end-if-in-editor">
                                                                                                                                </bdt>
                                                                                                                                To
                                                                                                                                request
                                                                                                                                to
                                                                                                                                review,
                                                                                                                                update,
                                                                                                                                or
                                                                                                                                delete
                                                                                                                                your
                                                                                                                                personal
                                                                                                                                information,
                                                                                                                                please
                                                                                                                                <bdt
                                                                                                                                    class="block-component">
                                                                                                                                </bdt>
                                                                                                                                fill
                                                                                                                                out
                                                                                                                                and
                                                                                                                                submit
                                                                                                                                a
                                                                                                                            </span><span
                                                                                                                                style="color: rgb(48, 48, 241);"><span
                                                                                                                                    data-custom-class="body_text"><span
                                                                                                                                        style="font-size: 15px;"><a
                                                                                                                                            data-custom-class="link"
                                                                                                                                            href="https://app.termly.io/notify/b4cfe8d7-34f8-49f3-ad90-4035f4421719"
                                                                                                                                            rel="noopener noreferrer"
                                                                                                                                            target="_blank">data
                                                                                                                                            subject
                                                                                                                                            access
                                                                                                                                            request</a></span></span></span>
                                                                                                                            <bdt
                                                                                                                                class="block-component">
                                                                                                                                <span
                                                                                                                                    data-custom-class="body_text">
                                                                                                                            </bdt>
                                                                                                                        </span></span><span
                                                                                                                        data-custom-class="body_text">.</span></span></span>
                                                                                                                </div>
                                                                                                                <style>
                                                                                                                    ul {
                                                                                                                        list-style-type: square;
                                                                                                                    }

                                                                                                                    ul>li>ul {
                                                                                                                        list-style-type: circle;
                                                                                                                    }

                                                                                                                    ul>li>ul>li>ul {
                                                                                                                        list-style-type: square;
                                                                                                                    }

                                                                                                                    ol li {
                                                                                                                        font-family: Arial;
                                                                                                                    }
                                                                                                                </style>

                                                                                                            </div>

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/typed.js/typed.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>
