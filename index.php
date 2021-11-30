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
        /*padding-left: 4rem;*/
        padding-top: 5rem;
        padding-bottom: 5rem;
        background-color: #a4c9e4;
        font-family: 'Open Sans', sans-serif;
    }
    .menus{
        border-radius:20px;
        padding-top:3rem;
        padding-left:5rem;
        padding-bottom:4rem;
         margin-top: 4rem;
        margin-left:25rem;
        margin-right:25rem;
        padding-right:5rem;
        background-color: #eff8ff;
    }
    .button {
      background-color: #40627d; /* Green */
      border: none;
      color: white;
      padding: 10px 28px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
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
    </style>
</head>

<body>
    <header style="text-align: center; color:white;">
        <h1 ><b>Pendaftaran Siswa Baru</b></h1>
        <h3 ><b>SMK Coding 2021</b></h3>
        
    </header>
    
    <div class="menus">
    <h4 style="text-align: center; padding-bottom: 2rem;">Menu</h4>
    <nav>
        <ul>
            <a href="form-daftar.php" style="margin-left:3rem; ">
              <button class="button button1">Daftar Baru</button>
            </a>
            <a href="list-siswa.php" style="margin-left:2.2rem; padding-top:2rem">
              <button class="button button1">Data Pendaftar</button>
            </a>
        </ul>
     
    </nav>
    </div>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
<script src="js/bootstrap.min.js"></script>
    </body>
</html>