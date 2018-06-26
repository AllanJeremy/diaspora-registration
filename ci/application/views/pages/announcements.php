<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('templates/head_content'); ?>
</head>

<body style="background-color:rgb(248,248,248);">
    <?php 
        $nav_active['announcements_active'] = ACTIVE_NAV_ITEM_CLASS;
        $this->load->view('templates/navigation',$nav_active); 
    ?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-10 col-xl-10 mx-auto">
                <?php 
                    if($announcements_exist):
                        foreach($announcement_list as $announcement):
                ?>
                <div class="card info-card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:24px;"><?= $announcement->post_title; ?></h4>
                        <h6 class="text-muted card-subtitle mb-2" style="font-size:14px;">Date: <?= $announcement->date_posted; ?>&nbsp;</h6>
                        
                        <?= $announcement->post_details; ?>
                    </div>
                </div>
                <?php
                        endforeach;
                    else://* No Announcements found ~ show appropriate message
                        $this->load->view('templates/content_missing',array(
                            'title'=>'No announcements found',
                            'message'=>'Once announcements are posted, they will appear here'
                        ));
                    endif; 
                ?>
                    
            </div>
        </div>
    </div>

    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>