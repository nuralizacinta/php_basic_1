<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        $first_sentence = "Hello PHP!";
        $second_sentence = "I'm ready for the challenges";
        
        // Menghitung panjang string dan jumlah kata pada kalimat pertama
        $panjang_string1 = strlen($first_sentence);
        $jumlah_kata1 = str_word_count($first_sentence);
        
        // Menghitung panjang string dan jumlah kata pada kalimat kedua
        $panjang_string2 = strlen($second_sentence);
        $jumlah_kata2 = str_word_count($second_sentence);
        
        // Menampilkan hasil
        echo "Dari kata: \"$first_sentence\"<br>";
        echo "Panjang string: $panjang_string1<br>";
        echo "Jumlah kata: $jumlah_kata1<br>";
        
        echo "Dari kata: \"$second_sentence\"<br>";
        echo "Panjang string: $panjang_string2<br>";
        echo "Jumlah kata: $jumlah_kata2<br>";

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5



        
        echo "<h3> Soal No 2</h3>";
         /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
        */
        
        // Menampilkan hasil
        $string2 = "I love PHP";
        echo "<label>String: </label> \"$string2\"<br>";
        echo "Kata pertama: ". substr($string2, 0, 1) . "<br>"; 
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
        echo "Kata ketiga: " . substr($string2, 7, 9) . "<br>";
       


   
        
        echo "<h3> Soal No 3 </h3>";
        $string3 = "PHP is old but Good!";

        // Mengganti kata "old" menjadi "awesome"
        $string3_modified = str_replace("old", "awesome", $string3);
        
        // Menampilkan hasil
        echo "String: \"$string3\"<br>";
        echo "OUTPUT: \"$string3_modified\"<br>"; 
        
        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>