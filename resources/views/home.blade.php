<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goola Quiz - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color:#eff6ff">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .text {
            font-size: 70px;
            margin-top: 120px;
        }

        .image {
            margin-top: 30px;
            margin-left: 30px;
        }

        .card {
            margin: 0.5em;
        }
    </style>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#435ebe">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ URL::asset('image/logo2.png') }}" alt="Logo" height="40"
                    class="d-inline-block align-text-top">
                <span class="ms-2 fw-bold text-white">Goola Quiz</span>
            </a>
            <div class="navbar-nav">
                <div class="dropdown">
                    <button class="btn btn-light rounded-pill text-light fw-bold fs-6 dropdown-toggle"
                        style="background-color: #435ebe" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <img src="{{ 'image/diabet3.png' }}" class="img-fluid d-none d-md-block mt-4" alt=""
                    width="500">
                <img src="{{ 'image/diabet3.png' }}" class="img-fluid d-md-none" alt="" width="300">
            </div>
            <div class="col-md-6 col-lg-7">
                <div class="d-flex justify-content-center">
                    <h1 class="fw-bold text-center d-none d-md-block"
                        style="color:#435ebe;font-size: 70px;margin-top:170px">Goola Quiz</h1>
                    <h1 class="fw-bold text-center d-md-none" style="color:#435ebe;font-size: 40px;">Goola Quiz</h1>
                </div>
                <p class="text-dark fs-5 text-center d-none d-md-block">Selamat datang di <span class="fw-bold"
                        style="color:#435ebe">Goola Quiz</span>, platform interaktif yang dirancang khusus untuk
                    menguji dan memperluas pengetahuan Anda tentang diabetes. Apakah Anda seorang pasien, caregiver,
                    atau profesional kesehatan, situs ini menawarkan berbagai kuis yang menarik dan mendidik untuk semua
                    tingkat pengetahuan.</p>
                <p class="text-dark text-center d-md-none" style="font-size: 15px">Selamat datang di <span
                        class="fw-bold" style="color:#435ebe">Diabet Quiz</span>, platform interaktif yang dirancang
                    khusus untuk
                    menguji dan memperluas pengetahuan Anda tentang diabetes. Apakah Anda seorang pasien, caregiver,
                    atau profesional kesehatan, situs ini menawarkan berbagai kuis yang menarik dan mendidik untuk semua
                    tingkat pengetahuan.</p>
            </div>
        </div>
    </div>
    @forelse ($quiz as $item)
        <div class="py-4" style="background-color:#eff6ff">
            <div class="container">
                <div class="card mb-3 mt-4"
                    style="max-width: 100%; border-radius:30px; box-shadow: 0 4px 6px rgba(0,0,0,.1); background-color: #fff;">
                    <div class="row g-0 mt-4">
                        <div class="col-md-5 col-lg-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('image/'.$item->cover_quiz) }}" alt="" width="250"
                                style="border-radius:50%; padding:15px">
                        </div>
                        <div class="col-md-7 col-lg-8">
                            <div class="card-body p-4">
                                <h1 class="fw-bold d-none d-md-block" style="font-size: 50px;">{{$item->quiz_name}}</h1>
                                <h1 class="fw-bold text-center d-md-none">{{$item->quiz_name}}</h1>
                                <p class="card-text d-none d-lg-block">{{$item->description}}</p>
                                <a href="{{ route('quiz', $item->id) }}" class="btn btn-primary fs-5 text-light btn-sm w-100"
                                    style="border-radius:20px; background-color:#435ebe"
                                    style="transition: all 0.3s ease-in-out; background-color:#435ebe"
                                    onMouseOver="this.style.backgroundColor='black'"
                                    onMouseOut="this.style.backgroundColor='#435ebe'">Kerjakan Quiz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
     <p>Belum Ada Quiz</p>
    @endforelse
    <div class="pt-5 mt-4" style="background-color:#435ebe">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <img src="{{ asset('image/logo.png') }}" alt="" width="280px" style="border-radius:20px;">
                </div>
                <div class="col-md-8">
                    <p class="fs-4 fw-bold text-light">Goola Quiz</p>
                    <div class="fs-5 text-light">
                        SMAN 1 Talun, Jalan Raya Gogolatar, Kaweron, Kec. Talun, Kabupaten Blitar, Jawa Timur 66183
                        <br>
                        email : sman1talun_blitar@yahoo.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#435ebe">
        <a class="navbar-brand mx-auto mt-3" href="#">2024 &copy; Goola Quiz</a>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
