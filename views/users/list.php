<table class="table">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td></td>
    </tr>
    <?php foreach ($users as $key => $user): ?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><?php echo $user['name']?></td>
        <td><?php echo $user['email']?></td>
        <td><a  class="btn btn-danger" href="index.php?router=users&action=delete&id=<?php echo $user['id'] ?>">Delete</a></td>
    </tr>

    <?php endforeach; ?>
</table>