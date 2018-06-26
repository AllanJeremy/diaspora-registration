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
    </div>

    <?php $this->load->view('templates/join_campaign_banner'); ?>
    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>