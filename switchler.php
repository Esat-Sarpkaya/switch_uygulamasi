<html>
<head>
    <title>Switch</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="duzen.css">
</head>

<body>
<div class="ortala">
    <form action="switchlerPost.php" method="post">
        <table border="1" width="100%">
            <tr>
                <td>Switch Oluştur</td>
                <td colspan="2"><input class="girisInput" type="text" name="s_adi" id="id" placeholder="Switch Adı Girin..."></td>
            </tr>

            <tr>
                <td>Switch Ip'si Girin</td>
                <td colspan="2"><input class="girisInput" type="text" name="ip_no" placeholder="Switch IP'si Girin..."></td>
            </tr>

            <tr>
                <td height="40" colspan="3">
                    <input type="submit" value="Kaydet" class="girisInput">
                </td>
            </tr>
            <tr>
                <a href="baglama.php">Switchleri Bağla </a>
            </tr>

        </table>
        <table border="1" width="100%">
        <tr>
            <td>Oluşturulmuş Switchler:</td>
            <?php
            include 'baglan.php';
            ?><td width="225"><?php
                $s = "SELECT * FROM switch";
                if ($sorgu = mysqli_query($conn, $s))
                {
                    while ($row = mysqli_fetch_assoc($sorgu))
                    {
                        echo $row['s_adi'];
                        echo('<br>');
                    }
                }?>
            </td>
            <td width="225"><?php
                $t = "SELECT * FROM switch";
                if ($sorgu2 = mysqli_query($conn, $t))
                {
                    while ($row = mysqli_fetch_assoc($sorgu2))
                    {
                        echo $row['ip_no'];
                        echo('<br>');
                    }
                }?>
            </td>
        </tr>
        </table>

    </form>
</div>
</body>

</html>
