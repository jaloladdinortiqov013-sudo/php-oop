<?php

echo "<h3>Oddiy tengsizliklar</h3>";

$a = 15;
$b = 7;

if ($a > $b) {
    echo "$a > $b → to'g'ri<br>";
}

if ($a >= 10) {
    echo "$a ≥ 10 → to'g'ri<br>";
}

if ($b < 10) {
    echo "$b < 10 → to'g'ri<br>";
}

if ($a != 7) {
    echo "$a ≠ 7 → to'g'ri<br>";
}

echo "<hr><h3>Yosh bo'yicha maslahat (real misol)</h3>";

$yosh = 17;

if ($yosh < 16) {
    echo "Siz hali yoshsiz, ota-onangiz bilan kelishingiz kerak.";
} elseif ($yosh >= 16 && $yosh < 18) {
    echo "Ota-ona roziligi bilan ba'zi narsalarni qilishingiz mumkin.";
} elseif ($yosh >= 18 && $yosh < 21) {
    echo "To'liq voyaga yetdingiz, lekin ba'zi cheklovlar hali bor.";
} else {
    echo "Siz to'liq mustaqil odamsiz!";
}

echo "<hr><h3>Ball bo'yicha baholash (o'quvchilar uchun)</h3>";

$ball = 78;

if ($ball >= 90) {
    echo "A'lo (5)";
} elseif ($ball >= 80) {
    echo "Yaxshi (4)";
} elseif ($ball >= 60) {
    echo "Qoniqarli (3)";
} else {
    echo "Qoniqarsiz (2)";
}

echo "<hr><h3>Chegirma tizimi (internet do'kon misoli)</h3>";

$summasi = 450000;          // so'm
$sotib_olingan_mahsulot_soni = 5;

if ($summasi >= 1000000) {
    $chegirma = 15;         // 15%
} elseif ($summasi >= 500000) {
    $chegirma = 10;
} elseif ($summasi >= 300000 || $sotib_olingan_mahsulot_soni >= 6) {
    $chegirma = 5;
} else {
    $chegirma = 0;
}

echo "Sizning chegirmangiz: $chegirma%<br>";
$yakuniy_summa = $summasi * (100 - $chegirma) / 100;
echo "To'lov: " . number_format($yakuniy_summa) . " so'm";

?>