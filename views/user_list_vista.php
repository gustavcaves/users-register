<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?php

// llame user_list_vista.php que muestre los datos de $filas en una tabla
// var_dump($filas)

?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Pasword</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($filas as $key) : ?>
            <tr>
                <td><?php echo $key['user_id']; ?></td>
                <td><?php echo $key['user_name']; ?></td>
                <td><?php echo $key['user_email']; ?></td>
                <td><?php echo $key['user_password']; ?></td>
                <td><?php echo $key['user_stage']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>