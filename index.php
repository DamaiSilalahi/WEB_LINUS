<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/stylenav.css">  
    <link rel="stylesheet" href="css/dm_main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Didot&display=swap" rel="stylesheet">
    <title>LINUS TRACKING</title>
    <script>
        function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");
    }

    </script>
</head>
<body>
    <nav>
        <div class="logo-container">
            <img src="img/logousu.jpg" alt="logo usu">
        </div>
        <div class="center-nav">
            <a href="index.php"> 
                <h1>
                    <span>LINUS</span>
                    <span>TRACKING</span>
                </h1>
            </a>
            <a href="index.php" class="location-linus-btn"> <!-- Pastikan jalur file benar -->
                <img src="img/logolinus1.png" alt="logolinus">
            </a>
        </div>
        
      <div class="hamburger" onclick="toggleSidebar()">
          &#9776;
      </div>
  </nav> 

<aside id="sidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
    <a href="TL/TentangLinus.php" onclick="openTentangLinus()">Tentang Linus</a>
    <a href="faq/faq.php" onclick="openFAQ()">Pertanyaan</a>

    <div class="toggle-container">
        <input type="checkbox" id="darkModeToggle">
        <label for="darkModeToggle" class="toggle-label">
            <span class="sun-icon">🌞  </span>
            <span class="moon-icon"> 🌜 </span>
            <div class="toggle-ball"></div>
        </label>
    </div>
  </aside>

     <!-- Notification Box -->
     <div class="notification-box" id="notification">
        <p id="notificationMessage">Ini adalah pemberitahuan!</p>
    </div>
    

    
    <script>
        // Tampilkan notifikasi setelah 2 detik (bisa diubah sesuai kebutuhan)
        setTimeout(() => {
            showNotification(" ⚠️ LINUS sedang tidak beroperasi", 5000);
        }, 2000);
    </script>

    <main>
        <div class="mapContainer">
            <p>LIVE TRACKING</p>
            <iframe width="100%" height="450" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="layanan-pengaduan">
                <div class="icon-box">
                    <i class="fa fa-user" style="font-size: 100px;"></i>
                </div>
                <p style="font-size: 35px">LAYANAN<br>PENGADUAN</p>
            </div>
            <div class="contact-info">
                <div class="phone">
                    <i class="fa fa-phone"></i>
                    <i class="fa fa-whatsapp"></i>
                    <span>0812-6356-534<br>0812-8688-5588</span>
                </div>
            </div>
        </div>
    </footer>   
    <script src="js/script.js"></script>
</body>
</html>
