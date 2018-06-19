<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diaspora Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.1.1/materia/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<? var_dump($countries);?>
<body>
    <div></div>
    <div style="background-image:url(&quot;https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940&quot;);height:100vh;background-position:center;background-size:cover;background-repeat:no-repeat;min-height:100vh;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
            <form method="post" class="padded-form m-2" style="background-color:#e7e7e7;width:480px;">
                <div class="alert alert-success d-none" role="alert"><span>Successfully sent the information<br></span></div>
                <h2 class="text-uppercase text-center text-dark" style="line-height:36px;letter-spacing:1px;font-weight:300;">voting information</h2>
                <div class="form-group"><input class="form-control" type="text" name="inputFirstName" placeholder="First name" id="inputFirstName"></div>
                <div class="form-group"><input class="form-control" type="text" name="inputLastName" placeholder="Last name" id="inputLastName"></div>
                <div class="form-group"><input class="form-control" type="email" name="inputEmail" placeholder="Email" id="inputEmail"></div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-3"><select class="form-control" name="inputCountryCode" id="inputCountryCode"><option value="12" selected="">+254</option><option value="13">+1</option><option value="14">+390</option></select></div>
                        <div class="col"><input class="form-control" type="tel" name="inputPhone" placeholder="Phone number" id="inputPhone"></div>
                    </div>
                </div>
                <div class="form-group"><a class="btn btn-success btn-block mt-4" role="button" href="#" id="btnRegister">REGISTER</a></div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>