<?php
$products = [
    [
        'name' => 'Produk 1',
        'description' => 'Deskripsi produk 1',
        'price' => 50000,
        'image' => 'https://via.placeholder.com/150'
    ],
    [
        'name' => 'Produk 2',
        'description' => 'Deskripsi produk 2',
        'price' => 75000,
        'image' => 'https://via.placeholder.com/150'
    ],
    [
        'name' => 'Produk 3',
        'description' => 'Deskripsi produk 3',
        'price' => 100000,
        'image' => 'https://via.placeholder.com/150'
    ],
    [
        'name' => 'Produk 4',
        'description' => 'Deskripsi produk 4',
        'price' => 125000,
        'image' => 'https://via.placeholder.com/150'
    ],
    [
        'name' => 'Produk 5',
        'description' => 'Deskripsi produk 5',
        'price' => 150000,
        'image' => 'https://via.placeholder.com/150'
    ],
    [
        'name' => 'Produk 6',
        'description' => 'Deskripsi produk 6',
        'price' => 200000,
        'image' => 'https://via.placeholder.com/150'
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            width: 200px;
            display: inline-block;
            text-align: center;
        }
        .card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php foreach ($products as $product) : ?>
        <div class="card">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h2><?php echo $product['name']; ?></h2>
            <p><?php echo $product['description']; ?></p>
            <p>Harga: Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
