<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style type="text/css">
    body{
        /*padding-left: 4rem;*/
        padding-top: 5rem;
        padding-bottom: 5rem;
        background-color: #a4c9e4;
        font-family: 'Open Sans', sans-serif;
    }
  
    .formdaftar{
        border-radius:20px;
       
        padding-top:3rem;
        padding-left:5rem;
        padding-bottom:3rem;
         margin-top: 4rem;
        margin-left:25rem;
        margin-right:25rem;
        padding-right:5rem;
        background-color: #eff8ff;
    }
    </style>
</head>
    
<body>
    <header>
        <h1 style="text-align: center; color:white;"><b>Formulir Pendaftaran Siswa Baru</b></h1>
    </header>
    <div class="formdaftar">
    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
           
        </p>
         <p>
            <!--<label for="jenis_kelamin">Jenis Kelamin: </label>-->
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah Asal" />
        </p>
        
        <p>
            <input type="submit" value="Daftar" name="daftar" style="margin-left:6rem;margin-top:2rem;"/>
        </p>

        </fieldset>

    </form>
    </div>
    </body>
    <script src="js/bootstrap.min.js"></script>
</html>