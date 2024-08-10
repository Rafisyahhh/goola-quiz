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

<body style="background-image: url('/image/bg_0.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <style>
        #coForm {
            background-color: #ffffff;
            margin: 50px auto;
            width: 70%;
            min-width: 300px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tab {
            display: none;
        }

        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
            background-color: #435ebe;
        }

        .step.finish {
            background-color: #435ebe;
        }

        .address-item-wrap {
            margin-bottom: 12px;
        }

        .address-item-wrap input[type="radio"] {
            display: none;
        }

        .address-item-wrap .address-item-listlabel {
            display: flex;
            gap: 8px;
            align-items: center;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: all .2s;
        }

        .address-item-wrap .address-item-listlabel:hover {
            background-color: #f5f5f5;
        }

        .address-item-wrap .address-item-listlabel::before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 1px solid #ccc;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
            transition: all .2s;
        }

        .address-item-wrap input[type="radio"]:checked+.address-item-listlabel::before {
            background-color: white;
            border-color: white;
            box-shadow: inset 0 0 0 4px #435ebe;
        }

        .address-item-wrap input[type="radio"]:checked+.address-item-listlabel {
            background-color: #435ebe;
            color: white;
            border-color: #435ebe;
        }

        .address-item-wrap input[type="radio"]:checked+.address-item-listlabel p {
            color: white;
            opacity: .75;
        }

        .address-item-wrap .address-item-listlabel .title {
            font-size: 16px;
            margin-bottom: 0.25rem;
        }
    </style>

    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-3 text-center">
                <a href="">
                    <img src="{{ asset('image/logo4.png') }}" alt="image-not-found" width="200">
                </a>
            </div>
        </div>
    </div>

    <form id="coForm" action="{{ route('result') }}" method="POST">
        @csrf

        @foreach ($bank_quiz as $item)
            <div class="tab">
                <section class="pb-4 pt-0">
                    <div class="container text-center">
                        <h3>{{ $loop->iteration }} / {{ $count_quiz }}</h3>
                    </div>
                </section>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <div class="w-100 text-center">
                        @if ($item->image != null)
                            <img src="{{ asset('image/' . $item->image) }}" alt="" class="img-fluid mb-3"
                                style="max-width: 160px; display: block; margin: 0 auto;">
                        @endif
                        <h5 class="fw-bold">
                            {{ $item->question }}
                        </h5>
                    </div>
                </div>
                <!-- Replace with actual options -->
                <div class="row">
                    <div class="col-6">
                        <div class="address-item-wrap" style="background-color: #eff6ff;" >
                            <input type="radio" name="option[{{ $item->id }}]"
                                id="option1_{{ $loop->iteration }}" value="{{ $item->option_1 }}" />
                            <label class="address-item-listlabel" for="option1_{{ $loop->iteration }}">
                                <div class="address-item-list-content">
                                    <div class="title">A. {{ $item->option_1 }}</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="address-item-wrap" style="background-color: #eff6ff;">
                            <input type="radio" name="option[{{ $item->id }}]"
                                id="option2_{{ $loop->iteration }}" value="{{ $item->option_2 }}" />
                            <label class="address-item-listlabel" for="option2_{{ $loop->iteration }}">
                                <div class="address-item-list-content">
                                    <div class="title">B. {{ $item->option_2 }}</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="address-item-wrap" style="background-color: #eff6ff;">
                            <input type="radio" name="option[{{ $item->id }}]"
                                id="option3_{{ $loop->iteration }}" value="{{ $item->option_3 }}" />
                            <label class="address-item-listlabel" for="option3_{{ $loop->iteration }}">
                                <div class="address-item-list-content">
                                    <div class="title">C. {{ $item->option_3 }}</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="address-item-wrap" style="background-color: #eff6ff;">
                            <input type="radio" name="option[{{ $item->id }}]"
                                id="option4_{{ $loop->iteration }}" value="{{ $item->option_4 }}" />
                            <label class="address-item-listlabel" for="option4_{{ $loop->iteration }}">
                                <div class="address-item-list-content">
                                    <div class="title">D. {{ $item->option_4 }}</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="quiz_id" value="{{ $item->quiz_id }}">
        @endforeach

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="ms-auto">
                <button type="button" id="prevBtn" class="btn btn-lg btn-light text-light fw-bold"
                    style="background-color:#435ebe" onclick="nextPrev(-1)">
                    Kembali
                </button>
                <button type="button" id="nextBtn" class="btn btn-lg btn-light text-light fw-bold"
                    style="background-color:#435ebe" onclick="nextPrev(1)">
                    Lanjut
                </button>
            </div>
        </div>
    </form>

    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == x.length - 1) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Lanjut";
            }
            fixStepIndicator(n);
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            // Disable validation temporarily for testing
            // if (n == 1 && !validateForm()) return false;

            // Hide the current tab
            x[currentTab].style.display = "none";

            // Increase or decrease the current tab by 1
            currentTab = currentTab + n;

            // If you have reached the end of the form
            if (currentTab >= x.length) {
                document.getElementById("coForm").submit();
                return false;
            }

            // Otherwise, display the correct tab
            showTab(currentTab);
        }

        function changeTab(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = n;
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

            // A loop that checks every input field in the current tab
            for (i = 0; i < y.length; i++) {
                if (y[i].type === "radio" && !y[i].checked) {
                    // If none of the radio buttons are checked
                    valid = false;
                }
            }

            // If valid, mark the step as finished and valid
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            } else {
                // Optionally show an alert or message to the user if no option is selected
                alert("Please select an option to continue.");
            }

            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>
</body>

</html>
