<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php 

$bigPara = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolores excepturi perferendis voluptate dignissimos ratione autem minima, cumque vero eveniet tempore sit praesentium, dolorem omnis sapiente eius cum fuga aut! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, nam voluptatibus, aliquid perferendis incidunt modi illum suscipit accusamus atque animi exercitationem optio nulla, ullam quas blanditiis iusto pariatur ea tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam debitis vitae amet voluptatem aliquid perspiciatis nesciunt placeat illum ipsa quidem quo, quas, impedit, aliquam cumque aspernatur facilis odio? Accusantium, voluptatibus.";

$explodedPara = explode(".", $bigPara);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            echo($bigPara);

            var_dump($explodedPara);

            for ($i=0; $i < count($explodedPara); $i++) { 
                echo ($explodedPara[$i]);
            }   
            
        ?>
    </p>
</body>
</html>