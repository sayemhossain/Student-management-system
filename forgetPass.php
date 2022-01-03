<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font style add -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Acme&family=Akronim&family=Cookie&family=Gluten:wght@200&family=Pacifico&family=Permanent+Marker&family=Rubik+Beastly&family=Teko:wght@300&display=swap"
        rel="stylesheet">
    <title>Login</title>

    <!-- css file link -->
    <link rel="stylesheet" href="/forgetPass.css">
</head>
<body> 

<div class="container forget-password">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <i class="fas fa-key forget-key"></i>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                        
                        <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                            
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <select class="form-control" id="sel1">
                                        <option selected="true" disabled="disabled">Please Select Security Question</option>
                                        <option>Which is your favorite movie?</option>
                                        <option>What is your pet's name?</option>
                                        <option>What is the name of your village?</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                    <input id="forgetAnswer" name="forgetAnswer" placeholder="Answer" class="form-control"  type="text">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <input name="btnForget" class="btn btn-warning" value="Reset Password" type="submit">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>