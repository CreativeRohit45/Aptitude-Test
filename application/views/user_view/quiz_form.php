<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Aptitude Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include SweetAlert from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>


    <!-- Common Styles -->
    <style>
        body {
            background-color: #f0f0f0;
            user-select: none;
        }

        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333333;
            text-align: center;
            margin-bottom: 30px;
        }

        .alert {
            margin-bottom: 20px;
        }

        .timer {
            text-align: center;
            font-size: 20px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .panel {
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .panel-heading {
            background-color: #333333;
            color: #ffffff;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .panel-body {
            padding: 20px;
        }

        .radio-label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 10px;
            background-color: #f2f2f2;
        }

        .radio-inline {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #333333;
            border: none;
            border-radius: 5px;
            padding: 12px 24px;
            font-size: 18px;
            cursor: pointer;
            display: block;
            margin: 20px auto; /* Center the button */
        }

         /* Responsive styles for SweetAlert */
         @media (max-width: 576px) {
            .swal2-popup {
                font-size: 14px;
            }

            .swal2-title {
                font-size: 18px !important;
            }

            .swal2-html-container {
                font-size: 16px !important;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mt-3 mb-4">Aptitude Test</h2>
    <!-- Timer Display -->
    <div class="timer" id="timer">Time Left: <span id="remainingTime">1:00:00</span></div>

    <!-- Instructions -->
    <div class="alert alert-info">
        <strong>Instructions:</strong>
        <ul>
            <li>This test has a duration of 60 minutes.</li>
            <li>All questions are mandatory.</li>
            <li>Do not refresh or switch the window/tab during the test.</li>
        </ul>
    </div>

    <!-- Questions Form -->
    <form action="<?php echo base_url('submit')?>" method="post" id="quizForm">
        <?php foreach ($questions as $question): ?>
            <div class="panel panel-default">
                <div class="panel-heading text-white"><?= $question['q_text'] ?></div>
                <div class="panel-body">
                    <div class="radio-inline">
                        <label class="radio-label">
                            <input type="radio" name="q<?= $question['q_id'] ?>" value="1"> <?= $question['option_1'] ?>
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label class="radio-label">
                            <input type="radio" name="q<?= $question['q_id'] ?>" value="2"> <?= $question['option_2'] ?>
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label class="radio-label">
                            <input type="radio" name="q<?= $question['q_id'] ?>" value="3"> <?= $question['option_3'] ?>
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label class="radio-label">
                            <input type="radio" name="q<?= $question['q_id'] ?>" value="4"> <?= $question['option_4'] ?>
                        </label>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Function to clear storage
    function clearStorage() {
        localStorage.removeItem('answeredQuestions');
        localStorage.removeItem('endTime');
        sessionStorage.clear();
    }

    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Right-clicking is disabled on this page.',
        });
    });

    // Function to show the alert on page load
    function showAlertOnLoad() {
        Swal.fire({
            icon: 'info',
            title: 'Important Notice',
            html: 'Please do not refresh or switch tabs during the test. Your test will be automatically submitted.',
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Clear local storage and session storage when a new user logs in
        clearStorage();

        // Show the alert on page load
        showAlertOnLoad();

        var answeredQuestions = sessionStorage.getItem('answeredQuestions') ? JSON.parse(sessionStorage.getItem('answeredQuestions')) : {};
        var startTime = sessionStorage.getItem('startTime') || new Date().getTime();
        var elapsedTime = sessionStorage.getItem('elapsedTime') || 0;

        for (var questionId in answeredQuestions) {
            var selectedAnswer = answeredQuestions[questionId];
            if (selectedAnswer) {
                $("input[name='q" + questionId + "'][value='" + selectedAnswer + "']").prop('checked', true);
            }
        }

        $('input[type="radio"]').on('change', function () {
            var questionId = $(this).attr('name').substring(1);
            answeredQuestions[questionId] = $(this).val();
            sessionStorage.setItem('answeredQuestions', JSON.stringify(answeredQuestions));
        });

        // Calculate remaining time based on elapsed time
        var remainingMilliseconds = Math.max(3600000 - elapsedTime, 0); // 1 hour in milliseconds
        startTimer(remainingMilliseconds);
    });

    function startTimer(remainingMilliseconds) {
        var x = setInterval(function () {
            var hours = Math.floor((remainingMilliseconds % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((remainingMilliseconds % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((remainingMilliseconds % (1000 * 60)) / 1000);

            document.getElementById("remainingTime").innerHTML = hours + ":" + minutes + ":" + seconds;

            remainingMilliseconds -= 1000;

            // Save elapsed time to sessionStorage
            sessionStorage.setItem('elapsedTime', 3600000 - remainingMilliseconds);

            if (remainingMilliseconds < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "Time Expired!";
                document.getElementById("quizForm").submit();
            }
        }, 1000);
    }
</script>

</body>
</html>