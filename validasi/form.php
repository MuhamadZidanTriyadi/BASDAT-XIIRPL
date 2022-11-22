<html>
    <head>
        <title>Validasi Form</title>
    </head>
    <body>
        <form action="proses.php">
            <div>
                <label>Nama(Harus Input Nama)</label><br>
                <input type="text" name="nama">
            </div>
            <div style="margin-top: 10px;">
                <label>Email(Harus Input @)</label><br>
                <input type="text" name="email">
            </div>
            <div style="margin-top: 10px;">
                <label>Username(Tidak Boleh Regex)</label><br>
                <input type="text" name="username">
            </div>
            <div style="margin-top: 10px;">
                <label>Usia(Harus Angka)</label><br>
                <input type="text" name="usia">
            </div>
            <div style="margin-top:10px;"></div>
            <button>Submit</button>
        </form>
    </body>
</html>