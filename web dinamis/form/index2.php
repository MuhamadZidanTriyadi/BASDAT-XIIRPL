<html>
    <head>
        <title>Menggunakan Metode POST</title>
    </head>
    <body>
        <h1>Menggunakan Metode POST</h1>
        <form method="POST">
            <!-- Passsing data di dalam body request tanpa menampilkan secara URL -->
            <div>
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php
            $email = @$_POST['email'];
            $password = @$_POST ['password'];

            echo "Email = {$email} <br>";
            echo "Password = {$password}";
            ?>
        </form>
    </body>
</html>