<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChatBot - Wisdom College of Excellence Fish</title>
    <link rel="stylesheet" href="./css/materialize.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }

      .section-heading {
        font-weight: 700;
        margin-bottom: 50px;
        position: relative;
      }

      .section-heading::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #2196f3, #e91e63);
        border-radius: 2px;
      }

      .bold-txt {
        font-weight: bold;
      }

      .navbar {
        background: white !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      .question-list-page {
        animation: fadeIn 0.5s ease-in-out;
      }

      .question-list-page.hidden {
        display: none;
      }

      .question-btn {
        border-radius: 30px !important;
        position: relative;
        overflow: hidden;
      }

      .question-btn::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
          90deg,
          transparent,
          rgba(255, 255, 255, 0.2),
          transparent
        );
        transition: left 0.5s;
      }

      .question-btn:hover::before {
        left: 100%;
      }

      .answer-page {
        display: none;
        animation: fadeIn 0.5s ease-in-out;
      }

      .answer-page.active {
        display: block;
      }

      .back-btn {
        margin-top: 30px;
        border-radius: 25px;
        background-color: #2196f3;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }
      .rounded {
        border: solid transparent;
        border-radius: 40px;
      }
      .hidden {
        display: none !important;
      }
    </style>
  </head>

  <body>
    <header >
    <div class="navbar-fixed z-depth-2">
      <nav class="nav-wrapper navbar">
        <div class="container">
          <div class="row">
            <div class="col l2 s12 center-on-small-only">
              <a href="index.php" class="brand-logo bold-txt primary-text"><img src="./img/logo.png" alt=""
                  width="70px" /></a>
            </div>
            <div class="col l8 s12 center hide-on-med-and-down">
              <h5 href="index.php" class="blue-text nav-link bold-txt">ChatBot - WICE Fish Farm </h5>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

    <br />
    <div class="container">
      <div class="center">
        <h1 class="section-heading hide-on-med-and-down">Farm Routines</h1>
        <h3 class="section-heading hide-on-large-only">Farm Routines</h3>
        <p class="grey-text text-darken-2">
          Click on any question to discover the answer
        </p>
      </div>

      <div class="content">
        <div class="question-list-page" id="questionListPage">
          <div class="question-list row" id="questionList">
            <!-- Questions inserted by jQuery -->
          </div>
        </div>
        <a href="chatbot" id="backToMain" class="btn btn-large blue white-text right rounded"><i
          class="material-icons left">chevron_left</i>
        Back
      </a>

        <div class="answer-page" id="answerPage">
          <div class="answer-header">
            <h2 id="answerQuestion"></h2>
          </div>
          <div class="answer-content" id="answerContent"></div>
          <button class="back-btn" id="goBackBtn">← Back to Questions</button>
        </div>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
            const questions = [
              {
                question: "Daily routines for WICE/WISE farm",
                answer:
                "1. 7:00 AM: Morning health check (observe behavior, remove dead fish) and pond checks for any visible sign of disease or stress to prevent outbreak (check the tanks for broken parts, inlet and outlet systems). <br> <br> 2. 8:00 AM: Observe physical water quality ( colour, odour etc) <br> <br> 3. 8:00 AM: Disinfect farm equipment(that wasn't disinfected yesterday) and wash your hands before and after feeding. <br> <br> 4. 9:00 AM: Morning feeding (2-5% body weight, monitor consumption). <br> <br> 5. 2:00 PM: Afternoon health and equipment check. <br> <br> 6. 5:30 PM: Evening feeding (split daily ration). <br> <br> 7. 6:00 PM: Monitor and Record water quality, feed, health, and biosecurity data for the day. <br> <br> 8. 7:00 PM: Evening biosecurity and security check (footbaths, gates)."
              },
              {
                question: "Monthly routines for WICE/WISE farm",
                answer:
                  "Test water quality(pH, ammonia, DO, temperature) and change your pond water for ponds with depleted water quality.",
              },
            ];

            // Render questions
            function renderQuestions() {
              const $questionList = $("#questionList");
              $questionList.empty();

              $.each(questions, function (index, item) {
                const $col = $("<div>").addClass("col s12 m6");
                const $btn = $("<a>")
                  .addClass(
                    "btn-large waves-effect waves-light blue lighten-1 white-text question-btn z-depth-2"
                  )
                  .css({ width: "100%", marginBottom: "20px" })
                  .text(item.question)
                  .on("click", function () {
                    showAnswer(index);
                  });
                $col.append($btn);
                $questionList.append($col);
              });
            }

            function showAnswer(index) {
              $("#questionListPage").hide();
              $("#answerPage").fadeIn().addClass("active");
              $(".btn.btn-large").addClass("hidden"); // hide the top “Back” link
              $("#answerQuestion").text(questions[index].question);
              $("#answerContent").html(questions[index].answer);
            }

            function goBack() {
              $("#answerPage").hide().removeClass("active");
              $("#questionListPage").fadeIn();
              $(".btn.btn-large").removeClass("hidden"); // uncover the “Back” link again
            }

            $(document).ready(function () {
              renderQuestions();

              $("#goBackBtn").on("click", goBack);
            });
    </script>
  </body>
</html>
