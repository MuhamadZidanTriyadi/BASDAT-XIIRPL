<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style2.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <div class="form">
        <h1>Login Aplikasi</h1>
        <h4>Anggota Access</h4>
        <form action="proses.php" method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><Input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><Input type="password" name="pass" id="pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><Input type="submit" class="tombol_login" value="login"></td>
                </tr>
                <tr>
                    <td>Halaman Utama <a class="link" href="../index.php">Disini</a></td>
                </tr>
                </table>
                <h4>Anda Belum Punya Akun ? Daftar <a href="daftar.php">Disini</a></h4>
            </div>
        </form>
    </body>
</html>