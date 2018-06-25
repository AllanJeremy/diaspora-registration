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
    <div class="container pt-4 pb-2">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-success pb-2">Kenya Diaspora Must Vote</h1>
                    <form method="post" class="padded-form m-2" style="background-color:#e7e7e7;width:480px;">
                        <div class="alert alert-success d-none" role="alert"><span>Successfully sent the information<br></span></div>
                        <h2 class="text-center text-dark" style="line-height:36px;letter-spacing:1px;font-weight:300;">Join The Campaign</h2>
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
        </div>
    </div>
    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>