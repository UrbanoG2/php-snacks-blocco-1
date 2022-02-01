<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $datas = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    // foreach ($datas as $key => $data) {
    //     echo $key . "<br>";

    //     foreach ($data as $value) {
    //         echo $value["name"] . $value["lastname"] . "<br>";  
    //     }
    // }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/snack6.css">
</head>
<body>
   <div class="teachers">

   <h1>TEACHERS</h1>
    <?php 
        // foreach ($datas as $key => $data) {
        //     if ($key === "teachers") {
        //         foreach ($data as $value) {
        //             echo $value["name"] . " " . $value["lastname"] . "<br>";
        //         }
        //     }
        // }

        foreach ($datas["teachers"] as $key => $data) {
                
            echo $data["name"] . " " . $data["lastname"] . "<br>";
    
        }
    ?>
   </div>

   <div class="pm">

        <h1>PM</h1>

        <?php
            foreach ($datas as $key => $data) {
                if ($key === "pm") {
                    foreach ($data as $value) {
                        echo $value["name"] . " " . $value["lastname"] . "<br>";
                    }
                }
            }
        ?>
        

   </div>
        
</body>
</html>