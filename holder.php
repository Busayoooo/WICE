<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="./css/materialize.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <title>Contact Us - WCE Iwopin</title>

  <style>
    :root {
      --primary-blue: #1565C0;
      --light-blue: #42A5F5;
      --primary-pink: #E91E63;
      --light-pink: #F06292;
      --text-dark: #2c3e50;
      --text-light: #7f8c8d;
      --bg-light: #f8fafc;
      --white: #ffffff;
      --shadow-light: rgba(0, 0, 0, 0.1);
      --shadow-medium: rgba(0, 0, 0, 0.15);
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--bg-light), #e3f2fd);
      color: var(--text-dark);
      line-height: 1.6;
    }

    .hero-banner {
      position: relative;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
      overflow: hidden;
    }

    .hero-banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('./img/20240214_125218.jpg') center/cover no-repeat;
      opacity: 0.2;
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: var(--white);
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero-subtitle {
      font-size: 1.2rem;
      font-weight: 300;
      max-width: 600px;
      margin: 0 auto;
      opacity: 0.9;
    }

    @media (max-width: 768px) {
      .hero-title { font-size: 2.5rem; }
      .hero-subtitle { font-size: 1rem; padding: 0 20px; }
    }

    .main-content {
      padding: 80px 20px;
      min-height: 100vh;
    }

    .contact-container {
      max-width: 1200px;
      margin: auto;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 60px;
    }

    @media (max-width: 768px) {
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }
    }

    .contact-info, .form-section {
      background: var(--white);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px var(--shadow-light);
      transform: translateY(50px);
      opacity: 0;
    }

    .contact-info { animation: slideInLeft 0.8s ease-out 0.2s forwards; }
    .form-section { animation: slideInRight 0.8s ease-out 0.4s forwards; }

    .contact-info h2, .form-section h2 {
      text-align: center;
      color: var(--primary-blue);
      margin-bottom: 30px;
      font-weight: 600;
      font-size: 2rem;
    }

    .contact-item {
      display: flex;
      margin-bottom: 25px;
      padding: 20px;
      border-radius: 15px;
      background: linear-gradient(135deg, #f8fafc, #e3f2fd);
      transition: 0.3s ease;
    }

    .contact-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px var(--shadow-medium);
    }

    .contact-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
      border-radius: 50%;
      color: var(--white);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 20px;
    }

    .contact-details h4 {
      margin: 0 0 5px;
      font-weight: 600;
      color: var(--text-dark);
    }

    .contact-details p, .contact-details a {
      margin: 0;
      color: var(--text-light);
      font-size: 0.95rem;
    }

    .contact-details a:hover {
      color: var(--primary-pink);
    }

    .form-section p {
      color: var(--text-light);
      text-align: center;
      margin-bottom: 30px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 25px;
    }

    @media (max-width: 768px) {
      .form-row {
        grid-template-columns: 1fr;
      }
    }

    .form-input, .form-textarea {
      width: 100%;
      padding: 15px 20px;
      font-size: 1rem;
      border: 2px solid #e1e8ed;
      border-radius: 12px;
      background: #f8fafc;
      font-family: 'Poppins', sans-serif;
      transition: 0.3s;
    }

    .form-input:focus, .form-textarea:focus {
      outline: none;
      border-color: var(--primary-blue);
      background: var(--white);
      box-shadow: 0 0 0 3px rgba(21, 101, 192, 0.1);
    }

    .submit-btn {
      width: 100%;
      padding: 18px;
      border: none;
      border-radius: 12px;
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--white);
      background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
      cursor: pointer;
      transition: 0.3s;
    }

    .submit-btn:hover {
      background: linear-gradient(135deg, var(--primary-pink), var(--light-pink));
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(21, 101, 192, 0.3);
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-50px); }
      to { opacity: 1; transform: translateX(0); }
    }

    @keyframes slideInRight {
      from { opacity: 0; transform: translateX(50px); }
      to { opacity: 1; transform: translateX(0); }
    }

    .floating-element {
      position: absolute;
      opacity: 0.1;
      animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
    .floating-element:nth-child(2) { top: 20%; right: 10%; animation-delay: 2s; }
    .floating-element:nth-child(3) { bottom: 10%; left: 20%; animation-delay: 4s; }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }
  </style>
</head>
<body>

  <!-- Floating Icons -->
  <div class="floating-element">
    <i class="material-icons" style="font-size: 60px; color: var(--light-blue);">school</i>
  </div>
  <div class="floating-element">
    <i class="material-icons" style="font-size: 40px; color: var(--light-pink);">mail</i>
  </div>
  <div class="floating-element">
    <i class="material-icons" style="font-size: 50px; color: var(--light-blue);">phone</i>
  </div>

  <!-- Hero -->
  <section class="hero-banner">
    <div class="hero-content">
      <h1 class="hero-title">Contact Us</h1>
      <p class="hero-subtitle">We're here to help and answer any questions you might have. We look forward to hearing from you!</p>
    </div>
  </section>

  <!-- Main Content -->
  <section class="main-content">
    <div class="contact-container">
      <div class="contact-grid">

        <!-- Contact Info -->
        <div class="contact-info">
          <h2>Get in Touch</h2>

          <div class="contact-item">
            <div class="contact-icon"><i class="material-icons">location_on</i></div>
            <div class="contact-details">
              <h4>Our Address</h4>
              <p>Behind Chief Omokemi House,<br>Moborode Street, Iwopin,<br>Ogun State, Nigeria</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon"><i class="material-icons">email</i></div>
            <div class="contact-details">
              <h4>Email Us</h4>
              <p><a href="mailto:Wceiwopin@gmail.com">Wceiwopin@gmail.com</a></p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon"><i class="material-icons">phone</i></div>
            <div class="contact-details">
              <h4>Call Us</h4>
              <p><a href="tel:+2348012345678">+234 801 234 5678</a></p>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="form-section">
          <h2>Send a Message</h2>
          <p>Use the form below to reach us directly.</p>
          <form id="contact-form">
            <div class="form-row">
              <input type="text" class="form-input" name="name" placeholder="Your Name" required>
              <input type="email" class="form-input" name="email" placeholder="Your Email" required>
            </div>
            <textarea name="message" class="form-textarea" placeholder="Your Message" required></textarea>
            <button type="submit" class="submit-btn">Send Message</button>
          </form>
        </div>

      </div>
    </div>
  </section>

</body>
</html>
