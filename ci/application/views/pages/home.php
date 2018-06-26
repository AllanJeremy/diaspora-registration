<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('templates/head_content'); ?>
</head>

<body>
    <?php 
        $nav_active['home_active'] = ACTIVE_NAV_ITEM_CLASS;
        $this->load->view('templates/navigation',$nav_active); 
    ?>
    <div style="background-image:url(&quot;assets/img/pexels-photo-450059.jpeg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;height:96vh;">
        <div class="d-flex justify-content-center align-items-center pt-4" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background:linear-gradient(rgba(95,176,88,0.45),rgba(57,137,50,0.7));">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container">
                    <h1 class="text-center p-2" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">DIASPORA MUST VOTE</h1>
                    <h3 class="text-center p-2" style="color:rgb(242,245,248);padding-bottom:0.25em;font-weight:300;font-size:24px;line-height:32px;">KDMV&rsquo;s singular objective is to advocate for and ensure adherence to the law by IEBC and the Kenyan government. Ours is an all-volunteer public-private campaign for necessary action ahead of the elections in 2022. We are demanding that IEBC follows the letter, spirit and of the law.</h3>
                    
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3 ml-auto">
                            <a class="btn btn-outline-secondary btn-lg btn-block p-4 m-2 m-sm-4" role="button" href="#details" id="btn-joinCampaign">READ MORE</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mr-auto">
                            <a class="btn btn-secondary btn-block btn-lg p-4 m-2 m-sm-4" role="button" href="<?= base_url('petition#register'); ?>" id="btn-joinCampaign">JOIN THE CAMPAIGN</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-4 pb-4" id="details">
        <!-- <div class="col-md-10 col-lg-8"> -->
            <div class="jumbotron content-container mt-4">
                <h2 class="pb-2">Factsheet</h2>
                <p>For over a decade now, and after the promulgation of the constitution, Kenyans in the Diaspora have agitated for their right to vote with very little success. The Constitution of Kenya 2010 reaffirmed and entrenched this right into law but that aspect has been systematically undermined by the IEBC. Dissatisfied with IEBC&rsquo;s intransigence, Kenya Diaspora Alliance and other civil society groups petitioned the Supreme Court and in 2015, the Court ordered the IEBC to comply with the law. To date, such orders remain unobeyed in blatant violation disregard of the Supreme Court orders and constitutional violation. No person or agency has been held to account for this gross disregard of the constitution and disobedience of Kenya&rsquo;s Supreme Court. This disobedience of the law has disenfranchised tens of thousands of Kenyans eligible to vote in the 2013 and 2017 general elections.</p>
                <p>KDMV&rsquo;s singular objective is to advocate for and ensure adherence to the law by IEBC and the Kenyan government. Ours is an all-volunteer public-private campaign for necessary action ahead of the elections in 2022. We are demanding that IEBC follows the letter, spirit and of the law.</p>
                <p>In the U.S., KDMV coordinates volunteers through Regional Centers based in Minneapolis (MN), New York (NY), New Jersey (NJ), Connecticut (C), Seattle (WA), Dallas (TX), Los Angeles (CA) and Washington DC. We are seeking volunteer leaders in Canada, Europe, Middle East, China, Japan, Australia and Africa.</p>
                <p><strong>To achieve this goal, KDMV pursues a three-pronged approach:</strong></p>
                <ol start="2019">
                <li><strong><u>Petition</u></strong><strong>:</strong> we are seeking at least 1 million signatures by July 31, 2019. The signatures and accompanying petitions will be presented to the Kenya government, legislature and relevant public officials.</li>
                <li><strong><u>Litigation</u></strong><strong>:</strong> We will institute court proceedings seeking to hold IEBC and relevant agencies in contempt of the Supreme Court. Local counsel has been retained.</li>
                <li><strong><u>Public/Private Advocacy</u></strong><strong>:</strong> Events, Media, Lobbying etc. This effort is led by the KDMV Communications team.</li>
                </ol>
                <p><strong>How to Help: </strong></p>
                <ul>
                <li>Become a KDMV <strong><em>active volunteer</em></strong></li>
                <li>Join a KDMV <strong><em>local or regional team</em></strong></li>
                <li>Invite a <strong><em>Friend </em></strong></li>
                <li>Spread the <strong><em>Word</em></strong></li>
                </ul>
                <p>Thank you for your interest in this crucial effort.</p>
            </div>
        <!-- </div> -->
    </div>

    <div class="jumbotron text-center mb-0">
        <h1>Ready to join us?</h1>
        <p>
            <a class="btn btn-dark btn-lg p-4 m-2 m-sm-4" role="button" href="<?= base_url('petition#register'); ?>" id="btn-joinCampaign">JOIN THE CAMPAIGN</a>
        </p>
    </div>
    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>