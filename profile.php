<html>
    <head>
        <!-- title berfungsi untuk pemberian nama tab browser website anda-->
        <title> Nama website anda </title>
        <!-- meta berfungsi untuk search engine (SEO) membaca konten website anda-->
        <meta charset="UTF-8"></meta>
        <meta name="description" content="GALERI GAMBAR"></meta>
        <meta name="keywords" content="HTML,CSS,Website"></meta>
        <meta name="author" content="GLADIS TRI OKTAVIANI"></meta>
    </head>
    <body>
        <!-- ukuran dasar / template / canvas desain website anda-->
        <table border="1" width="1200px" height="700px" align="center">
            <!-- baris ini untuk memasukan konten banner dengan file png/jpg-->
            <tr height="150px">
                <td>
                    <img src="img/Screenshot (32).png" width="1200px" height="300px">
                </td>    
            </tr>
            <!-- baris ini untuk membuat menu-->
            <tr height="50px" style="background-color:dodgerblue;">
                <td align="center" style="word-spacing: 4em;">
                    <!-- dibawah ini adalah termasuk dalam jenis internal link-->
                    <a href="index.php" style="text-decoration: none; color: white;"><strong>Beranda</strong></a>
                    <a href="profile.php" style="text-decoration: none; color: white;">Profile</a>
                    <a href="galeri_gambar.php" style="text-decoration: none; color: white;">Gambar</a>
                    <a href="galeri_vidio.php" style="text-decoration: none; color: white;">Vidio</a>
                    <a href="kontak.php" style="text-decoration: none; color: white;"><b>Kontak</b></a>
                    <!-- dibawah ini adalah termasuk dalam jenis external link-->
                    <a href="" style="text-decoration: none; color: white;"><em>Linkedin</em></a>
                    <a href="" style="text-decoration: none; color: white;"><i>Instagram</i></a>
                </td>    
            </tr>
            <!-- baris ini adalah konten dari isi website-->
            <tr height="450px" style="background-color: dodgerblue;">
                <td valign="top">
                    <!-- Source code untuk memasukan konten di galeri gambar-->
                    <table border="1" width="700px" height="200px" style="margin-top: 30px; background-color: white">
                        <tr>
                             <td><img src="gladis.png" alt="adrian" width="310px"></td>
                             <td style="width: 400px;">
                             <h3 style="margin-left: 150px;">PROFILE</h3>
                             <hr>
                             <p>NAMA: GLADIS TRI OKTAVIANI</p>
                             <p>KELAS: XI-RPL2</p>
                             <p>ABSEN : 10</p>
                            </td>
                        </tr>
                    </table>
                </td>    
            </tr>
            <!-- baris ini untuk footer-->
            <tr height="50px" style="background-color: dodgerblue;">
                <td>
                    <p align="center" style="color: white;">GladisTriOktavianii XI-RPL2</p>
                </td>    
            </tr>
        </table>
    </body>
</html>