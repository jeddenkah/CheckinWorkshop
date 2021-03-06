<!DOCTYPE html>
<html style="background-image: url(./static/img/bg.png)">
<head>
    <title>Checkin Form | International Workshop</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css" type="text/css">
    <link href="static/css/sweetalert2.css" rel="stylesheet">
</head>
    <!------ Include the above in your HEAD tag ---------->

<body onload="sweetalertclick()" style="background: none !important">
    <div class="wrapper fadeInDown" style="background: none !important">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="static/img/logo.png" id="icon" alt="User Icon">
            </div>
            <!-- <div class="fadeIn first">
                <img src="static/img/logo.png" id="icon" alt="User Icon">
            </div> -->
            <!-- Login Form -->
            <form action="input-aksi.php" method="post">
                <input type="number" name="nim" class="fadeIn second" id="nim" placeholder="NIM / NIDN" required="">
                <input type="text" name="nama" class="fadeIn second" id="nama" placeholder="Nama Lengkap (akan tertulis di sertifikat)" required="">
                <input type="email" name="email" class="fadeIn third" id="email" placeholder="Email (untuk pengiriman sertifikat)" required="">
                <input type="submit" class="fadeIn fourth" value="Submit" name="submit">
            </form>
        </div>
    </div>

    <script src="static/js/jquery-3.4.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/main.js"></script>
    <script src="static/js/sweetalert2.all.min.js"></script>
    <script>
    function sweetalertclick() {
        Swal.fire({
        icon: 'success',
        title: 'Halo, '+'<?php echo $_GET["name"] ?>',
        text: 'Selamat datang di International Workshop Data Science!',
        timer: 5000
        })
    }
    </script>


</body>

</html>