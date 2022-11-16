<html>
    <head>
        <title>Form Get dan Post</title>
    </head>
    <body>
        <form>
            <div>
                <label>Nama</label><br>
                <input type="text" name="nama" placeholder="Masukan Nama">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email" placeholder="Masukin Email">
            </div>
            <div>
                <button>Submit</button>
            </div>
            <?php
            // @ berfungsi untuk mengubah nilai menjadi null jika form tidak di isi
                $nama = @$_GET['nama'];
                $email = @$_GET['email'];
                
                echo "Nama = {$nama} <br>";
                echo "Email = {$email}";
            ?>
        </form>
    </body>
</html>