<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Tailvra Care | Trusted Pet Services</title>
  <meta name="description" content="Premium pet sitting, dog walking, grooming, boarding, daycare and training. Trusted care for your furry family.">
  <!-- Google Fonts & Font Awesome -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..700&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* ---------- RESET & VARIABLES ---------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --cream: #fefaf5;
      --white: #ffffff;
      --warm-brown: #6b4e3a;
      --soft-peach: #f9e2d2;
      --accent-coral: #e58b6b;
      --accent-coral-dark: #c96f4f;
      --muted-sage: #b7c9b1;
      --soft-gray: #f3efea;
      --text-dark: #2d2a24;
      --text-light: #5a5248;
      --shadow-sm: 0 8px 20px rgba(0, 0, 0, 0.04);
      --shadow-md: 0 12px 28px rgba(0, 0, 0, 0.06);
      --shadow-lg: 0 20px 40px rgba(0, 0, 0, 0.08);
      --radius-card: 28px;
      --radius-btn: 50px;
      --transition: 0.25s ease;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--cream);
      color: var(--text-dark);
      line-height: 1.6;
      font-size: 1rem;
      overflow-x: hidden;
    }

    h1, h2, h3, h4 {
      font-family: 'Quicksand', sans-serif;
      font-weight: 600;
      line-height: 1.25;
      color: var(--text-dark);
    }

    h1 { font-size: clamp(2.2rem, 6vw, 3.8rem); }
    h2 { font-size: clamp(1.9rem, 4vw, 2.8rem); }
    h3 { font-size: clamp(1.3rem, 3vw, 1.8rem); }

    a {
      text-decoration: none;
      color: inherit;
      transition: color var(--transition);
    }

    img {
      max-width: 100%;
      display: block;
      height: auto;
      object-fit: cover;
    }

    ul {
      list-style: none;
    }

    .container {
      width: 90%;
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* ---------- BUTTONS ---------- */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.85rem 2rem;
      border-radius: var(--radius-btn);
      font-weight: 600;
      font-size: 1rem;
      transition: all var(--transition);
      cursor: pointer;
      border: none;
      background-color: var(--accent-coral);
      color: white;
      box-shadow: 0 6px 16px rgba(229, 139, 107, 0.3);
      line-height: 1.3;
      white-space: nowrap;
    }

    .btn:hover {
      background-color: var(--accent-coral-dark);
      transform: translateY(-2px);
      box-shadow: 0 10px 22px rgba(229, 139, 107, 0.4);
    }

    .btn-outline {
      background-color: transparent;
      color: var(--text-dark);
      border: 2px solid var(--text-dark);
      box-shadow: none;
    }

    .btn-outline:hover {
      background-color: var(--text-dark);
      color: white;
      transform: translateY(-2px);
    }

    .btn-small {
      padding: 0.6rem 1.4rem;
      font-size: 0.9rem;
    }

    /* ---------- HEADER / NAV ---------- */
    .site-header {
      position: sticky;
      top: 0;
      z-index: 1000;
      background-color: rgba(254, 250, 245, 0.92);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      border-bottom: 1px solid rgba(107, 78, 58, 0.08);
      padding: 0.8rem 0;
    }

    .header-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo {
      font-family: 'Quicksand', sans-serif;
      font-weight: 700;
      font-size: 1.8rem;
      color: var(--warm-brown);
      display: flex;
      align-items: center;
      gap: 0.5rem;
      letter-spacing: -0.02em;
    }

    .logo i {
      color: var(--accent-coral);
      font-size: 1.9rem;
    }

    .desktop-nav {
      display: flex;
      align-items: center;
      gap: 1.8rem;
    }

    .desktop-nav a {
      font-weight: 500;
      font-size: 0.95rem;
      color: var(--text-dark);
      position: relative;
    }

    .desktop-nav a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--accent-coral);
      transition: width var(--transition);
    }

    .desktop-nav a:hover::after {
      width: 100%;
    }

    .desktop-nav .btn {
      margin-left: 0.5rem;
    }

    .hamburger {
      display: none;
      background: none;
      border: 2px solid var(--warm-brown);
      color: var(--warm-brown);
      font-size: 1.5rem;
      width: 46px;
      height: 46px;
      border-radius: 12px;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all var(--transition);
    }

    .hamburger:hover {
      background-color: var(--soft-peach);
    }

    .mobile-nav {
      display: none;
      width: 100%;
      flex-direction: column;
      background-color: var(--white);
      border-radius: 20px;
      padding: 1.5rem;
      margin-top: 1rem;
      box-shadow: var(--shadow-lg);
      border: 1px solid rgba(107, 78, 58, 0.08);
      gap: 1rem;
    }

    .mobile-nav.active {
      display: flex;
    }

    .mobile-nav a {
      font-weight: 500;
      padding: 0.7rem 0.5rem;
      border-bottom: 1px solid var(--soft-gray);
      color: var(--text-dark);
    }

    .mobile-nav a:last-child {
      border-bottom: none;
    }

    .mobile-nav .btn {
      margin-top: 0.5rem;
      width: 100%;
    }

    @media (max-width: 900px) {
      .desktop-nav {
        display: none;
      }
      .hamburger {
        display: flex;
      }
    }

    /* ---------- HERO ---------- */
    .hero {
      position: relative;
      min-height: 85vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('banner.jpg') center/cover no-repeat;
      border-radius: 0 0 40px 40px;
      margin-bottom: 2rem;
      padding: 4rem 1rem;
    }

    .hero-content {
      max-width: 800px;
      color: white;
      text-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .hero-content h1 {
      color: white;
      margin-bottom: 1.2rem;
      letter-spacing: -0.02em;
    }

    .hero-content p {
      font-size: clamp(1.1rem, 2.5vw, 1.3rem);
      margin-bottom: 2rem;
      opacity: 0.95;
    }

    .hero-buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
    }

    .hero-buttons .btn-outline {
      color: white;
      border-color: white;
    }

    .hero-buttons .btn-outline:hover {
      background-color: white;
      color: var(--text-dark);
    }

    /* ---------- SECTION STYLES ---------- */
    section {
      padding: 5rem 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-title h2 {
      margin-bottom: 0.8rem;
    }

    .section-title p {
      color: var(--text-light);
      max-width: 600px;
      margin: 0 auto;
      font-size: 1.1rem;
    }

    /* ---------- ABOUT ---------- */
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }

    .about-img {
      border-radius: var(--radius-card);
      overflow: hidden;
      box-shadow: var(--shadow-lg);
    }

    .about-img img {
      width: 600px;
      height: 600px;
      transition: transform 0.5s ease;
    }

    .about-img:hover img {
      transform: scale(1.02);
    }

    .about-text h2 {
      margin-bottom: 1rem;
    }

    .about-text p {
      margin-bottom: 1.2rem;
      color: var(--text-light);
    }

    .about-stats {
      display: flex;
      gap: 2rem;
      margin-top: 1.5rem;
    }

    .stat-item {
      text-align: center;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 700;
      color: var(--accent-coral);
      font-family: 'Quicksand', sans-serif;
    }

    /* ---------- SERVICES ---------- */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .service-card {
      background-color: var(--white);
      border-radius: var(--radius-card);
      padding: 2rem 1.5rem;
      box-shadow: var(--shadow-sm);
      transition: all var(--transition);
      border: 1px solid rgba(107, 78, 58, 0.05);
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .service-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-lg);
    }

    .service-icon {
      font-size: 2.2rem;
      color: var(--accent-coral);
      background-color: var(--soft-peach);
      width: 300px;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 20px;
      margin-bottom: 1.5rem;
    }

    .service-card h3 {
      margin-bottom: 0.8rem;
    }

    .service-card p {
      color: var(--text-light);
      margin-bottom: 1.5rem;
      flex-grow: 1;
    }

    /* ---------- WHY US ---------- */
    .why-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2rem;
    }

    .why-item {
      background: var(--white);
      padding: 2rem 1.5rem;
      border-radius: var(--radius-card);
      text-align: center;
      box-shadow: var(--shadow-sm);
      transition: all var(--transition);
      border: 1px solid rgba(107, 78, 58, 0.05);
    }

    .why-item:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-md);
    }

    .why-item i {
      font-size: 2.2rem;
      color: var(--accent-coral);
      margin-bottom: 1rem;
    }

    .why-item h4 {
      margin-bottom: 0.5rem;
      font-size: 1.2rem;
    }

    .why-item p {
      color: var(--text-light);
      font-size: 0.95rem;
    }

    /* ---------- HOW IT WORKS ---------- */
    .steps-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      counter-reset: step;
    }

    .step-item {
      text-align: center;
      padding: 1.5rem;
      position: relative;
    }

    .step-number {
      width: 56px;
      height: 56px;
      background-color: var(--accent-coral);
      color: white;
      font-size: 1.6rem;
      font-weight: 700;
      font-family: 'Quicksand', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      margin: 0 auto 1.2rem;
      box-shadow: 0 8px 18px rgba(229, 139, 107, 0.3);
    }

    .step-item h4 {
      margin-bottom: 0.5rem;
    }

    .step-item p {
      color: var(--text-light);
    }

    /* ---------- TESTIMONIALS ---------- */
    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .testimonial-card {
      background: var(--white);
      padding: 2rem;
      border-radius: var(--radius-card);
      box-shadow: var(--shadow-sm);
      transition: all var(--transition);
      border: 1px solid rgba(107, 78, 58, 0.05);
    }

    .testimonial-card:hover {
      box-shadow: var(--shadow-md);
    }

    .testimonial-card i.fa-quote-left {
      color: var(--accent-coral);
      font-size: 1.8rem;
      margin-bottom: 1rem;
      opacity: 0.7;
    }

    .testimonial-card p {
      font-style: italic;
      margin-bottom: 1.5rem;
      color: var(--text-light);
    }

    .testimonial-author {
      font-weight: 600;
      color: var(--text-dark);
    }

    .testimonial-author span {
      font-weight: 400;
      color: var(--text-light);
      font-size: 0.9rem;
    }

   
    /* ---------- CONTACT / BOOKING ---------- */
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 3rem;
    }

    .contact-info {
      background: var(--white);
      border-radius: var(--radius-card);
      padding: 2.5rem;
      box-shadow: var(--shadow-sm);
      border: 1px solid rgba(107, 78, 58, 0.05);
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .info-item {
      display: flex;
      gap: 1rem;
      align-items: flex-start;
    }

    .info-item i {
      font-size: 1.4rem;
      color: var(--accent-coral);
      width: 28px;
      margin-top: 0.2rem;
    }

    .info-item h4 {
      margin-bottom: 0.2rem;
      font-size: 1.1rem;
    }

    .info-item p, .info-item a {
      color: var(--text-light);
    }

    .info-item a:hover {
      color: var(--accent-coral);
    }

    .social-links {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
    }

    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background-color: var(--soft-peach);
      color: var(--warm-brown);
      font-size: 1.2rem;
      transition: all var(--transition);
    }

    .social-links a:hover {
      background-color: var(--accent-coral);
      color: white;
      transform: translateY(-3px);
    }

    
    /* ---------- FOOTER ---------- */
    .site-footer {
      background-color: #2d2a24;
      color: #e3ddd6;
      padding: 3.5rem 0 1.5rem;
      border-radius: 40px 40px 0 0;
      margin-top: 2rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 2.5rem;
      margin-bottom: 2.5rem;
    }

    .footer-col h4 {
      color: white;
      margin-bottom: 1.2rem;
      font-size: 1.1rem;
    }

    .footer-col p {
      color: #b9afa6;
      font-size: 0.95rem;
      margin-bottom: 1rem;
    }

    .footer-col ul li {
      margin-bottom: 0.7rem;
    }

    .footer-col ul a {
      color: #b9afa6;
      font-size: 0.95rem;
      transition: color var(--transition);
    }

    .footer-col ul a:hover {
      color: white;
    }

    .footer-logo {
      font-family: 'Quicksand', sans-serif;
      font-weight: 700;
      font-size: 1.8rem;
      color: white;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }

    .footer-logo i {
      color: var(--accent-coral);
    }

    .footer-social {
      display: flex;
      gap: 0.8rem;
      margin-top: 1rem;
    }

    .footer-social a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.08);
      color: #e3ddd6;
      transition: all var(--transition);
    }

    .footer-social a:hover {
      background-color: var(--accent-coral);
      color: white;
      transform: translateY(-3px);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 1.8rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 1rem;
      font-size: 0.9rem;
      color: #b9afa6;
    }

    .legal-links {
      display: flex;
      gap: 1.8rem;
      flex-wrap: wrap;
    }

    .legal-links a {
      color: #b9afa6;
      transition: color var(--transition);
    }

    .legal-links a:hover {
      color: white;
    }

    /* ---------- LEGAL PAGES (modals via JS) ---------- */
    .legal-page {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(4px);
      z-index: 2000;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .legal-page.active {
      display: flex;
    }

    .legal-content {
      background: var(--white);
      max-width: 800px;
      width: 100%;
      max-height: 85vh;
      overflow-y: auto;
      border-radius: 28px;
      padding: 2.5rem 2.5rem 2rem;
      box-shadow: var(--shadow-lg);
      position: relative;
    }

    .legal-content h2 {
      margin-bottom: 1.5rem;
      padding-right: 2rem;
    }

    .legal-content h3 {
      margin: 1.8rem 0 0.8rem;
      font-size: 1.3rem;
    }

    .legal-content p {
      margin-bottom: 1rem;
      color: var(--text-light);
      font-size: 0.98rem;
    }

    .legal-content ul {
      margin: 0.8rem 0 1.2rem 1.5rem;
      list-style: disc;
      color: var(--text-light);
    }

    .legal-content ul li {
      margin-bottom: 0.4rem;
    }

    .close-legal {
      position: absolute;
      top: 1.5rem;
      right: 1.5rem;
      background: var(--soft-gray);
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-size: 1.3rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      color: var(--text-dark);
      transition: all var(--transition);
    }

    .close-legal:hover {
      background-color: var(--accent-coral);
      color: white;
    }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 992px) {
      .about-grid,
      .contact-grid {
        grid-template-columns: 1fr;
      }
      .about-img {
        order: -1;
      }
    }

    @media (max-width: 768px) {
      section {
        padding: 3.5rem 0;
      }
      .form-row {
        grid-template-columns: 1fr;
        gap: 1rem;
      }
      .form-group.full-width {
        grid-column: span 1;
      }
      .hero {
        min-height: 70vh;
        border-radius: 0 0 30px 30px;
      }
      .hero-buttons .btn {
        width: 100%;
      }
      .about-stats {
        flex-wrap: wrap;
        gap: 1.2rem;
      }
      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
      .legal-links {
        justify-content: center;
      }
      .legal-content {
        padding: 2rem 1.5rem;
      }
      .booking-form, .contact-info {
        padding: 1.8rem;
      }
    }

    @media (max-width: 480px) {
      .container {
        width: 92%;
      }
      .logo {
        font-size: 1.5rem;
      }
      .logo i {
        font-size: 1.6rem;
      }
      .service-card {
        padding: 1.5rem;
      }
      .testimonial-card {
        padding: 1.5rem;
      }
    }

    /* ---------- SCROLL MARGIN FOR STICKY HEADER ---------- */
    section[id] {
      scroll-margin-top: 90px;
    }
  </style>
