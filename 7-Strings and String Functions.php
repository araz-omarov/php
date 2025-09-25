<?php
# 1) strlen() – mətnin uzunluğunu qaytarır
$text = "Hello World!";
echo strlen($text);   # Çıxış: 12 
echo "<br>";


# 2) str_word_count() – sözlərin sayını verir
$text = "Salam mənim adım Arazdır";
echo str_word_count($text);   # Çıxış: 4
echo "<br>";


# 3) strrev() – mətni tərsinə çevirir
echo strrev("Araz");  # Çıxış: zara
echo "<br>";


# 4) strpos() – mətndə sözün mövqeyini qaytarır (ilk harfdən başlayır)
echo strpos("Salam Araz", "Araz");   # Çıxış: 6
echo "<br>";


# 5) str_replace() – mətndə sözü başqa sözlə əvəz edir
$text = "Salam Dünya";
echo str_replace("Dünya", "Araz", $text);  
# Çıxış: Salam Araz
echo "<br>";


# 6) strtolower() – hərfləri kiçildər
echo strtolower("AZƏRBAYCAN");  # Çıxış: azərbaycan
echo "<br>";

# strtoupper() – hərfləri böyüdər
echo strtoupper("salam");       # Çıxış: SALAM
echo "<br>";


# 7) substr() – mətndən müəyyən hissəni kəsib çıxarır
$text = "Programmer";
echo substr($text, 0, 3);   # Çıxış: Pro (ilk 3 hərf)
echo "<br>";
echo substr($text, 3, 4);   # Çıxış: gram (3-cü hərfdən 4 hərf götürür)
?>
