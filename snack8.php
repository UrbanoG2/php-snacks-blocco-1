<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->


<?php 

$products = [
    [
        "name" => "Volvo",
        "price" => "£60.000",
        "img" => "https://picsum.photos/200/300",
        "type" => "car",
    ],

    [
        "name" => "Ferrari",
        "price" => "£250.000",
        "img" => "https://picsum.photos/200/300",
        "type" => "car",
    ],

    [
        "name" => "Oppo",
        "price" => "£400",
        "img" => "https://picsum.photos/200/300",
        "type" => "phone",
    ],

    [
        "name" => "Iphone",
        "price" => "£1.200",
        "img" => "https://picsum.photos/200/300",
        "type" => "phone",
    ],

    [
        "name" => "Porsche",
        "price" => "£80.000",
        "img" => "https://picsum.photos/200/300",
        "type" => "car",
    ],
];


$arrayFiltered = $products;
if (isset($_GET['search']) !== false) {
    $search = $_GET['search'];
        if ($search === "all") {
            $arrayFiltered = $products;
        } else {

            $arrayFiltered = [];

            foreach ($products as $product) {
                if ($product['type'] === $search) {

                    $arrayFiltered[] = $product;
                }
            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/snack8.css">
    <title>Document</title>
</head>
<body>
    <div class="big-container">

        <form action="snack8.php" method="GET">
           <select name="search" id="search">
                <option value="all">all</option>
                <option value="car">car</option>
                <option value="phone">phone</option>
            </select>
            <button>Cerca</button>
        </form>
        
        <div class="card-container">
            <?php foreach ($arrayFiltered as $product) { ?>

                <div class="content">
                    <img src=" <?php echo ($product["img"]) ?> " alt="">
    
                    <div class="text-container">
                        <h1> <?php echo ($product["name"]) ?> </h1>
                        <h3> <?php echo ($product["price"]) ?> </h3>
                        <h3> <?php echo ($product["type"]) ?> </h3>
                    </div>

                </div>
            <?php } ?>
        </div>
        
    </div>
</body>
</html>