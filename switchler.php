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
                <td><input class="girisInput" type="text" name="s_adi" id="id" placeholder="Switch Adı Girin..."></td>
            </tr>

            <tr>
                <td>Switch Ip'si Girin</td>
                <td><input class="girisInput" type="text" name="ip_no" placeholder="Switch IP'si Girin..."></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Kaydet" class="girisInput">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="baglama.php">Switchleri Bağla
                </td>
            </tr>

        </table>
    </form>
</div>
</body>

</html>