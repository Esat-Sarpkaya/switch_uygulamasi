<?php
include 'baglan.php';
if((strlen($_POST['s_adi']) > 0) && (strlen($_POST['ip_no']) > 0))
{
    $s_adi = $_POST['s_adi'];
    $ip_no = $_POST['ip_no'];
    $sql = "insert into switch (s_adi,ip_no) values ( '".$s_adi."', '".$ip_no."') ";
//--------------------------------------------------------------------------------------
    $kontrol= isset($_POST["submit"]) ? $_POST["submit"] : '';

    $adKontrol = mysqli_query($conn, "SELECT * FROM switch WHERE s_adi='$s_adi'");
    $ipKontrol = mysqli_query($conn, "SELECT * FROM switch WHERE ip_no='$ip_no'");

    if(mysqli_num_rows($adKontrol) > 0)
    {
        echo "bu switch ismi daha once kullanilmistir..";
        header("Refresh: 1; url=switchler.php");
    }
    else if (mysqli_num_rows($ipKontrol) > 0)
    {
        echo "bu ip numarasi daha once kullanilmistir..";
        header("Refresh: 1; url=switchler.php");
    }
    else
    {
        if(mysqli_query($conn,$sql))
        {
            $sorguswitch = "select * from switch where s_adi='" . $s_adi . "' and ip_no='" .$ip_no. "'";

            echo 'Switch Kaydı Yapıldı';
            header("Refresh: 1; url=switchler.php");
        }
        else
        {
            echo 'Hata : ' .mysqli_error($conn);
        }
    }
}
//---------------------------------------------------------------------------------------
else
{
    echo 'Verileri Eksiksiz Girin';
    header("Refresh: 1; url=switchler.php");
}
