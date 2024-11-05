<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Kuliner Nusantara</title>
    <style>
        /* CSS untuk Navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
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
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            color: #d9534f;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }

        /* Styling Form Kontak */
        form {
            display: flex;
            flex-direction: column;
        }

        form input, form textarea {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: vertical;
        }

        form button {
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #c9302c;
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
            <a href="about.html">Tentang Kami</a>
            <a href="resep.html">Resep</a>
            <a href="kontak.html" class="active">Kontak</a>
        </div>
    </div>
    
    <!-- Konten Utama -->
    <div class="content">
        <h1>Kontak Kami</h1>
        <p>Apakah Anda memiliki pertanyaan, saran, atau ingin bekerja sama dengan kami? Silakan hubungi kami melalui formulir di bawah ini, dan kami akan segera menghubungi Anda kembali.</p>
        
        <!-- Form Kontak -->
        <form action="proses_kontak.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email Anda" required>
            <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

</body>
</html>
