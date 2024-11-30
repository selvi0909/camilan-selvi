<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Film 1</title>
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
            <div class="video-container">
                <iframe width="600" height="350" 
                src="https://www.youtube.com/embed/j92YfcwLacM?si=DtuLbLZbt_2vBGD9" 
                frameborder="0" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                RATNA SUMINAR (Prilly Latuconsina), sang siswi baru bertemu dengan GALIH RAKASIWI (Yesaya Abraham) sebagai sosok yang dingin dan cuek. Hingga kemudian keduanya saling terpikat. Namun, hubungan mereka ditentang oleh Ayah Ratna (Dwi Sasono). Berbagai cara digunakan untuk memisahkan mereka.
                Akankah Galih dan Ratna menerima kenyataan jika kisah kasih mereka, memang tak kan pernah sampai?.
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
                        <img src="../img/yesaya abraham.jpg" class="player-image" alt="24">
                        <p>Yesaya Abraham</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/prilly.jpg" class="player-image" alt="24">
                        <p>Prilly Latuconsina</p>
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
                        <img src="../img/Dewi-Gita.jpg" class="player-image" alt="24">
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
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 player-card">
                    <div class="card-content">
                        <img src="../img/ariyo" class="player-image" alt="24">
                        <p>Abun Sungkar</p>
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
            <?php
                // Memasukkan/memanggil koneksi database
            include "koneksi.php";

            // Mengambil komentar dari database
            $result = $conn->query("SELECT name, comment, created_at FROM comments ORDER BY created_at DESC");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="comment">';
                    echo '<p class="comment-author">' . htmlspecialchars($row['name']) . '</p>';
                    echo '<p class="comment-text">' . htmlspecialchars($row['comment']) . '</p>';
                    echo '<p class="comment-date">' . htmlspecialchars($row['created_at']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>Tidak ada komentar</p>';
            }

            $conn->close();
            ?>



            <div class="comment">
                <p class="comment-author">Zhra</p>
                <p class="comment-text">"Cerita cinta yang sederhana tapi sangat mengena. Keren banget!".</p>
            </div>
            <div class="comment">
                <p class="comment-author">Rmw</p>
                <p class="comment-text">"Suka dengan pesan tentang mengejar impian sambil mencintai. Inspiratif!"</p>
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