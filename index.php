<?php
// get json file
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn01.rumahweb.com/under-construction/panduan.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$links = json_decode(curl_exec($ch));
curl_close($ch);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="images/Logo.png">
    <meta name="description" content="CV BOY MAKMUR JAYA menyediakan layanan rental mobil di Medan dengan armada lengkap dan harga terjangkau. Booking mudah via WhatsApp">
    <meta name="keywords" content="rental mobil medan, sewa mobil medan, cv boy makmur jaya, rental mobil harian medan, mobil dengan sopir medan">
    <meta name="robots" content="index, follow">
      <link rel="canonical" href="https://boyrentcar.com/">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CarRental",
      "name": "CV BOY MAKMUR JAYA",
      "url": "https://boyrentcar.com",
      "telephone": "+6281396565157",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jl. TUBA II NO. 26",
        "addressLocality": "Medan",
        "addressCountry": "ID"
      }
    }
    </script>
    
    
    <title>CV BOY MAKMUR JAYA - Rental Mobil Terpercaya di Medan</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style4.css">
    
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <a href="#" class="logo">
                <i class="fas fa-car"></i>
                CV BOY MAKMUR JAYA
            </a>
            <ul class="nav-links">
                <li><a href="#home" class="active">Beranda</a></li>
                <li><a href="#cars">Mobil</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
    <div class="hero-content">
        <h1>Rental Mobil Terpercaya di Medan</h1>
        <p class="hero-subtitle">Kami menyediakan berbagai pilihan mobil yang nyaman, aman, dan terawat untuk perjalanan Anda, baik untuk keperluan pribadi, bisnis, maupun liburan.</p>
        <p class="hero-subtitle">Pelayanan ramah, harga bersahabat, dan kepuasan pelanggan adalah prioritas kami.</p>
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-number">150+</span>
                <span class="stat-label">Unit Mobil Aktif</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">7+</span>
                <span class="stat-label">Tahun Pengalaman</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">12K+</span>
                <span class="stat-label">Pelanggan Terlayani</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">32</span>
                <span class="stat-label">Provinsi Dilayani</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">98%</span>
                <span class="stat-label">Tingkat Kepuasan Pelanggan</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">60+</span>
                <span class="stat-label">Sopir Profesional & Terlatih</span>
            </div>
        </div>
    </div>
