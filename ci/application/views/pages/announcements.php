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
                <div class="card info-card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:24px;">Announcement Title</h4>
                        <h6 class="text-muted card-subtitle mb-2" style="font-size:14px;">Date: 6/25/2018&nbsp;</h6>
                        <p class="card-text" style="font-size:16px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio fuga numquam blanditiis eligendi magnam! Velit ducimus placeat reprehenderit aut harum laudantium, quia magnam dicta repellendus obcaecati maiores rerum incidunt exercitationem
                            voluptate numquam sit dolor dolorum alias provident! Recusandae, incidunt quis impedit vero temporibus amet hic enim architecto harum eveniet nisi mollitia corporis dolorem labore culpa a quam eligendi. Laboriosam nobis beatae,
                            nisi aliquid sed fuga repellendus dolorum, earum quisquam provident quam veritatis non magni? Cumque sapiente dolorum minima rem repudiandae. Doloremque voluptatum reprehenderit dolores doloribus, corporis itaque quisquam eveniet
                            odit tenetur, et quo in dolore velit! Ab molestias numquam vitae eius tenetur cupiditate inventore, necessitatibus ut deleniti minima cum impedit harum alias vero. Quidem expedita non blanditiis, amet cum rerum adipisci suscipit
                            praesentium impedit! Eligendi illo ex nobis illum accusamus numquam impedit repellat iusto corrupti, quos aut nemo praesentium accusantium?<br></p>
                    </div>
                </div>
                <div class="card info-card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:24px;">Announcement Title</h4>
                        <h6 class="text-muted card-subtitle mb-2" style="font-size:14px;">Date: 6/25/2018&nbsp;</h6>
                        <p class="card-text" style="font-size:16px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio fuga numquam blanditiis eligendi magnam! Velit ducimus placeat reprehenderit aut harum laudantium, quia magnam dicta repellendus obcaecati maiores rerum incidunt exercitationem
                            voluptate numquam sit dolor dolorum alias provident! Recusandae, incidunt quis impedit vero temporibus amet hic enim architecto harum eveniet nisi mollitia corporis dolorem labore culpa a quam eligendi. Laboriosam nobis beatae,
                            nisi aliquid sed fuga repellendus dolorum, earum quisquam provident quam veritatis non magni? Cumque sapiente dolorum minima rem repudiandae. Doloremque voluptatum reprehenderit dolores doloribus, corporis itaque quisquam eveniet
                            odit tenetur, et quo in dolore velit! Ab molestias numquam vitae eius tenetur cupiditate inventore, necessitatibus ut deleniti minima cum impedit harum alias vero. Quidem expedita non blanditiis, amet cum rerum adipisci suscipit
                            praesentium impedit! Eligendi illo ex nobis illum accusamus numquam impedit repellat iusto corrupti, quos aut nemo praesentium accusantium?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>