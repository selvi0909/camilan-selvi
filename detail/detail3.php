<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail 3</title>
</head>
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="../css/detail.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="../index.php" class="active">Beranda</a>
            <a href="../index.php#why-us-section">Daftar Film</a>
            <a href="../index.php#our-services-section">Tentang</a>
            <a href="../index.php#footer-section">Kontak</a>
                <div class="search-container">
                <a href="../index.php#footer-section"><button>Berlangganan</button></a>
                </div>
        </div>
    
        <div class="container">
            <div class="text" style="width: 800px;">
    
                <h1>Selamat Datang di Halaman Film</h1>
                <p>Gunakan navigasi di atas untuk menjelajahi Film kami.</p>
            </div>
            <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Lx_BesomdPs?si=7sIwBpYRFMcPjxe_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <!-- <iframe 
                    src="https://www.youtube.com/embed/VIDEO_ID" 
                    frameborder="0" 
                    allowfullscreen>
                </iframe> -->
            </div>
        </div>
        
        <div class="sinopsis" id="sinopsis">
            <h2>
                Sinopsis
            </h2>
            <p>
                Ada Apa dengan Cinta? adalah film drama remaja Indonesia yang bercerita tentang Cinta,
                seorang gadis populer di sekolah, yang bertemu dengan Rangga, seorang siswa pendiam dan kutu buku. Awalnya mereka sering bertengkar, namun perlahan Cinta mulai tertarik pada Rangga setelah mengenal sisi lain dirinya. Hubungan mereka diuji oleh persahabatan Cinta dan perbedaan karakter mereka. Film ini mengeksplorasi cinta remaja, persahabatan, dan perjalanan emosional.
            </p>
        </div>
    
        <section class="why-us-section" id="why-us-section">
            <h2>Pemeran</h2>
            <p>Beberapa pemeran dalam Film Gita Cinta dari SMA</p>
        
            <!-- Tombol geser -->
            <div class="d-flex justify-content-between mb-3">
                <button class="btn-slide" id="prevBtn">← Previous</button>
                <button class="btn-slide" id="nextBtn">Next →</button>
            </div>
        
            <!-- Kontainer pemain -->
            <div class="row player-container" id="player-container">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/nicholas saputra.jpg" class="player-image" alt="24">
                        <p>Nicholas Saputra</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/sissy-priscillia.jpg" class="player-image" alt="24">
                        <p>Sissy Pricillia</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/dwi.jpg" class="player-image" alt="24">
                        <p>Dwi Sasono</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/unique priscilla.jpg" class="player-image" alt="24">
                        <p>Unique Priscilla</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/dewi-gita.jpg" class="player-image" alt="24">
                        <p>Dewi Gita</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/fadi alaydrus.jpg" class="player-image" alt="24">
                        <p>Fadi Alauydrus</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/chantiq.jpg" class="player-image" alt="24">
                        <p>Chantiq</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/abun sungkar.jpeg" class="player-image" alt="24">
                        <p>Abun Sungkar</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="comments-section">
        <h2>Komentar</h2>
        <div class="comment-container">
            <div class="comment">
                <p class="comment-author">Zaitun</p>
                <p class="comment-text">"Cerita yang menyentuh, tapi sayang beberapa plot twist-nya agak bisa ditebak. Meski begitu, tetap worth it!.</p>
            </div>
            <div class="comment">
                <p class="comment-author">Lini</p>
                <p class="comment-text">"Film ini bener-bener mengingatkan kita tentang arti cinta dan harapan. Bikin terharu! 😊"</p>
            </div>
            <!-- Tambahkan komentar lain di sini -->
        </div>
    
        <div class="comment-form">
            <h3>Tambahkan Komentar</h3>
            <form method="POST" action="submit_comment.php">
                <input type="text" placeholder="Your Name" name="name" required>
                <textarea placeholder="Your Comment" name="comment" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>

    <div class="footer">
        <p>&copy; 2024 Selvi. Semua Hak Dilindungi.</p>
    </div>
    
</body>
<script>
    // Fungsi untuk menggeser ke kanan
    document.getElementById('nextBtn').addEventListener('click', function() {
        document.getElementById('player-container').scrollBy({ 
            left: 300,  
            behavior: 'smooth' 
        });
    });

    // Fungsi untuk menggeser ke kiri
    document.getElementById('prevBtn').addEventListener('click', function() {
        document.getElementById('player-container').scrollBy({ 
            left: -300,  
            behavior: 'smooth' 
        });
    });
</script>
</html>