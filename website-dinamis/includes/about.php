<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Kuliner Nusantara</title>
    <style>
        /* CSS untuk Navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #d9534f;
            padding: 10px 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }

        .navbar a:hover {
            background-color: #c9302c;
            border-radius: 5px;
        }

        .navbar a.active {
            background-color: #c9302c;
            border-radius: 5px;
        }

        .content {
            padding: 50px 20px;
            text-align: center;
            background-color: #f7f7f7;
            max-width: 800px;
            margin: 50px auto;
            border-radius: 10px;
        }

        .content h1 {
            color: #d9534f;
        }

        .content p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Styling untuk gambar tim */
        .team {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .team img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .team .member {
            text-align: center;
            max-width: 150px;
        }

        .team .member p {
            margin-top: 10px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a href="#">Kuliner Nusantara</a>
        </div>
        <div class="menu">
            <a href="home.html">Home</a>
            <a href="about.html" class="active">Tentang Kami</a>
            <a href="resep.html">Resep</a>
            <a href="kontak.html">Kontak</a>
        </div>
    </div>
    
    <!-- Konten Utama -->
    <div class="content">
        <h1>Tentang Kami</h1>
        <p>Kuliner Nusantara adalah platform yang didedikasikan untuk memperkenalkan kelezatan kuliner dari berbagai daerah di Indonesia.
           Kami berkomitmen untuk menyediakan resep otentik, ulasan tempat makan terbaik, dan inspirasi kuliner sehari-hari.
           Misi kami adalah melestarikan warisan kuliner Indonesia dan membuatnya mudah diakses bagi semua orang, di mana saja.</p>
        
        <!-- Tim Kami -->
        <h2>Tim Kami</h2>
        <div class="team">
            <div class="member">
                <img src="member1.jpg" alt="Anggota Tim 1">
                <p>Nama 1</p>
            </div>
            <div class="member">
                <img src="member2.jpg" alt="Anggota Tim 2">
                <p>Nama 2</p>
            </div>
            <div class="member">
                <img src="member3.jpg" alt="Anggota Tim 3">
                <p>Nama 3</p>
            </div>
        </div>
    </div>

</body>
</html>
