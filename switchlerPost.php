<?php
include 'baglan.php';
if((strlen($_POST['s_adi']) > 0) && (strlen($_POST['ip_no']) > 0))
{
    $s_adi = $_POST['s_adi'];
    //$s_durum = $_POST['s_durum'];
    $ip_no = $_POST['ip_no'];

    $sql = "insert into switch (s_adi,ip_no) values ( '".$s_adi."', '".$ip_no."') ";

    if(mysqli_query($conn,$sql))
    {
        $sorguswitch = "select * from switch where s_adi='" . $s_adi . "' 
        and ip_no='" .$ip_no. "'";

        echo 'Switch Kaydı Yapıldı';
        header("Refresh: 1; url=switchler.php");
    }
    else
    {
        echo 'Hata : ' .mysqli_error($conn);
    }
}
else
{
    echo 'Verileri Eksiksiz Girin';
    header("Refresh: 5; url=switchler.php");
}
