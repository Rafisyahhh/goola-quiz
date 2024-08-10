<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goola Quiz - Admin</title>


    <link rel="shortcut icon" href="{{ asset('dist-template/assets/compiled/svg/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">
    <link rel="stylesheet" href="{{ asset('dist-template/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist-template/assets/compiled/css/app-dark.css') }}">
    <style>
        .custom-card {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .custom-card .card-img-top {
            height: 200px;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
        }

        .card-body {
            padding: 20px;
            border-radius: 0 0 12px 12px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #435ebe;
            border-color: #435ebe;
        }

        .btn-primary:hover {
            background-color: #3b82f6;
            border-color: #3b82f6;
        }

        .container {
            max-width: 1200px;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <script src="{{ asset('dist-template/assets/static/js/initTheme.js') }}"></script>
    <nav class="navbar navbar-light">
        <div class="container d-flex align-items-center justify-content-between">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('image/logo4.png') }}" alt="Logo" style="height: 60px;"
                    class="d-inline-block align-text-top">
            </a>
            <div class="d-flex align-items-center">
                <div class="dropdown ms-auto">
                    <button class="btn btn-light rounded-pill text-light fw-bold fs-6 dropdown-toggle"
                        style="background-color: #435ebe" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
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
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('admin') }}"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                <button type="button" class="btn btn-primary block" data-bs-toggle="modal"
                    data-bs-target="#border-less"><i class="bi bi-plus-circle"></i> Tambah Soal </button>
            </div>
            <div class="card-body">
                <section class="section">
                    <div class="row" id="basic-table">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Soal Quiz</h4>
                            </div>
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Gambar Soal</th>
                                                <th>Option 1</th>
                                                <th>Option 2</th>
                                                <th>Option 3</th>
                                                <th>Option 4</th>
                                                <th>Point Soal</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($bank_quiz as $item)
                                                <tr>
                                                    <td class="text-bold-500">{{ $item->question }}</td>
                                                    <td class="text-bold-500">
                                                        @if ($item->image == null)
                                                            Tidak ada gambar soal
                                                        @else
                                                            <img src="{{ asset('image/' . $item->image) }}"
                                                                alt="" width="100">
                                                        @endif
                                                    </td>
                                                    <td class="text-bold-500">{{ $item->option_1 }}</td>
                                                    <td class="text-bold-500">{{ $item->option_2 }}</td>
                                                    <td class="text-bold-500">{{ $item->option_3 }}</td>
                                                    <td class="text-bold-500">{{ $item->option_4 }}</td>
                                                    <td class="text-bold-500">{{ $item->point }}</td>
                                                    <td class="text-bold-500">
                                                        @if (!isset($answers[$item->id]))
                                                            <button type="button" class="btn btn-primary block"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#chooseAnswer{{ $item->id }}"><i
                                                                    class="bi bi-pencil-square"></i> Atur Jawaban
                                                            </button>
                                                        @else
                                                            {{ $answers[$item->id]->answer }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8">Tidak ada data soal</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--Modal Tambah-->
    <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Soal</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form class="form form-horizontal" action="{{ route('bankquestion.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first-name-horizontal">Pertanyaan</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <textarea class="form-control" required name="question" id="exampleFormControlTextarea1" rows="3">{{ old('question') }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="contact-info-horizontal">Gambar Soal</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <input type="file" id="contact-info-horizontal" class="form-control"
                                        name="image" placeholder="Masukkan Gambar Soal"
                                        value="{{ old('cover_quiz') }}">
                                    <p>*Opsional bisa dikosongi bila tidak ada</p>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal">Option 1</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <textarea class="form-control" required name="option_1" id="exampleFormControlTextarea1" rows="2">{{ old('option_1') }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal">Option 2</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <textarea class="form-control" required name="option_2" id="exampleFormControlTextarea2" rows="2">{{ old('option_2') }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal">Option 3</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <textarea class="form-control" required name="option_3" id="exampleFormControlTextarea3" rows="2">{{ old('option_3') }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal">Option 4</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <textarea class="form-control" required name="option_4" id="exampleFormControlTextarea4" rows="2">{{ old('option_4') }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="contact-info-horizontal">Point Soal</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <input type="number" id="contact-info-horizontal" class="form-control" required
                                        name="point" placeholder="Masukkan Point Soal"
                                        value="{{ old('point') }}">
                                </div>
                                <input type="hidden" name="quiz_id" value="{{ $quiz_id }}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Batal</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal Pilih Jawaban-->
    @foreach ($bank_quiz as $item)
        <div class="modal fade text-left modal-borderless" id="chooseAnswer{{ $item->id }}" tabindex="-1"
            role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pilih Jawaban Benar</h5>
                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form class="form form-horizontal" action="{{ route('answer.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="row ms-1 gap-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer"
                                            id="option1_{{ $item->id }}" value="{{ $item->option_1 }}">
                                        <label class="form-check-label" for="option1_{{ $item->id }}">
                                            {{ $item->option_1 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer"
                                            id="option2_{{ $item->id }}" value="{{ $item->option_2 }}">
                                        <label class="form-check-label" for="option2_{{ $item->id }}">
                                            {{ $item->option_2 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer"
                                            id="option3_{{ $item->id }}" value="{{ $item->option_3 }}">
                                        <label class="form-check-label" for="option3_{{ $item->id }}">
                                            {{ $item->option_3 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer"
                                            id="option4_{{ $item->id }}" value="{{ $item->option_4 }}">
                                        <label class="form-check-label" for="option4_{{ $item->id }}">
                                            {{ $item->option_4 }}
                                        </label>
                                    </div>
                                    <input type="hidden" name="quiz_id" value="{{ $item->quiz_id }}"
                                        id="">
                                    <input type="hidden" name="bank_question_id" value="{{ $item->id }}"
                                        id="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Batal</span>
                            </button>
                            <button type="submit" class="btn btn-primary ms-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Pilih Jawaban</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <script src="{{ asset('dist-template/assets/compiled/js/app.js') }}"></script>

</body>

</html>
