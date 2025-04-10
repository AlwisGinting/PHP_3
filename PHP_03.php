<!DOCTYPE html>
<html>
<head>
    <title>Angka Muncul Lebih dari Satu Kali</title>
</head>
<body>

<h2>Angka yang Muncul Lebih dari 1 Kali</h2>

<?php
function findDuplicates($array) {
    $counts = [];
    $duplicates = [];

    // Hitung kemunculan tiap angka (tanpa array_count_values)
    for ($i = 0; $i < count($array); $i++) {
        $found = false;
        for ($j = 0; $j < count($counts); $j++) {
            if ($counts[$j][0] == $array[$i]) {
                $counts[$j][1]++;
                $found = true;
                break;
            }
        }
        if (!$found) {
            $counts[] = [$array[$i], 1];
        }
    }

    // Cari yang muncul lebih dari 1 kali
    for ($i = 0; $i < count($counts); $i++) {
        if ($counts[$i][1] > 1) {
            $duplicates[] = $counts[$i][0];
        }
    }

    return $duplicates;
}

$array = [790, 483, 281, 224, 483, 60, 698, 483, 790, 168];
$duplikat = findDuplicates($array);

// Tampilkan hasil
echo "Array: [".implode(", ", $array)."]<br>";
echo "Angka yang muncul lebih dari sekali: <br>";
for ($i = 0; $i < count($duplikat); $i++) {
    echo "- " . $duplikat[$i] . "<br>";
}
?>

</body>
</html>