</section>

    <!-- Cars Section -->
    <section id="cars" class="cars-section">
        <h2 class="section-title">Pilihan Mobil Terbaik</h2>
        <div class="cars-grid">
            <div class="car-card">
                <div class="car-image">
                    <img src="images/avanza.png" alt="Toyota Avanza">
                </div>
                <div class="car-info">
                    <h3 class="car-name">Toyota Avanza</h3>
                    <div class="car-price">
                        <span class="price-label">Mulai dari</span>
                        Rp 400.000 / hari
                    </div>
                    <div class="car-features">
                        <span class="feature-tag">7 Seats</span>
                        <span class="feature-tag">Manual</span>
                        <span class="feature-tag">Automatic</span>
                    </div>
                    <button class="btn-book" onclick="openBookingModal('Avanza')">
                        <i class="fas fa-calendar-alt"></i> Booking Sekarang
                    </button>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <img src="images/innova.png" alt="innova">
                </div>
                <div class="car-info">
                    <h3 class="car-name">Innova Reborn</h3>
                    <div class="car-price">
                        <span class="price-label">Mulai dari</span>
                        Rp 600.000 / hari
                    </div>
                    <div class="car-features">
                        <span class="feature-tag">7 Seats</span>
                        <span class="feature-tag">Automatic</span>
                        <span class="feature-tag">Premium</span>
                    </div>
                    <button class="btn-book" onclick="openBookingModal('Innova Reborn')">
                        <i class="fas fa-calendar-alt"></i> Booking Sekarang
                    </button>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <img src="images/pajero.png" alt="Pajero Sport">
                </div>
                <div class="car-info">
                    <h3 class="car-name">Pajero Sport</h3>
                    <div class="car-price">
                        <span class="price-label">Mulai dari</span>
                        Rp 1.000.000 / hari
                    </div>
                    <div class="car-features">
                        <span class="feature-tag">7 Seats</span>
                        <span class="feature-tag">Automatic</span>
                        <span class="feature-tag">Luxury</span>
                    </div>
                    <button class="btn-book" onclick="openBookingModal('Pajero Sport')">
                        <i class="fas fa-calendar-alt"></i> Booking Sekarang
                    </button>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <img src="images/fortuner.png" alt="Toyota fortuner">
                </div>
                <div class="car-info">
                    <h3 class="car-name">Fortuner VRZ</h3>
                    <div class="car-price">
                        <span class="price-label">Mulai dari</span>
                        Rp 1.000.000 / hari
                    </div>
                    <div class="car-features">
                        <span class="feature-tag">7 Seats</span>
                        <span class="feature-tag">Automatic</span>
                        <span class="feature-tag">Premium</span>
                    </div>
                    <button class="btn-book" onclick="openBookingModal('Fortuner VRZ')">
                        <i class="fas fa-calendar-alt"></i> Booking Sekarang
                    </button>
                </div>
            </div>
            <div class="car-card">ß
                <div class="car-image">
                    <img src="images/fortuner.png" alt="Toyota fortuner">
                </div>
                <div class="car-info">
                    <h3 class="car-name">Fortuner VRZ</h3>
                    <div class="car-price">
                        <span class="price-label">Mulai dari</span>
                        Rp 1.000.000 / hari
                    </div>
                    <div class="car-features">
                        <span class="feature-tag">7 Seats</span>
                        <span class="feature-tag">Automatic</span>
                        <span class="feature-tag">Premium</span>
                    </div>
                    <button class="btn-book" onclick="openBookingModal('Fortuner VRZ')">
                        <i class="fas fa-calendar-alt"></i> Booking Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="welcome" class="welcome-section">
        <div class="welcome-container">
            <h2 class="section-title">Selamat Datang di CV BOY MAKMUR JAYA</h2>
            <p class="welcome-text">
                Kami senang menyambut Anda di tempat terbaik untuk kebutuhan transportasi Anda. Dengan berbagai pilihan mobil yang nyaman, aman, dan terawat, kami siap menemani setiap perjalanan Anda—baik untuk keperluan pribadi, bisnis, maupun liburan.
            </p>
            <p class="welcome-text">
                Pelayanan ramah, harga bersahabat, dan kepuasan pelanggan adalah prioritas kami. Terima kasih telah mempercayakan perjalanan Anda kepada kami. Selamat menikmati layanan terbaik dari kami!
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="services-container">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3 class="service-title">Sewa Harian</h3>
                    <p>Sewa mobil untuk kebutuhan harian dengan harga terjangkau</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="service-title">Sewa Bulanan</h3>
                    <p>Paket sewa bulanan dengan harga spesial untuk kebutuhan jangka panjang</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="service-title">Plus Sopir</h3>
                    <p>Sewa mobil dengan sopir berpengalaman dan berlisensi</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3 class="service-title">Antar Jemput Bandara</h3>
                    <p>Layanan antar jemput ke bandara dengan waktu yang fleksibel</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="service-title">Acara Khusus</h3>
                    <p>Rental mobil untuk pernikahan, acara perusahaan, dan event spesial</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3 class="service-title">Lepas Kunci</h3>
                    <p>Sewa mobil tanpa sopir dengan sistem self-drive</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="about" class="why-us-section">
        <div class="why-us-container">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Armada Berkualitas</h3>
                    <p>Semua kendaraan terawat dengan baik dan dilengkapi asuransi komprehensif untuk keamanan perjalanan Anda</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Sopir Berpengalaman</h3>
                    <p>Tim sopir profesional dengan pengalaman lebih dari 5 tahun dan menguasai rute di seluruh Sumatera Utara</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="feature-title">Layanan 24/7</h3>
                    <p>Siap melayani Anda kapan saja dengan customer service yang responsif dan ramah</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3 class="feature-title">Harga Kompetitif dan Bersahabat</h3>
                    <p>Tidak ada biaya tersembunyi, dan pastinya aman</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Booking Mudah</h3>
                    <p>Proses pemesanan yang cepat dan mudah melalui WhatsApp atau telepon</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="feature-title">Kepuasan Pelanggan</h3>
                    <p>Tingkat kepuasan 98% dari lebih dari 12.000 pelanggan yang telah mempercayai layanan kami</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section id="vision-mission" class="vision-mission-section">
        <div class="vision-mission-container">
            <h2 class="section-title">Visi & Misi Perusahaan</h2>
            
            <!-- Vision Section -->
            <div class="vision-section">
                <div class="vision-header">
                    <div class="vision-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="vision-title">Visi Kami</h3>
                </div>
                <div class="vision-grid">
                    <div class="vision-item">
                        <span class="vision-number">01</span>
                        <p>Menjadi perusahaan rental mobil terdepan di Indonesia yang mengutamakan kenyamanan, keamanan, dan kepuasan pelanggan.</p>
                    </div>
                    <div class="vision-item">
                        <span class="vision-number">02</span>
                        <p>Memberikan layanan transportasi yang andal dan profesional guna menunjang mobilitas masyarakat di seluruh Nusantara.</p>
                    </div>
                    <div class="vision-item">
                        <span class="vision-number">03</span>
                        <p>Menjadi pilihan utama dalam industri penyewaan kendaraan di tingkat nasional dengan inovasi dan pelayanan prima.</p>
                    </div>
                    <div class="vision-item">
                        <span class="vision-number">04</span>
                        <p>Menciptakan pengalaman perjalanan yang mudah, efisien, dan terpercaya bagi setiap pelanggan, kapan pun dan di mana pun.</p>
                    </div>
                </div>
            </div>

            <!-- Mission Section -->
            <div class="mission-section">
                <div class="mission-header">
                    <div class="mission-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="mission-title">Misi Kami</h3>
                </div>
                <div class="mission-grid">
                    <div class="mission-item">
                        <span class="mission-number">01</span>
                        <p>Memberikan layanan rental mobil berkualitas tinggi dengan armada terawat dan dukungan tim profesional.</p>
                    </div>
                    <div class="mission-item">
                        <span class="mission-number">02</span>
                        <p>Menyediakan solusi transportasi yang fleksibel, aman, dan efisien bagi pelanggan individu maupun korporat.</p>
                    </div>
                    <div class="mission-item">
                        <span class="mission-number">03</span>
                        <p>Menjalin hubungan jangka panjang dengan pelanggan melalui pelayanan yang ramah, responsif, dan terpercaya.</p>
                    </div>
                    <div class="mission-item">
                        <span class="mission-number">04</span>
                        <p>Terus berinovasi dan beradaptasi dengan teknologi untuk meningkatkan kenyamanan dan kepuasan pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <form id="bookingForm">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" required>
    
                <label for="mobil">Jenis Mobil:</label>
                <select id="mobil">
                    <option value="Avanza">Avanza</option>
                    <option value="Innova Reborn">Innova Reborn</option>
                    <option value="Pajero Sport">Pajero Sport</option>
                    <option value="Fortuner VRZ">Fortuner VRZ</option>
                </select>
    
                <label for="tglMulai">Tanggal Mulai Sewa:</label>
                <input type="date" id="tglMulai" required>
    
                <label for="tglSelesai">Tanggal Selesai Sewa:</label>
                <input type="date" id="tglSelesai" required>
    
                <button type="submit">Booking via WhatsApp</button>
            </form>
        </div>
    </div>
    

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h3>Hubungi Kami</h3>
                <a href="https://maps.app.goo.gl/vo4GrNtHMCdkeTGE8?g_st=aw" style="text-decoration: none; color: #fff;" class="contact-item">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <div class="contact-text">
                        <strong>Alamat:</strong><br>
                        Jl. Tuba II No.26, Tegal Sari Mandala III, Kec. Medan Denai, Kota Medan 
                    </div>
                </a>
                <div class="contact-item">
                    <i class="fas fa-phone contact-icon"></i>
                    <div class="contact-text">
                        <strong>Telepon:</strong><br>
                        +62 813-9656-5157<br>
                        +62 817-401-877
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope contact-icon"></i>
                    <div class="contact-text">
                        <strong>Email:</strong><br>
                        boymakmurjaya@gmail.com
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fab fa-tiktok contact-icon"></i>
                    <div class="contact-text">
                        <strong>TikTok:</strong><br>
                        @cv.boymakmurjaya
                    </div>
                </div>
            </div>
        </section>
    </body>
    <footer>
        <p>© 2025 CV BOY MAKMUR JAYA. Semua hak dilindungi.</p>
    </footer>
    <script src="./script.js"></script>
</html>