<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mapa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/map.css"/>
    <script src="assets/js/map.js"></script>
    
</head>
<body class="container">
    <div class="table-striped">
        <table class="table table-bordered">
            <tr class="thead-dark">
                <th>Název školy</th>
                <th>Zem. šířka</th>
                <th>Zem. délka</th>
            </tr>
            <?php
            if($getSkoly->num_rows() > 0)
            {
                foreach($getSkoly->result() as $row)
                {
                ?>
            <tr>
                <td><?php echo $row->nazev ?></td>
                <td><?php echo $row->geo-lat ?></td>
                <td><?php echo $row->geo-long ?></td>
            </tr>
                <?php
                }
            }
            else
            {
            ?>
            <tr>
                <td>Chybí data</td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <div id="map"></div>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxmKSSFmq5tMa9SgQD1JmgD9cA09WfoPw&callback=initMap"></script>
</body>
</html>