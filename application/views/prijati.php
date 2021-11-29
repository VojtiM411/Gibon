<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Přijatí žáci</title>
</head>
<body>
<div class="container">
    <div class="table-striped">
        <table class="table table-bordered">
            <tr class="thead-dark">
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tr>
            <?php
                $this->load->model('MainModel');
                foreach($getPrijati->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $row->pocet_prijatych.pocet ?></td>
                        <td><?php echo $row->pocet_prijatych.rok ?></td>
                        <td><?php echo $row->skola.nazev ?></td>
                        <td><?php echo $row->obor.nazev ?></td>
                    </tr>
                    <?php
                }
                ?>
        </table>
    </div>
</div>
</body>
</html>