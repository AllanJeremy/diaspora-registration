<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('templates/head_content'); ?>
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

<body style="overflow-x:hidden">
    <?php 
        $nav_active['petition_active'] = ACTIVE_NAV_ITEM_CLASS;
        $this->load->view('templates/navigation',$nav_active); 
    ?>
    <div class="container mt-4 mb-4">
        <div class="jumbotron content-container">
            <h2 class="pb-2">The Petition</h2>
            <p>For over a decade now, and after the promulgation of the constitution, Kenyans in the Diaspora have agitated for their right to vote with very little success. The Constitution of Kenya 2010 reaffirmed and entrenched this right into law but that aspect has been systematically undermined by the IEBC. Dissatisfied with IEBC’s intransigence, Kenya Diaspora Alliance and other civil society groups petitioned the Supreme Court and in 2015, the Court ordered the IEBC to comply with the law. To date, such orders remain unobeyed in blatant violation disregard of the Supreme Court orders. No person or agency has been held to account for this gross disregard of the constitution and disobedience of Kenya’s Supreme Court. This disobedience of the law has disenfranchised hundreds of thousands of Kenyans eligible to vote in the 2013 and 2017 general elections.</p>
            <p>KDMV’s singular objective is to advocate for and ensure adherence to the law by IEBC, the Kenyan government and other relevant agencies. Ours is an all-volunteer public-private campaign for necessary action ahead of the elections in 2022. We are demanding that IEBC follows the letter, spirit and of the law.</p>
            <p>Joining the campaign below confirms that you agree with KDMV’s effort that every eligible Kenyan must be permitted to vote in accordance with the law. Yours will be among millions of voices that will presented to the IEBC, the judiciary, the executive and other relevant authorities in Kenya and elsewhere for this purpose.</p>
            <p>Thank you for your interest in this crucial effort.</p>
        </div>

        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-5 ml-auto mr-auto" style="height:auto;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height:auto;">
                    <!-- <div class="pt-4 pb-4">
                        <h1 class="d-none d-sm-inline text-success">Kenya Diaspora Must Vote</h1>
                        <h2 class="d-inline d-sm-none text-success">Kenya Diaspora Must Vote</h2>
                    </div> -->
                    <form method="post" class="p-4 mb-2 w-100" style="background-color:rgb(216,216,216);width:480px;" id="register">
                        <div class="alert d-none" role="alert" id="resultMessageAlert"><span>Successfully sent the information<br></span></div>
                        <div class="pr-sm-4 pl-sm-4">
                            <div class="form-group text-center text-dark">
                                <h2 class="d-none d-sm-inline" style="line-height:36px;letter-spacing:1px;font-weight:300;">Join The Campaign</h2>
                                <h3 class="d-inline d-sm-none" style="line-height:36px;letter-spacing:1px;font-weight:300;">Join The Campaign</h3>
                            </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>