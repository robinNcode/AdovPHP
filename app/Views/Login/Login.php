<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="padding-left: 400px;padding-top: 132px;">
        <div class="row">
            <div class="col-md-1-12">
                <div class="card">
                    <legend class="card-header"> Login panel</legend>
                    <div class="card-body">
                        <form method="post" action="<?= base_url() . 'login-store'?>">
                            <div class="row">
                                <label class="col-md-3" for="userName">User Name : <span class="text-danger">*</span></label>
                                <div class="col-md-9 form-group">
                                    <input class="form-control" id="userName" type="text" name="user_name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3" for="passId">Password : <span class="text-danger">*</span></label>
                                <div class="col-md-9 form-group">
                                    <input class="form-control" id="passId" type="password" name="password">
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>