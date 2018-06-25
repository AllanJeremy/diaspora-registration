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


<body>
    <?php 
        $nav_active['teams_active'] = ACTIVE_NAV_ITEM_CLASS;
        $this->load->view('templates/navigation',$nav_active); 
    ?>
    <div class="container" id="teams">
        <div class="row no-gutters team-row">
            <div class="col-md-6">
                <div style="background-image:url(&quot;assets/img/pexels-photo-926987.jpeg&quot;);height:50vh;background-color:#212121;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(18,18,18,0.75);">
                        <div class="d-flex align-items-center order-12" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(242,245,248);font-weight:bold;font-family:Roboto, sans-serif;">Communications &amp; Media Relations</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center pl-md-4 pr-md-4" style="min-height:50vh;">
                    <ul class="team-list">
                        <li style="line-height:28px;">&nbsp;All internal and external communications in print, radio, TV, online, in-person</li>
                        <li>Review of all KDMV documentation prior to release</li>
                        <li>Media contacts</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-gutters team-row">
            <div class="col-md-6">
                <div style="background-image:url(&quot;assets/img/pexels-photo-267350.jpeg&quot;);height:50vh;background-color:#212121;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(221,221,221,0.8);color:rgba(163,163,163,0.43);">
                        <div class="d-flex align-items-center order-12" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(24,24,24);font-weight:bold;font-family:Roboto, sans-serif;">Information Technology &amp; Social Media</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center pl-md-4 pr-md-4" style="min-height:50vh;">
                    <ul class="team-list">
                        <li style="line-height:28px;">All matters digital</li>
                        <li>Online presence and management</li>
                        <li>Oversight of KDMV’s persona online</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-gutters team-row">
            <div class="col-md-6">
                <div style="background-image:url(&quot;assets/img/pexels-photo-534204.jpeg&quot;);height:50vh;background-color:#212121;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(18,18,18,0.75);">
                        <div class="d-flex align-items-center order-12" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(242,245,248);font-weight:bold;font-family:Roboto, sans-serif;">Legal &amp; Public Affairs</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center pl-md-4 pr-md-4" style="min-height:50vh;">
                    <ul class="team-list">
                        <li style="line-height:28px;">Petition language and processing</li>
                        <li>Litigation management and outside counsel relations</li>
                        <li>KDMV pro bono legal counsel</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-gutters team-row">
            <div class="col-md-6">
                <div style="background-image:url(&quot;assets/img/pexels-photo-1020323.jpeg&quot;);height:50vh;background-color:#212121;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(221,221,221,0.8);color:rgba(163,163,163,0.43);">
                        <div class="d-flex align-items-center order-12" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(24,24,24);font-weight:bold;font-family:Roboto, sans-serif;">Events &amp; Programs</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center pl-md-4 pr-md-4" style="min-height:50vh;">
                    <ul class="team-list">
                        <li style="line-height:28px;">All KDMV events and activities, including planning, execution and evaluation</li>
                        <li>Community engagement and outreach</li>
                        <li>Volunteer relations</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-gutters team-row">
            <div class="col-md-6">
                <div style="background-image:url(&quot;assets/img/pexels-photo-696680.jpeg&quot;);height:50vh;background-color:#212121;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(18,18,18,0.75);">
                        <div class="d-flex align-items-center order-12" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(242,245,248);font-weight:bold;font-family:Roboto, sans-serif;">Resource Mobilization</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center pl-md-4 pr-md-4" style="min-height:50vh;">
                    <ul class="team-list">
                        <li style="line-height:28px;">Budget </li>
                        <li>Fundraising</li>
                        <li>Management of KDMV financial and human resources</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-gutters team-row">
            <div class="col-md-6">
                <div style="background-image:url(&quot;assets/img/pexels-photo-265087.jpeg&quot;);height:50vh;background-color:#212121;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(221,221,221,0.8);color:rgba(163,163,163,0.43);">
                        <div class="d-flex align-items-center order-12" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(24,24,24);font-weight:bold;font-family:Roboto, sans-serif;">Marketing &amp; Promotion</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center pl-md-4 pr-md-4" style="min-height:50vh;">
                    <ul class="team-list">
                        <li style="line-height:28px;">Materials design, development and distribution</li>
                        <li>KDMV clearing house for all public events and programs</li>
                        <li>Support to KDMV Teams </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-5 ml-auto mr-auto" style="height:auto;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height:auto;">
                    <!-- <div class="pt-4 pb-4">
                        <h1 class="d-none d-sm-inline text-success">Kenya Diaspora Must Vote</h1>
                        <h2 class="d-inline d-sm-none text-success">Kenya Diaspora Must Vote</h2>
                    </div> -->
                    <form method="post" class="p-4 mb-2 w-100" style="background-color:#e7e7e7;width:480px;">
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