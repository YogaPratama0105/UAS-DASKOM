<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Pratama Catalog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
</head>
<body>
    <!--loader-->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/yoga.cahtpati"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/YogaAdi42556454"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/yogapratama_officialid/"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>

    <header>
        <div class="container">
            <h1><a href="Index.html">Yoga Pratama Store</a></h1>
            <ul>
                <li><a href="Index.html">HOME</a></li>
                <li><a href="About.html">ABOUT</a></li>
                <li><a href="Product.html">PRODUCT</a></li>
                <li class="active"><a href="Buku Tamu.php">BUKU TAMU</a></li>
            </ul>
        </div>
    </header>

    <!--label-->
    <section class="label">
        <div class="container">
            <p>Home / Buku Tamu</p>
        </div>
    </section>

    <div class="buku-tamu" align="center">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="fname">Nama Lengkap</label>
            <br>
            <input type="text" id="fname" name="fname">
            <br>
            <br>

            <label for="fnim">NIM</label>
            <br>
            <input type="text" id="fname" name="fnim">
            <br>
            <br>

            <label for="ffakul">Fakultas</label>
            <br>
            <input type="text" id="fname" name="ffakul">
            <br>
            <br>

            <label for="fmail">Email</label>
            <br>
            <input type="text" id="fname" name="fmail">
            <br>
            <br>

            <label for="faddress">Alamat</label>
            <br>
            <input type="text" id="fname" name="faddress">
            <br>
            <br>

            <input type="submit" value="submit">
        </form>
        <div>
            <br>
            <?php
                if(isset($_POST['fname'])){
                    $fname = $_POST['fname'];
                    echo "Nama Lengkap : $fname";
                    echo "<br>";
                }

                if(isset($_POST['fnim'])){
                    $fnim = $_POST['fnim'];
                    echo "NIM : $fnim";
                    echo "<br>";
                }

                if(isset($_POST['ffakul'])){
                    $ffakul = $_POST['ffakul'];
                    echo "Fakultas : $ffakul";
                    echo "<br>";
                }

                if(isset($_POST['fmail'])){
                    $fmail = $_POST['fmail'];
                    echo "Email : $fmail";
                    echo "<br>";
                }

                if(isset($_POST['faddress'])){
                    $faddress = $_POST['faddress'];
                    echo "Alamat : $faddress";
                    echo "<br>";
                }
            ?>
        </div>
    </div>

    <!--Jam Digital-->
    <!--<h2 align="center">==== Tanggal dan Jam Digital ====</h2> -->
    <h4 align="center" id="tanggal"></h4>
    <div class="jam_digital" id="jam_digital">
        <div class="kotak">
            <p id="jam"></p>
        </div>
        <div class="kotak">
            <p id="menit"></p>
        </div>
        <div class="kotak">
            <p id="detik"></p>
        </div>
    </div>

    <script type="text/javascript">
        var tgl = new Date();
        document.getElementById("tanggal").innerHTML = "waktu akses"+tgl;

        window,setTimeout("waktu()", 1000);
        function waktu(){
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }

        var i=0;
        function change(){
            // var classJamDigital = document.getElementsByClassName("jam_digital");
            var classJamDigital = document.getElementById("jam_digital");
            var color = ["LightCoral", "Maroon", "LemonChiffon", "GreenYellow", "HoneyDew", "FloralWhite", "DarkTurquoise",
            "LavenderBlush", "Linen"];

            // classJamDigital[0].style.backgroundColor = color[i]; //class
            classJamDigital.style.backgroundColor = color[i]; //id
            i=(i+1)%color.length;
        }
        setInterval(change, 1000);
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>

    <!--footer-->
    <div class="footer">
        <p><b>Copyright &Copy2022 Yoga Adi Pratama</b></p>
    </div>
</body>
</html>