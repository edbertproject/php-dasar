<!-- <?php 
    // standart array
    $name = array("edbert" , "james" , "robert");
    $number = [ "20" , "90" , "100"];

    print_r($number); // is simpler
    echo "<br>";
    var_dump($name); // is more complex
    echo "<br>";
    echo $name[0]; // using echo

    $number[] = "200"; // adding value in array
    print_r($number);    

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Nama Mahasiswa</h1>

    <!-- using echo -->
    <?php $mahasiswa = [ "edbert" , "andoyo" , "08161354776" , "tangerang" , "edbertandoyo27@gmail.com" ];  ?>
    <ul>
        <li>Nama depan = <?= $mahasiswa[0] ?></li>
        <li>Nama belakang = <?= $mahasiswa[1] ?></li>
        <li>No hp = <?= $mahasiswa[2] ?></li>
        <li>Kota = <?= $mahasiswa[3] ?></li>
        <li>Email = <?= $mahasiswa[4] ?></li>
    </ul>

    <!-- using loop -->
    <ul>
        <?php for ($i = 0 ; $i < 5 ; $i++) : ?>
            <li><?= $mahasiswa[$i];?></li>
        <?php endfor; ?>
    </ul>

    <!-- using foreach -->
    <ul>
        <?php foreach($mahasiswa as $m):  ?>
            <li><?= $m;  ?></li>
        <?php endforeach;?>
    </ul>

    <h1>Multidimensi array</h1>

    <?php $books = [
        ["a", "b" ,"c","d"],
        ["1", "2" ,"3","4"]
    ];?> 

    
    <!-- <?= $books[0][0]; // print 1 value in array multidimensi ?> -->

    <?php foreach($books as $book): ?>
        <ul>
            <?php foreach($book as $b) : ?>
                <li><?= $b ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach;?>
</body>
</html>