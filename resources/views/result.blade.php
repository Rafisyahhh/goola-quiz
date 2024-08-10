<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goola Quiz - Result</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="{{ asset('version-5/assets/css/all.min.css') }}">
    <!-- Google fonts include -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="{{ asset('version-5/assets/css/bootstrap.min.css') }}">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="{{ asset('version-5/assets/css/animate.min.css') }}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{ asset('version-5/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <style>
        .icon-container {
            background-color: #f0f8ff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 15px;
        }

        .icon-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .icon-box {
            margin-bottom: 10px;
        }

        .icon-large {
            font-size: 60px;
            color: #435ebe;
            transition: color 0.3s ease;
        }

        .icon-text-large {
            font-size: 30px;
            color: #435ebe;
            margin: 5px 0;
        }

        .icon-label-large {
            font-size: 20px;
            color: #435ebe;
            margin: 0;
        }

        .avatar {
            margin-right: 10px;
        }

        @media (max-width: 767px) {
            .icon-large {
                font-size: 40px;
                /* Smaller icon size for mobile */
            }

            .icon-text-large {
                font-size: 20px;
                /* Smaller text size for mobile */
            }

            .icon-label-large {
                font-size: 15px;
                /* Smaller label size for mobile */
            }

            .icon-container {
                padding: 10px;
                /* Reduced padding for mobile */
                margin: 10px 0;
                /* Reduced margin for mobile */
            }
        }
    </style>
    <div class="wrapper">
        <!-- Top content -->
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-9">
                    <div class="logo_area pt-5 m-0">
                        <a href="index.html">
                            <img src="{{ 'image/logo4.png' }}" alt="image-not-found ps-0" class="d-md-none" width="120">
                            <img src="{{ 'image/logo4.png' }}" alt="image-not-found" class="d-none d-md-block"
                                width="200">
                        </a>
                    </div>
                </div>
                <div class="col-3 col-md-3 text-end pt-5">
                    <a href="{{ route('home') }}"class="d-none d-md-block">
                        <i class="bi bi-house-door-fill" style="font-size: 50px;color:#435ebe;"></i>
                    </a>
                    <a href="{{ route('home') }}"class="d-md-none">
                        <i class="bi bi-house-door-fill" style="font-size: 30px;color:#435ebe;"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="multisteps_form overflow-hidden position-relative" style="margin-top: 40px" id="wizard">
                <!------------------------- Step-1 ----------------------------->
                <div class="multisteps_form_panel">
                    <div class="container">
                        <div class="question_title pt-0">
                            <h1 class="text-center py-3 animate__animated animate__fadeInRight animate_25ms"
                                style="background-color: #f0f8ff">
                                <div class="d-flex justify-content-center">
                                    <div class="avatar avatar-xl">
                                        <i class="bi bi-person-circle d-md-none"
                                            style="font-size: 50px;color:#435ebe"></i>
                                        <i class="bi bi-person-circle d-none d-md-block"
                                            style="font-size: 80px;color:#435ebe"></i>
                                    </div>
                                    <div class="ms-3 name text-center">
                                        <h5 class="font-bold  d-md-none mt-1" style="font-size: 40px;color:#435ebe">
                                            {{ Auth::user()->name }}</h5>
                                        <h5 class="font-bold d-none d-md-block mt-2"
                                            style="font-size: 60px;color:#435ebe">{{ Auth::user()->name }}</h5>
                                    </div>
                                </div>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="question_title">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center icon-container">
                                        <div class="d-flex align-items-center justify-content-center icon-box">
                                            <i class="bi bi-check-square icon-large"></i>
                                        </div>
                                        <div class="d-flex flex-column align-items-center text-box">
                                            <h5 class="icon-text-large">{{$correctCount}}</h5>
                                            <p class="icon-label-large">Benar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="question_title">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center icon-container">
                                        <div class="d-flex align-items-center justify-content-center icon-box">
                                            <i class="bi bi-x-square icon-large"></i>
                                        </div>
                                        <div class="d-flex flex-column align-items-center text-box">
                                            <h5 class="icon-text-large">{{$wrongCount}}</h5>
                                            <p class="icon-label-large">Salah</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="question_title">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center icon-container">
                                        <div class="d-flex align-items-center justify-content-center icon-box">
                                            <i class="bi bi-bookmark-check icon-large"></i>
                                        </div>
                                        <div class="d-flex flex-column align-items-center text-box">
                                            <h5 class="icon-text-large">{{$totalPoints}}</h5>
                                            <p class="icon-label-large">Poin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="question_title">
                            <div class="d-flex flex-column icon-container">
                                <div class="d-flex flex-column text-box">
                                    <h5 class="icon-text-large">Kesimpulan:</h5>
                                    <p class="icon-label-large">{{$conclusion}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery-js include -->
    <script src="{{ asset('version-5/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- jquery-count-down include -->
    <script src="{{ asset('version-5/assets/js/countdown.js') }}"></script>
    <!-- Bootstrap-js include -->
    <script src="{{ asset('version-5/assets/js/bootstrap.min.js') }}"></script>
    <!-- jQuery-validate-js include -->
    <script src="{{ asset('version-5/assets/js/jquery.validate.min.js') }}"></script>
    <!-- Custom-js include -->
    <script src="{{ asset('version-5/assets/js/script.js') }}"></script>
    <script type="text/javascript">
        $('#getting-started').countdown('2020/07/25', function(event) {
            $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
        });
    </script>
</body>

</html>
