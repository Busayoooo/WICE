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
        <h1 class="section-heading hide-on-med-and-down">About The Fish</h1>
        <h3 class="section-heading hide-on-large-only">About The Fish</h3>
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
        <a
          href="chatbot.html"
          class="btn btn-large blue white-text right rounded"
          >Back</a
        >

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
          question: "How to stock the fish pond?",
          answer:
            "To stock a fish pond, you need to consider the size of the pond, the type of fish you want to introduce, and the existing ecosystem. Start by testing the water quality and ensuring it is suitable for fish. Choose fish species that are compatible with each other and the pond environment. Prepare the tank or pond or reservoir with quality water, allow to rest for 2 days before introducing your fish gently.",
        },
        {
          question: "How to hatch fish?",
          answer:
            "Get matured eggs from a broodstock, get sperm from the male, prepare your hatchery with quality water, mix sperm and egg, spread gently in the hatching tray or hapas in the quality water prepared in the hatchery. Maintain optimal water temperature and oxygen levels, and ensure proper aeration. After a few days, the eggs will hatch into fry. Feed them with appropriate starter feed and maintain water quality to ensure healthy growth.",
        },
        {
          question: "What causes fish to die?",
          answer:
            "Overfeeding, poor quality water, poor quality water leading to contamination or infection, low oxygen levels, high ammonia or nitrite levels, and diseases can cause fish to die. Stress from overcrowding, sudden temperature changes, or poor handling can also lead to mortality. Regularly monitor water quality parameters, maintain a balanced diet, and ensure proper stocking density to prevent fish deaths.",
        },
        {
          question: "What makes fish to be sick?",
          answer:
            "Fish can become sick due to various factors, including poor water quality, inadequate nutrition, stress from overcrowding, and the presence of pathogens such as bacteria, viruses, and parasites. Common signs of illness in fish include abnormal swimming behavior, loss of appetite, discoloration, and visible lesions. To prevent fish diseases, it's essential to maintain optimal water conditions, provide a balanced diet, and practice good hygiene in the aquarium or pond.",
        },
        {
          question: "Why are my fish eating themselves?",
          answer:
            "Inadequate feeding, stocking oversized fish with smaller fishes, poor quality feeding, or stress can lead to fish eating themselves. This behavior, known as cannibalism, often occurs when fish are hungry or when they feel threatened. To prevent this, ensure that you provide a balanced diet, maintain appropriate stocking densities, and create a stress-free environment with adequate hiding spots and space for all fish.",
        },
        {
          question: "What are the feeding methods?",
          answer:
            "Calculate 2% body mass to feed, Maintain feeding quantity and frequency based on the fish species and their growth stage. Common feeding methods include manual feeding, automatic feeders, broadcast feeding, target feeding, and supplemental feeding. Manual feeding involves hand-feeding fish with pellets or flakes, while automatic feeders dispense pre-measured amounts of food at scheduled intervals. Broadcast feeding scatters food across the water surface, allowing fish to forage naturally. Target feeding delivers food directly to specific fish, and supplemental feeding provides occasional treats like live or frozen foods to enhance nutrition.",
        },
        {
          question: "How do i construct a fish pond?",
          answer:
            "Earthen or concrete or movable water reservoirs. Determine size, quantity of fish to stock, ensure water quality is good before stocking fish and maintain water quality throughout the life of the fish. Ensure proper drainage, aeration, and filtration systems are in place to maintain water quality. Regularly monitor water parameters such as pH, ammonia, nitrite, and nitrate levels to ensure a healthy environment for the fish.",
        },
        {
          question: "What are the parts of a fish?",
          answer:
            "The main parts of a fish include the head, body, and tail. The head contains the eyes, mouth, and gills, which are essential for feeding and breathing. The body is covered in scales and contains the internal organs, including the stomach and intestines. The tail is used for propulsion and steering in the water.",
        },
        {
          question: "What are the types of fresh water fish?",
          answer:
            "There are many types of freshwater fish, including popular species such as Tilapia spp, Catfish spp, Heterobranchus spp, Heterotis spp, Gymnarchus spp, Trout, and Bass. Each species has its own specific habitat requirements, feeding habits, and growth rates. When selecting freshwater fish for farming or aquariums, it's important to consider these factors to ensure a healthy and sustainable environment.",
        },
        {
          question: "How to calculate the weight of a fish?",
          answer: "Use the weighing scale to calculate the weight in Kg. ",
        },
        {
          question: "what do fish eat?",
          answer: "A balanced diet compounded into pellets. ",
        },
        {
          question: "How to catch fish?",
          answer:
            "There are many methods you can use to catch fish, which are nets and traps.",
        },
        {
          question: "What is Fish Production?",
          answer:
            "This is the operation of fish farm from start, marketing  and preparing for restocking",
        },
        {
          question: "What are the breeds of fish?",
          answer:
            "There are different type of breed eg catfish has the Clarias gariepinus and Heterbanchus spp",
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
