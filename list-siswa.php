<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style type="text/css">
    body{
        /*padding-left: 20rem;*/
        padding-top: 5rem;
        padding-bottom: 5rem;
        background-color: #a4c9e4;
        font-family: 'Open Sans', sans-serif;
    }
    table{
        /*margin-left:3rem;*/
        border: 1px solid black;
        width: 88%;
        border-collapse: collapse;
        height: 50px;
        vertical-align: bottom;
        
    }
   tr:nth-child(even) {background-color: #a4c9e4;}
      .button {
    /*margin-top:2rem;*/
      margin-bottom:2rem;
      background-color: #40627d; /* Green */
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      /*margin: 4px 2px;*/
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius:10px;
    }
    
    .button1 {
      background-color: white; 
      color: black; 
      border: 2px solid #40627d;
    }
    
    .button1:hover {
      background-color: #40627d;
      color: white;
    }
    .lists{
        border-radius:20px;
       
        padding-top:3rem;
        padding-left:5rem;
        padding-bottom:3rem;
        margin-top: 4rem;
        margin-left:10rem;
        margin-right:10rem;
        /*padding-right:2rem;*/
        background-color: #eff8ff;
    }
    </style>
</head>

<body>
    <header style="text-align: center; color:white;">
        <h1 ><b>Daftar Calon Siswa Baru</b></h1>
        <h3><b>SMK Coding 2021</b></h3>
    </header>
    
    <div class="lists">
    <a href="form-daftar.php">
              <button class="button button1">Daftar Baru</button>
            </a>
   
    <br>

    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p style="padding-top:2rem;">Total Pendaftar: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    </body>
    <script src="js/bootstrap.min.js"></script>
</html>