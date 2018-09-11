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
                    <input type="submit" value="Bağla" class="girisInput">
                </td>
            </tr>

            <tr>
                <a href="switchler.php">Switch Oluştur Sayfasına Dön
            </tr>

        </table>
    </form>
</div>
</body>
</html>