</head>
<body>

  <!-- ========== HEADER ========== -->
  <header class="site-header">
    <div class="container header-inner">
      <a href="#home" class="logo" aria-label="Tailvra Care home">
        Tailvra Care
      </a>

      <nav class="desktop-nav" aria-label="Main navigation">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#why-us">Why Us</a>
        <a href="#contact">Contact</a>
        <a href="#contact" class="btn btn-small">Book a Service</a>
      </nav>

      <button class="hamburger" id="hamburgerBtn" aria-label="Open menu" aria-expanded="false">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- Mobile nav -->
    <nav class="container mobile-nav" id="mobileNav" aria-label="Mobile navigation">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#why-us">Why Us</a>
   
      <a href="#contact">Contact</a>
      <a href="#contact" class="btn">Book a Service</a>
    </nav>
  </header>

  <main>
    <!-- ========== HERO ========== -->
    <section id="home" class="hero">
      <div class="hero-content">
        <h1>Trusted Care for Your Furry Family</h1>
        <p>Professional pet sitting, dog walking, grooming, boarding, daycare, and training — all delivered with love and expertise.</p>
        <div class="hero-buttons">
          <a href="#contact" class="btn">Book a Service</a>
          <a href="#services" class="btn btn-outline">Explore Services</a>
        </div>
      </div>
    </section>

    <!-- ========== ABOUT ========== -->
    <section id="about">
      <div class="container">
        <div class="section-title">
          <h2>About Tailvra Care</h2>
          <p>Your pet's home away from home</p>
        </div>
        <div class="about-grid">
          <div class="about-text">
            <h2>We treat every pet like family</h2>
            <p>Founded in 2015, Tailvra Care has been the trusted choice for thousands of pet parents. Our mission is simple: to provide a safe, loving, and fun environment for your furry companions while giving you complete peace of mind.</p>
            <p>Our team of certified pet care professionals is trained in animal first aid, behavior, and nutrition. Whether it's a daily walk or an extended stay, we tailor our care to your pet's unique needs.</p>
            <div class="about-stats">
              <div class="stat-item">
                <div class="stat-number">10+</div>
                <div>Years Experience</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">5000+</div>
                <div>Happy Pets</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">100%</div>
                <div>Love & Care</div>
              </div>
            </div>
          </div>
          <div class="about-img">
            <img src="about.jpg" alt="Professional pet sitter holding a happy golden retriever" loading="lazy" width="400px" height="500px">
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SERVICES ========== -->
    <section id="services" style="background-color: var(--soft-gray);">
      <div class="container">
        <div class="section-title">
          <h2>Our Services</h2>
          <p>Everything your pet needs under one roof</p>
        </div>
        <div class="services-grid">
          
          <div class="service-card">
            <div class="service-icon"><img src="petsitting.png"></div>
            <h3>Pet Sitting</h3>
            <p>In-home visits or overnight stays so your pet stays comfortable in their own environment.</p>
            <a href="#contact" class="btn btn-small">Book Now</a>
          </div>
          <div class="service-card">
            <div class="service-icon"><img src="grooming.png"></div>
            <h3>Grooming</h3>
            <p>Full-service grooming including baths, haircuts, nail trimming, and de-shedding treatments.</p>
            <a href="#contact" class="btn btn-small">Book Now</a>
          </div>
         
          <div class="service-card">
            <div class="service-icon"><img src="daycare.png"></div>
            <h3>Pet Daycare</h3>
            <p>Structured day programs with socialization, play, and rest — perfect for busy pet parents.</p>
            <a href="#contact" class="btn btn-small">Book Now</a>
          </div>
         </div>
      </div>
    </section>

    <!-- ========== WHY US ========== -->
    <section id="why-us">
      <div class="container">
        <div class="section-title">
          <h2>Why Choose Us</h2>
          <p>We go above and beyond for every paw</p>
        </div>
        <div class="why-grid">
          <div class="why-item">
            <i class="fas fa-shield-heart"></i>
            <h4>Trusted & Experienced Care</h4>
            <p>Background-checked, insured, and certified pet care professionals.</p>
          </div>
          <div class="why-item">
            <i class="fas fa-tree"></i>
            <h4>Safe & Comfortable Environment</h4>
            <p>Clean, spacious facilities with secure outdoor play areas.</p>
          </div>
          <div class="why-item">
            <i class="fas fa-hand-holding-heart"></i>
            <h4>Personalized Attention</h4>
            <p>Custom care plans tailored to your pet's unique personality.</p>
          </div>
          <div class="why-item">
            <i class="fas fa-calendar-check"></i>
            <h4>Flexible Scheduling</h4>
            <p>Early morning, evening, weekend, and holiday availability.</p>
          </div>
          <div class="why-item">
            <i class="fas fa-user-tie"></i>
            <h4>Professional Staff</h4>
            <p>Pet first-aid trained, insured, and passionate about animals.</p>
          </div>
          <div class="why-item">
            <i class="fas fa-heart"></i>
            <h4>Loving Pet Care</h4>
            <p>We treat your pets as if they were our own — because we care.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== HOW IT WORKS ========== -->
    <section id="how-it-works" style="background-color: var(--soft-gray);">
      <div class="container">
        <div class="section-title">
          <h2>How It Works</h2>
          <p>Simple steps to premium pet care</p>
        </div>
        <div class="steps-grid">
          <div class="step-item">
            <div class="step-number">1</div>
            <h4>Choose a Service</h4>
            <p>Select from walking, sitting, grooming, boarding, daycare, or training.</p>
          </div>
          <div class="step-item">
            <div class="step-number">2</div>
            <h4>Schedule a Date</h4>
            <p>Pick a date and time that works for you — we're flexible.</p>
          </div>
          <div class="step-item">
            <div class="step-number">3</div>
            <h4>Meet Our Pet Care Team</h4>
            <p>We'll match you with a dedicated carer who fits your pet's needs.</p>
          </div>
          <div class="step-item">
            <div class="step-number">4</div>
            <h4>Enjoy Stress-Free Pet Care</h4>
            <p>Relax knowing your furry friend is happy, safe, and loved.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== TESTIMONIALS ========== -->
    <section id="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>What Pet Parents Say</h2>
          <p>Real stories from happy clients</p>
        </div>
        <div class="testimonials-grid">
          <div class="testimonial-card">
            <i class="fas fa-quote-left"></i>
            <p>Tailvra Care has been a lifesaver! My dog Max gets so excited when his walker arrives. The daily photo updates are the highlight of my day.</p>
            <div class="testimonial-author">Sarah M. <span>— Max's mom</span></div>
          </div>
          <div class="testimonial-card">
            <i class="fas fa-quote-left"></i>
            <p>We boarded our cat Luna for two weeks. She came home relaxed and happy. The team sent daily videos — I couldn't ask for more.</p>
            <div class="testimonial-author">James K. <span>— Luna's dad</span></div>
          </div>
          <div class="testimonial-card">
            <i class="fas fa-quote-left"></i>
            <p>The grooming service is outstanding. My poodle Bella looks like a show dog every time. Highly recommend their gentle approach.</p>
            <div class="testimonial-author">Priya S. <span>— Bella's mom</span></div>
          </div>
          <div class="testimonial-card">
            <i class="fas fa-quote-left"></i>
            <p>Our puppy Rocky learned so much in just a few training sessions. The trainer was patient and knowledgeable. Five stars!</p>
            <div class="testimonial-author">David L. <span>— Rocky's dad</span></div>
          </div>
          <div class="testimonial-card">
            <i class="fas fa-quote-left"></i>
            <p>I travel often and daycare has been a game-changer. My golden retriever Cooper gets so much playtime and attention.</p>
            <div class="testimonial-author">Emily R. <span>— Cooper's mom</span></div>
          </div>
          <div class="testimonial-card">
            <i class="fas fa-quote-left"></i>
            <p>Professional, reliable, and genuinely caring. They went above and beyond when my senior dog needed extra attention.</p>
            <div class="testimonial-author">Michael T. <span>— Buddy's dad</span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CONTACT / BOOKING ========== -->
    <section id="contact">
      <div class="container">
        <div class="section-title">
          <h2>Book a Service</h2>
          <p>Fill out the form and we'll get back to you within 2 hours</p>
        </div>
        <div class="contact-grid">
          <!-- Contact info -->
          <div class="contact-info">
            <div class="info-item">
              <i class="fas fa-phone-alt"></i>
              <div>
                <h4>Phone</h4>
                <a href="tel:+15551234567">(555) 123-4567</a>
              </div>
            </div>
            
            <div class="info-item">
              <i class="fas fa-map-marker-alt"></i>
              <div>
                <h4>Address</h4>
                <p>522 Fifth Avenue, Manhattan,<br>New York, NY 10018, USA</p>
              </div>
            </div>
           
           
          </div>

        </div>
      </div>
    </section>
  </main>

  <!-- ========== FOOTER ========== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="footer-logo">Tailvra Care</div>
          <p>Premium pet care services delivered with love, expertise, and a whole lot of belly rubs.</p>
         
        </div>
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#why-us">Why Us</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="#services">Dog Walking</a></li>
            <li><a href="#services">Pet Sitting</a></li>
            <li><a href="#services">Grooming</a></li>
            <li><a href="#services">Pet Boarding</a></li>
            <li><a href="#services">Pet Daycare</a></li>
            <li><a href="#services">Training</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><i class="fas fa-phone-alt" style="margin-right:0.5rem; color: var(--accent-coral);"></i> <a href="tel:+15551234567">+1 (555) 123-4567</a></li>
            <li><i class="fas fa-map-marker-alt" style="margin-right:0.5rem; color: var(--accent-coral);"></i> 522 Fifth Avenue, Manhattan,New York, NY 10018, USA</li>
            <li><i class="fas fa-clock" style="margin-right:0.5rem; color: var(--accent-coral);"></i> Mon–Fri: 7am–7pm</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 Tailvra Care. All rights reserved.</p>
        <div class="legal-links">
          <a href="#" data-legal="privacy-policy">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- ========== LEGAL PAGE MODALS ========== -->
  <div class="legal-page" id="legalModal">
    <div class="legal-content" id="legalContent">
      <button class="close-legal" id="closeLegal" aria-label="Close legal page"><i class="fas fa-times"></i></button>
      <div id="legalText"></div>
    </div>
  </div>

  <!-- ========== JAVASCRIPT ========== -->
  <script>
    (function() {
      'use strict';

      // ---------- HAMBURGER MENU ----------
      const hamburger = document.getElementById('hamburgerBtn');
      const mobileNav = document.getElementById('mobileNav');

      if (hamburger && mobileNav) {
        hamburger.addEventListener('click', function() {
          const expanded = this.getAttribute('aria-expanded') === 'true' ? false : true;
          this.setAttribute('aria-expanded', expanded);
          mobileNav.classList.toggle('active');
          // Change icon
          const icon = this.querySelector('i');
          if (mobileNav.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
          } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
          }
        });

        // Close mobile nav when a link is clicked
        mobileNav.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', () => {
            mobileNav.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            const icon = hamburger.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
          });
        });
      }

      // ---------- SMOOTH SCROLL (additional for robustness) ----------
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          const targetId = this.getAttribute('href');
          if (targetId === '#') return;
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            e.preventDefault();
            targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      });

    

      // ---------- BOOKING FORM (simulate submission) ----------
      const bookingForm = document.getElementById('bookingForm');
      if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
          e.preventDefault();
          // Simple validation check
          const requiredFields = this.querySelectorAll('[required]');
          let valid = true;
          requiredFields.forEach(field => {
            if (!field.value.trim()) {
              valid = false;
              field.style.borderColor = '#e58b6b';
            } else {
              field.style.borderColor = '#e2dbd3';
            }
          });
          if (!valid) {
            alert('Please fill in all required fields.');
            return;
          }
          // Simulate success
          alert('Thank you! Your booking request has been sent. We\'ll contact you within 2 hours to confirm.');
          bookingForm.reset();
        });
      }

      // ---------- LEGAL PAGES ----------
      const legalContent = {
        'privacy-policy': `
          <h2>Privacy Policy</h2>
<p>Last updated: September 23, 2026</p>

<p>At <strong>Tailvra Care</strong>, we respect your privacy and are committed to protecting the personal information you provide to us. This Privacy Policy explains what information we collect, how we use it, how we protect it, and the choices you may have regarding your information when you visit our website or use our pet care services.</p>

<h3>1. Information We Collect</h3>
<p>We may collect information that you provide directly to us when you contact us, request information, make a booking, or use our services. This may include:</p>

<ul>
  <li>Your name and contact information.</li>
  <li>Email address and telephone number.</li>
  <li>Pet's name, type, breed, age, and relevant care information.</li>
  <li>Booking details, service preferences, dates, and appointment information.</li>
  <li>Information you provide in messages, forms, or other communications with us.</li>
  <li>Payment or billing information when required to process a transaction.</li>
</ul>

<p>We may also automatically collect limited technical information when you visit our website, such as your browser type, device type, IP address, pages visited, and general website usage information.</p>

<h3>2. How We Use Your Information</h3>
<p>We may use the information we collect to:</p>

<ul>
  <li>Provide, schedule, and manage our pet care services.</li>
  <li>Process bookings, payments, and service requests.</li>
  <li>Communicate with you about appointments, bookings, inquiries, and services.</li>
  <li>Understand your pet's care requirements and provide appropriate services.</li>
  <li>Improve our website, services, customer experience, and operations.</li>
  <li>Respond to questions, requests, complaints, or support inquiries.</li>
  <li>Send service-related notifications and, where permitted, promotional communications.</li>
  <li>Protect our website, customers, staff, and business against fraud, misuse, or security threats.</li>
  <li>Comply with applicable legal and regulatory requirements.</li>
</ul>

<h3>3. Pet Information</h3>
<p>To provide appropriate care, we may collect information about your pet, including its name, breed, age, size, behavior, dietary requirements, allergies, medications, special instructions, and other information that you choose to provide.</p>

<p>You should provide accurate and up-to-date information that is relevant to your pet's care. Where information about another person is provided to us, such as an emergency contact, you should ensure that you have permission to provide their information.</p>

<h3>4. Payment Information</h3>
<p>When you make a payment for our services, payment information may be processed through a third-party payment provider. We do not intend to store complete payment card details on our website unless expressly stated otherwise.</p>

<p>Third-party payment providers may collect and process payment information according to their own privacy policies and terms. We recommend reviewing the privacy policy of the payment provider you use.</p>

<h3>5. Cookies and Similar Technologies</h3>
<p>Our website may use cookies and similar technologies to help operate the website, remember preferences, understand website usage, and improve your browsing experience.</p>

<p>You can control or disable cookies through your browser settings. Disabling certain cookies may affect some website functionality.</p>

<h3>6. How We Share Your Information</h3>
<p>We do not sell or rent your personal information to third parties.</p>

<p>We may share limited information with trusted service providers when reasonably necessary to operate our business or provide our services. These may include payment processors, website hosting providers, technology providers, communication services, or professional advisers.</p>

<p>We may also disclose information where required by applicable law, legal process, court order, or where necessary to protect the rights, safety, property, or security of Tailvra Care, our customers, pets, employees, or others.</p>

<h3>7. Data Security</h3>
<p>We take reasonable technical and organizational measures to protect personal information against unauthorized access, disclosure, alteration, misuse, or destruction.</p>

<p>However, no website, electronic transmission, or storage system can be guaranteed to be completely secure. While we take reasonable steps to protect your information, we cannot guarantee absolute security.</p>

<h3>8. Data Retention</h3>
<p>We retain personal information only for as long as reasonably necessary for the purposes described in this Privacy Policy, including providing services, maintaining business records, resolving disputes, enforcing agreements, and complying with applicable legal obligations.</p>

<p>When information is no longer required, we may securely delete, destroy, or anonymize it where appropriate.</p>

<h3>9. Your Privacy Rights</h3>
<p>Depending on your location and applicable law, you may have certain rights regarding your personal information. These may include the right to:</p>

<ul>
  <li>Request access to personal information we hold about you.</li>
  <li>Request correction of inaccurate or incomplete information.</li>
  <li>Request deletion of certain personal information.</li>
  <li>Request restriction of certain processing activities.</li>
  <li>Object to certain uses of your information where applicable.</li>
  <li>Withdraw consent where processing is based on consent.</li>
</ul>

<p>To exercise an applicable privacy right, please contact us using the contact information provided below. We may need to verify your identity before processing certain requests.</p>

<h3>10. Marketing Communications</h3>
<p>If you choose to receive promotional communications from us, we may occasionally send information about services, offers, updates, or other relevant news.</p>

<p>You can unsubscribe from promotional emails at any time by using the unsubscribe option included in the communication or by contacting us directly. Service-related communications, such as booking confirmations or important appointment information, may still be sent when necessary.</p>

<h3>11. Third-Party Websites and Services</h3>
<p>Our website may contain links to third-party websites, social media platforms, payment services, or other external services. We are not responsible for the privacy practices, content, or security of third-party websites.</p>

<p>We encourage you to review the privacy policies of any third-party website or service you visit.</p>

<h3>12. Children's Privacy</h3>
<p>Our services and website are not intended to knowingly collect personal information from children without appropriate authorization. If you believe that a child has provided personal information to us without appropriate consent, please contact us so that we can review and take appropriate action.</p>

<h3>13. Changes to This Privacy Policy</h3>
<p>We may update this Privacy Policy from time to time to reflect changes to our services, business practices, technology, or applicable legal requirements.</p>

<p>When we make changes, we will update the "Last updated" date at the top of this page. We encourage you to review this Privacy Policy periodically.</p>

<h3>14. Contact Us</h3>
<p>If you have questions about this Privacy Policy, want to request access or correction of your personal information, or have a privacy-related concern, please contact us:</p>

<p>
  <strong>Tailvra Care</strong><br>
  Phone: <a href="tel:+15551234567">+1 (555) 123-4567</a><br>
</p>

<p>We will review privacy inquiries and respond within a reasonable period in accordance with applicable requirements.</p>

        `,
        
      };

      const legalModal = document.getElementById('legalModal');
      const legalText = document.getElementById('legalText');
      const closeLegal = document.getElementById('closeLegal');

      // Open legal pages
      document.querySelectorAll('[data-legal]').forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const page = this.getAttribute('data-legal');
          if (legalContent[page]) {
            legalText.innerHTML = legalContent[page];
            legalModal.classList.add('active');
            document.body.style.overflow = 'hidden';
          }
        });
      });

      // Close legal modal
      function closeLegalModal() {
        legalModal.classList.remove('active');
        document.body.style.overflow = '';
      }

      if (closeLegal) {
        closeLegal.addEventListener('click', closeLegalModal);
      }

      if (legalModal) {
        legalModal.addEventListener('click', function(e) {
          if (e.target === legalModal) {
            closeLegalModal();
          }
        });
      }

      // Close on Escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && legalModal.classList.contains('active')) {
          closeLegalModal();
        }
      });

      // ---------- SET MIN DATE FOR BOOKING (today) ----------
      const dateInput = document.getElementById('date');
      if (dateInput) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
      }

    })();
  </script>
</body>
</html>
