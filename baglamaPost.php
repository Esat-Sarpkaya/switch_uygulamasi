<?php
include 'baglan.php';
if((strlen($_POST['s_adi']) > 0) && (strlen($_POST['port1']) > 0) && (strlen($_POST['s_adi2']) > 0) && (strlen($_POST['port2']) > 0))
{
    $s_adi = $_POST['s_adi'];
    $port1 = $_POST['port1'];
    $s_adi2 = $_POST['s_adi2'];
    $port2 = $_POST['port2'];

    $sql = "insert into baglama (s_adi, port1, s_adi2, port2) 
            values ( '" .$s_adi. "', '" .$port1. "', '" .$s_adi2. "', '" .$port2. "')";

    $kontrol= isset($_POST["submit"]) ? $_POST["submit"] : '';
    $port1Kontrol = mysqli_query($conn, "SELECT * FROM baglama WHERE port1='$port1'");
    $port2Kontrol = mysqli_query($conn, "SELECT * FROM baglama WHERE port2='$port2'");
//-----------------------------------------------------------------------------------------------

    if(mysqli_num_rows($port1Kontrol) > 0)
    {
        echo "bu port şu anda kullanilmaktadır..";
        header("Refresh: 1; url=baglama.php");
    }
    else if (mysqli_num_rows($port2Kontrol) > 0)
    {
        echo "bu port şu anda kullanilmaktadır..";
        header("Refresh: 1; url=baglama.php");
    }

//-----------------------------------------------------------------------------------------------
    else
    {
        if (mysqli_query($conn, $sql))
        {
            echo 'Switchler portlar ile bağlandı.';
            header("Refresh: 1; url=baglama.php");
        }
        else
        {
            echo 'Hata : ' . mysqli_error($conn);
        }
    }
}
else
{
    echo 'Verileri Eksiksiz Girin';
    header("Refresh: 1; url=baglama.php");
}
