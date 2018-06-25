<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('templates/head_content'); ?>
</head>

<body style="overflow-y:hidden;">
    <?php $this->load->view('templates/navigation'); ?>
    <div style="background-image:url(&quot;assets/img/pexels-photo-450059.jpeg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;height:96vh;">
        <div class="d-flex justify-content-center align-items-center pt-4" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background:linear-gradient(rgba(95,176,88,0.45),rgba(57,137,50,0.7));">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container">
                    <h1 class="text-center p-2" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">DIASPORA MUST VOTE</h1>
                    <h3 class="text-center p-2" style="color:rgb(242,245,248);padding-bottom:0.25em;font-weight:300;font-size:24px;line-height:32px;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,&nbsp;</h3>
                    <p class="text-center pt-4 pb-4"><a class="btn btn-secondary btn-lg p-4" role="button" href="#" id="btn-joinCampaign">JOIN THE CAMPAIGN</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>