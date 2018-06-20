<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diaspora Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.1.1/materia/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="<?= get_asset_url('styles.min.css','css'); ?>">
    <style>
        /* Progress bar animation */
        .progress-infinite{           
            animation: progress_loader 1s infinite linear;
        }

        @keyframes progress_loader
        {
            from{margin-left: -50%;}
            to{margin-left: 100%;}
        }
    </style>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<? 
$ci = &get_instance();
var_dump($_POST);?>
<body>
    <div></div>
    <div style="background-image:url(&quot;https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940&quot;);height:100vh;background-position:center;background-size:cover;background-repeat:no-repeat;min-height:100vh;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
        
            <form method="post" class="padded-form m-2" style="background-color:#e7e7e7;width:480px;">
                <div class="alert d-none" role="alert" id="resultMessageAlert"><span>Successfully sent the information<br></span></div>
                <h2 class="text-uppercase text-center text-dark" style="line-height:36px;letter-spacing:1px;font-weight:300;">voting information</h2>
                <div class="form-group"><input class="form-control" type="text" name="inputFirstName" placeholder="First name" id="inputFirstName"></div>
                <div class="form-group"><input class="form-control" type="text" name="inputLastName" placeholder="Last name" id="inputLastName"></div>
                <div class="form-group"><input class="form-control" type="email" name="inputEmail" placeholder="Email" id="inputEmail"></div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-3">
                            <select class="form-control" name="inputCountryCode" id="inputCountryCode">
                                <?php 
                                    $count = 0;
                                    foreach($countries as $country): 
                                        $selected = $count==0 ? 'selected' : '';
                                        $flag_url = get_flag_url(strtolower($country->iso),16);
                                ?>
                                <option value="<?= $country->id; ?>"><img src="<?= $flag_url; ?>" class="pr-2"/><?= $country->iso3.' (+'.$country->phonecode.')'; ?></option>
                                <?php
                                    $count++; 
                                    endforeach;
                                ?>
                            <select>
                        </div>
                        <div class="col"><input class="form-control" type="tel" name="inputPhone" placeholder="Phone number" id="inputPhone"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Lco-18UAAAAAHEhkeQSMxWcszQ91yldI-XSCt6I"></div>
                </div>
                <div class="form-group"><a class="btn btn-success btn-block mt-4" role="button" href="#" id="btnRegister">REGISTER</a></div>
                <div class="progress bg-dark d-none" style="height: 5px;" id="registerProgress">
                    <div class="progress-bar progress-infinite" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= get_asset_url('register.js','js'); ?>"></script>
</body>

</html>