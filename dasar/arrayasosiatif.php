<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array asosiatif</title>

    <style>
        img{
            height : 100px;
        }
        ul,li{
            list-style : none;
        }
        ul{
            float: left;
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

    <?php foreach($laptops as $laptop) : ?>
        <ul>
            <li><img src="<?= $laptop["gambar"]?>"></li>
            <li><strong>Merek = </strong><?= $laptop["merek"] ?></li>   
            <li><strong>Stok = </strong><?= $laptop["stok"] ?></li>
            <li><strong>Prosesor = </strong><?= $laptop["prosesor"] ?></li>
            <li><strong>Tahun = </strong><?= $laptop["tahun"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>