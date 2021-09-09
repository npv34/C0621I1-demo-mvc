<?php

?>


<div class="card">
    <div class="card-header">
        Cap nhat nguoi dung
    </div>
    <div class="card-body">
        <form method="post" action="index.php?router=users&action=edit&id=<?php echo $user['id'] ?>">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" value="<?php echo $user['name'] ?>" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" disabled class="form-control" value="<?php echo $user['email'] ?>" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

