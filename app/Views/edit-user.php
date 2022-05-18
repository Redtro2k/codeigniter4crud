<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>
<body>
    <div class="container">
        <?= \Config\Services::validation()->listErrors(); ?>
        <br>
        <span class="d-none alert alert-success mb-3" id="res_message"></span>
        <div class="row">
            <form action="<?php echo base_url('/users/update') ?>" name="edit-user" id="edit-user" method="post" accept-charset="utf-8">
                <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $user['id'] ?>">  
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name" value="<?php echo $user['name'] ?>">
                </div> 
                <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id" value="<?php echo $user['email'] ?>">
                </div>   
                <div class="form-group">
                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        if ($("#edit-user").length > 0) {
            $("#edit-user").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        maxlength: 50,
                        email: true,
                    },   
                },
                messages: {
                    name: {
                        required: "Please enter name",
                    },
                    email: {
                        required: "Please enter valid email",
                        email: "Please enter valid email",
                        maxlength: "The email name should less than or equal to 50 characters",
                    }, 
                },
            })
        }
    </script>
</body>
</html>