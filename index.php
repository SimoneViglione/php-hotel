<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <form action="index.php" method="get">
        <label for="parcheggio" class="mt-4 mb-3 ms-2">Parcheggio</label>
        <select id="parcheggio">
            <option> Sì </option>
            <option> No </option>
        </select>

        <label for="voto" class="ms-2"> Voto </label>
        <input type="text" id="voto" name="vote">

        <button type="submit" class="btn btn-primary"> Cerca </button>
        <button type="reset" class="btn btn-secondary"> Cancella </button>

    </form>


    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Stelle</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">
                    <?php
                        foreach ($hotels as $hotel)
                        echo $hotel['name'] . "<br>" . "<br>";
                    ?>      
                </th>

                <td>
                    <?php
                        foreach ($hotels as $hotel)
                        echo $hotel['description'] . "<br>" . "<br>";
                    ?>      
                </td>

                <td>
                    <?php
                        foreach ($hotels as $hotel)
                        if ($hotel['parking'] == true) {
                            echo "Sì" . "<br>" . "<br>";
                        } else {
                            echo "No" . "<br>" . "<br>";
                        }
                    ?>      
                </td>

                <td>
                    <?php
                        foreach ($hotels as $hotel)
                        echo $hotel['vote'] . "<br>" . "<br>";
                    ?>      
                </td>

                <td>
                    <?php
                        foreach ($hotels as $hotel)
                        echo $hotel['distance_to_center'] . "<br>" . "<br>";
                    ?>      
                </td>
            </tr>

            
        </tbody>

    </table>
</body>
</html>