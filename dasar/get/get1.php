<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get</title>

    <style>
        img{
            height : 100px;
        }
    </style>
</head>
<body>
    
    <?php 
    // you can define your index key without put they in order because they have key for each value
    $laptops = [
        [
            "gambar" => "laptop-1.png",
            "merek" => "HP",
            "stok" => "200",
            "prosesor" => "i7",
            "tahun" => "2018"
        ],
        [
            "merek" => "HP",
            "stok" => "100",
            "prosesor" => "i3",
            "tahun" => "2015",
            "gambar" => "laptop-2.jpeg"
        ],
        [
            "gambar" => "laptop-3.jpg",
            "merek" => "Huawei",
            "stok" => "170",
            "prosesor" => "amd a10",
            "tahun" => "2016"
        ],
        [
            "gambar" => "laptop-4.jpg",
            "merek" => "Samsung",
            "stok" => "120",
            "prosesor" => "i5",
            "tahun" => "2019"
        ],
        [
            "gambar" => "laptop-5.jpg",
            "merek" => "Microsoft",
            "stok" => "160",
            "prosesor" => "i3",
            "tahun" => "2019"
        ]
    ]; ?>

    <h1>Daftar barang dan stok</h1>
    <ul>
    <?php foreach($laptops as $laptop) : ?>
            <li>
                <a href="get2.php?
                    a=<?=$laptop["gambar"]//you can set new name for _GET variable?> 
                    &merek=<?=$laptop["merek"]// or you can add same name to new variable?>
                    &stok=<?=$laptop["stok"]?>
                    &prosesor=<?=$laptop["prosesor"]?>
                    &tahun=<?=$laptop["tahun"]?>">
                    <img src="<?= $laptop["gambar"]?>">        
                </a>
            </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>