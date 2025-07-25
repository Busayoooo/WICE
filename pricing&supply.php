<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ChatBot - Wisdom College of Excellence Fish</title>
  <link rel="stylesheet" href="./css/materialize.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./js/materialize.js"></script>
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
      background: linear-gradient(90deg,
          transparent,
          rgba(255, 255, 255, 0.2),
          transparent);
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
  </style>
</head>

<body>
  <header>
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
      <h1 class="section-heading hide-on-med-and-down">Pricing & Supply</h1>
      <h3 class="section-heading hide-on-large-only">Pricing & Supply</h3>
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
        question: "How to make profit",
        answer:
          "Stock quality juvenile, feed well, ensure quality water and maintain good pond management practices. Monitor fish health regularly, control pests and diseases, and harvest at the right time. Consider value-added products like smoked or processed fish to increase profit margins. Marketing your fish effectively through local markets or online platforms can also enhance profitability.",
      },
      {
        question: "How do i calculate the growth of the fish?",
        answer:
          " Feed the fish 2% of their body mass weekly, then use weighing scale to weigh the fish weekly. Record the weight and calculate the growth rate by subtracting the initial weight from the current weight, then divide by the number of weeks to get the average growth per week. This will help you monitor their growth and adjust feeding practices accordingly.",
      },
      {
        question: "How to calculate income and profit?",
        answer:
          "Total amount made after selling the fish is income while the Total Expenditure minus the income is the profit made. To calculate income, multiply the number of fish sold by the selling price per fish. For profit, subtract total costs (including feed, maintenance, and other expenses) from the income. This will give you a clear picture of your financial performance in fish farming.",
      },
      {
        question: "How to calculate feed conversion ratio?",
        answer:
          "The Feed Conversion Ratio (FCR) is calculated by dividing the total feed consumed by the total weight gain of the fish. For example, if you fed your fish 100 kg of feed and they gained 50 kg in weight, the FCR would be 100/50 = 2. This means it takes 2 kg of feed to produce 1 kg of fish.",
      },
      {
        question: "How to calculate stocking density?",
        answer:
          "Stocking density is calculated by dividing the number of fish by the volume of water in the pond or tank. For example, if you have 100 fish in a pond that holds 1000 cubic meters of water, the stocking density would be 100/1000 = 0.1 fish per cubic meter. This helps ensure that fish have enough space to grow and thrive.",
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
      $("#backToMain").hide();
      $(".btn.btn-large").addClass("hidden"); // hide the “Back” link
      $("#answerQuestion").text(questions[index].question);
      $("#answerContent").text(questions[index].answer);
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