<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <!--1-->
    <div style="border: 2px solid black; padding: 20px; margin-bottom: 20px;">
        <h1>Operasi</h1>
        <?php
            $gaji = 1000000;
            $pajak = 0.1;
            $thp = $gaji - ($gaji*$pajak);
            echo "Gaji sebelum pajak = Rp. $gaji <br>";
            echo "Gaji yang dibawa pulang = Rp. $thp";
        ?>
    </div>


    <!--2-->
    <div style="border: 2px solid black; padding: 20px; margin-bottom: 20px;">
        <h1>Kondisi IF</h1>
        <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }
        ?>
    </div>
    <!--3-->
    <div style="border: 2px solid black; padding: 20px; margin-bottom: 20px;">
        <h1>Kondisi Switch</h1>
        <?php
            $nama_hari = date("l");
            switch ($nama_hari) {
                case "Sunday":
                    echo "Minggu";
                    break;
                case "Monday":
                    echo "Senin";
                    break;
                case "Tuesday":
                    echo "Selasa";
                        break;
                default:
                    echo "Sabtu";
            }
        ?>
    </div>

    <!--4-->
    <div style="border: 2px solid black; padding: 20px; margin-bottom: 20px;">
        <h1>Perulangan for</h1>
        <?php
        echo "Perulangan 1 sampai 10 <br />";
        for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }
        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
        }
        ?>
    </div>

    <!--5-->
    <div style="border: 2px solid black; padding: 20px; margin-bottom: 20px;">
        <h1>Perulangan while</h1>
        <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
        ?>
    </div>

    <!--6-->
    <div style="border: 2px solid black; padding: 20px; margin-bottom: 20px;">
        <h1>Perulangan dowhile</h1>
        <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
        } while ($i<=10);
        ?>
    </div>
</body>
</html>