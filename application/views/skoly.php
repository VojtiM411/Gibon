<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seznam škol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container">    
    <div class="table-striped">
        <table class="table table-bordered">
            <tr class="thead-dark">
                <th>Název školy <i class="fas fa-filter"></i></th>
                <th>Zem. šířka <i class="fas fa-filter"></i></th>
                <th>Zem. délka <i class="fas fa-filter"></i></th>
            </tr>
            <?php
            if($getSkoly->num_rows() > 0)
            {
                foreach($getSkoly   ->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $row->nazev ?></td>
                        <td><?php echo $row->geo_lat ?></td>
                        <td><?php echo $row->geo_long ?></td>
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
</div>
</body>
</html>