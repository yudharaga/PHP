<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post  Query</title>
</head>
<h1> Form Input Data Mahasiswa</h1>
<body>
    <form action="proses.php" method="post">
        <div>
            <label for="">NIM:</label>
            <input type="text" name="nim"> <br><br>
        </div>
        <div>
            <label for="">Nama:</label>
            <input type="text" name="nama"><br><br>
        </div>
        <div>
            <label for="">Jenis Kelamin:</label>
            <input type="radio" name="jk" value="Man">
                <label for="Man">laki-laki</label>
            <input type="radio" name="jk" value="Woman">
                <label for="Woman">Perempuan</label>
        </div>
        <div>
            <label for="">Tempat Lahir:</label>
            <input type="text" name="tl">
        </div>
        <div>
            <label for="">Jurusan: </label>
            <select name="jr">
                    <option value="#" disabled>Pilih Lah</option>  
                   <option value="TI">Teknik Informatika</option>
                   <option value="AKT">Akuntansi</option>
                   <option value="other">Lainya</option>
                  </select>
        </div>
        <div>
                <label for="">Tahun Masuk: </label>
                <select name="in">
                        <option value="#" disabled>Silahkan Pilih</option>  
                       <option value="two">2000</option>
                       <option value="one">2001</option>
                       <option value="other">Lainya</option>
                      </select>
        </div>
        <input type="button" value="submit">
    </form>
</body>
</html>