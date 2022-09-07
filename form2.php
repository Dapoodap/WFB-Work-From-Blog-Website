<?php
    if (isset($_POST['submit'])){
        $nama=$_POST['namamu'];
        $mail=$_POST['email'];
        $saran=$_POST['saran'];
        echo "Nama anda = <b>$nama</b>";
        echo "<br>";
        echo "Email anda = $mail";
        echo "<br>";
        echo "saran dan tanggapan anda = $saran";
        echo '<pre>'; print_r($_POST);
        echo "Terima kasih atas sarannya dan akan kami baca";
        echo "<br>";
    }
    ?>