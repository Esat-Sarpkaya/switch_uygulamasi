<html>
<head>
    <title>Bağlama</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(function()
        {
            $.esat =
                {
                    gonder: function ()
                    {
                        alert("Switchler Portlar ile Bağlandı.");
                    }
                }
        });

    </script>
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
                <td>
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
                <td><input class="girisInput" type="text" name="port1" id="port1"
                           placeholder="Port Numarası Girin...">
                </td>
            </tr>
            <tr>
                <td>Üst Switch Seç</td>
                <td>
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
                <td><input class="girisInput" type="text" name="port2" id="port2"
                           placeholder="Port Numarası Girin...">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Bağla" class="girisInput" onclick="$.esat.gonder()">
                </td>
            </tr>

            <tr>
                <a href="switchler.php">Switch Oluştur Sayfasına Dön
                </a>
            </tr>

        </table>
        <tr>
            <td>Bağlanmış Switchler ve Portlar:</td>
            <td><?php
                include 'baglan.php';
                $s = "select * from baglama";
                if ($sorgu = mysqli_query($conn, $s))
                {
                    while ($row = mysqli_fetch_assoc($sorgu))
                    {
                        echo $row['s_adi'];
                        echo " ";
                        echo $row['port1'];
                        echo " ";
                        echo $row['s_adi2'];
                        echo " ";
                        echo $row['port2'];
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
