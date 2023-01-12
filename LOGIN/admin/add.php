<html>
    <head>
        <title>Tambah Buku</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="form">
    <h1>Tambah Data Buku</h1>
            <form action="proses-tambah.php" method="post">
                <div class="katalog">
                <label>Id Katalog</label>
                <input type="text" name="id_katalog">
                </div>
                <div class="buku">
                <label>Judul Buku</label>
                <input type="text" name="judul_buku">
                </div>
                <div class="pengarang">
                <label>Pengarang</label>
                <input type="text" name="pengarang">
                </div>
                <div class="tahun">
                <label>Tahun Terbit</label>
                <input type="date" name="thn_terbit">
                </div>
                <div class="penerbit">
                <label>Penerbit</label>
                <input type="text" name="penerbit">
                </div>
                <div class="harga">
                <label>Harga</label>
                <input type="text" name="harga">
                </div>
                <br>
                <button class="tombol_login" type="submit"><a href="index.php"></a>Submit</button>
                </div>
            </form>
        </table>
    </body>
</html>