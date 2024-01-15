<?php
$koneksi = mysqli_connect ("localhost","root","","booking");

$nama = $_POST[ 'nama'];
$tanggalbooking = $_POST[ 'tanggalbooking'];
$email = $_POST[ 'email'];
$nomortelepon = $_POST[ 'nomortelepon'];
$pilihpaket = $_POST[ 'pilihpaket'];
$alamat = $_POST[ 'alamat'];
$submit = $_POST[ 'submit'];

$query = "INSERT INTO booking_pixay VALUES ('$nama', '$tanggalbooking', '$email', '$nomortelepon', '$pilihpaket', '$alamat', '$submit')";

mysqli_query($koneksi, $query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    
    <script>
        alert('Anda berhasil booking');

    </script>

           <center>
            <div class="card">
                <h2>HI THERE!</h2>
                <p><br/>kami tim pixay beauty<br/>untuk informasi lebih lanjut tentang data booking anda silahkan hubungi kami<br>.....
                <br/></p>

                    
                    <a href="https://chat.whatsapp.com/G2AAcHFDRvFDA3tNH8RBoE" target="_blank">
                    <button class="btn fourth">Message me on whatsapp</button></a>

</div>
                </div>
            </div>
        </div>
</center>
       
</body>
</html>