<html>
<head>
    <title>Switch</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(function()
        {
            $.esat =
                {
                    gonder: function ()
                    {
                        alert("Switch Kaydı Yapıldı.");
                    }
                }
        });

    </script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="duzen.css">
</head>

<body>
<div class="ortala">
    <form action="switchlerPost.php" method="post">
        <table border="1" width="100%">
            <tr>
                <td>Switch Oluştur</td>
                <td><input class="girisInput" type="text" name="s_adi" id="id" placeholder="Switch Adı Girin..."></td>
            </tr>

            <tr>
                <td>Switch Ip'si Girin</td>
                <td><input class="girisInput" type="text" name="ip_no" placeholder="Switch IP'si Girin..."></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Kaydet" class="girisInput" onclick="$.esat.gonder()">
                </td>
            </tr>
            <tr>
                <a href="baglama.php">Switchleri Bağla </a>
            </tr>

        </table>

        <tr>
            <td>Oluşturulmuş Switchler:</td>
            <td><?php
                include 'baglan.php';
                $s = "select * from switch";
                if ($sorgu = mysqli_query($conn, $s))
                {
                    while ($row = mysqli_fetch_assoc($sorgu))
                    {
                        echo $row['s_adi'];
                        echo " ";
                        echo $row['ip_no'];
                        echo "; ";
                    }
                }
                ?>
            </td>
        </tr>

    </form>
</div>
</body>

</html>
