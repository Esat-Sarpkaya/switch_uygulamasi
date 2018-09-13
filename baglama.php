<html>
<head>
    <title>Bağlama</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="duzen.css">
</head>

<body>

<?php include 'baglan.php'; ?>

<div class="ortala">

    <form action="baglamaPost.php" method="post">
        <table border="1" width="100%">

            <tr>
                <td>Switch Seç</td>
                <td colspan="5">
                    <select class="girisInput" type="text" name="s_adi" id="s_adi">

                        <?php
                        $sorguswitch = "select * from switch ";
                        if ($sorgu = mysqli_query($conn, $sorguswitch))
                        {
                            while ($row = mysqli_fetch_assoc($sorgu))
                            {
                                ?>
                                <option value="<?php echo $row['s_adi']; ?>"> <?php
                                    echo $row['s_adi']; ?></option>
                                <?php
                            }
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Switch'e Bağlı Port</td>
                <td colspan="5"><input class="girisInput" type="text" name="port1" id="port1"
                           placeholder="Port Numarası Girin...">
                </td>
            </tr>
            <tr>
                <td>Üst Switch Seç</td>
                <td colspan="5">
                    <select class="girisInput" type="text" name="s_adi2" id="s_adi">
                        <?php
                        $sorguswitch = "select * from switch";
                        if ($sorgu = mysqli_query($conn, $sorguswitch))
                        {
                            while ($row = mysqli_fetch_assoc($sorgu))
                            {
                                ?>
                                <option value="<?php echo $row['s_adi']; ?>">
                                    <?php echo $row['s_adi']; ?></option>
                                <?php
                            }
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Üst Switch'e Bağlı Port</td>
                <td colspan="5"><input class="girisInput" type="text" name="port2" id="port2"
                           placeholder="Port Numarası Girin...">
                </td>
            </tr>
            <tr>
                <td height="40" colspan="5">
                    <input type="submit" value="Bağla" class="girisInput">
                </td>
            </tr>

            <tr>
                <a href="switchler.php">Switch Oluştur Sayfasına Dön
                </a>
            </tr></table>

            <table border="1" width="100%">
            <tr>
                <td>Bağlanmış Switchler ve Portlar:</td>
                <?php
                include 'baglan.php';
                ?><td width="150"><?php
                    $s = "SELECT * FROM baglama";
                    if ($sorgu = mysqli_query($conn, $s))
                    {
                        while ($row = mysqli_fetch_assoc($sorgu))
                        {
                            echo $row['s_adi'];
                            echo('<br>');
                        }
                    }?></td>

                <td width="45"><?php
                    $t = "SELECT * FROM baglama";
                    if ($sorgu2 = mysqli_query($conn, $t))
                    {
                        while ($row = mysqli_fetch_assoc($sorgu2))
                        {
                            echo $row['port1'];
                            echo('<br>');
                        }
                    }
                    ?></td>
                <td width="150"><?php
                    $k = "SELECT * FROM baglama";
                    if ($sorgu = mysqli_query($conn, $k))
                    {
                        while ($row = mysqli_fetch_assoc($sorgu))
                        {
                        echo $row['s_adi2'];
                        echo('<br>');
                        }
                    }?></td><td width="45"><?php

                    $l = "SELECT * FROM baglama";
                    if ($sorgu2 = mysqli_query($conn, $l))
                    {
                        while ($row = mysqli_fetch_assoc($sorgu2))
                        {
                            echo $row['port2'];
                            echo('<br>');
                        }
                    }?></td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>
