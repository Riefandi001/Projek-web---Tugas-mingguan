<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="c">
  <title>Website Stylish</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f3f4f6;
      color: #333;
    }

    /* Header */
    header {
      position: sticky;
      top: 0;
      width: 100%;
      background: #111827;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    header h1 {
      font-size: 1.5rem;
      color: #3b82f6;
      letter-spacing: 1px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    nav a {
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      color: #3b82f6;
    }

    /* Hero */
    .hero {
      height: 90vh;
      background: linear-gradient(135deg, #3b82f6, #6366f1);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      padding: 2rem;
    }

    .hero h2 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin-bottom: 2rem;
    }

    .btn {
      padding: 0.8rem 1.5rem;
      background: #ffd700;
      color: #333;
      font-weight: bold;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn:hover {
      background: #ffb300;
    }

    /* Content */
    .content {
      padding: 3rem 2rem;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1100px;
      margin: auto;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    .card h3 {
      margin-bottom: 1rem;
      color: #3b82f6;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 2rem;
      background: #111827;
      color: white;
      margin-top: 3rem;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1>MyWebsite</h1>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/profile">Profile</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <h2>Selamat Datang di halaman Berita!</h2>
    <p>Website modern, stylish, dan responsif dengan navigasi keren di atas. Yuk jelajahi halaman ini.</p>
    <a href="#" class="btn">Mulai Sekarang</a>
  </section>

  <!-- Content -->
  <section class="content">
    <div class="card">
      <h3>Profile</h3>
      <p>Kelola informasi tentang dirimu dan lihat data penting yang kamu butuhkan.</p>
    </div>
    <div class="card">
      <h3>Contact</h3>
      <p>Hubungi kami untuk pertanyaan, saran, atau dukungan teknis kapan saja.</p>
    </div>
    <div class="card">
      <h3>News</h3>
      <p>Dapatkan berita terbaru dan informasi penting langsung di halaman ini.</p>
    </div>
    <div class="card">
      <h3>Community</h3>
      <p>Bergabung dengan komunitas kami dan temukan teman baru.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 MyWebsite. All rights reserved.</p>
  </footer>
</body>
</html>
