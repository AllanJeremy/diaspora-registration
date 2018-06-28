<nav class="navbar navbar-light navbar-expand-md sticky-top bg-light">
    <div class="container-fluid"><a class="navbar-brand" href="#"><img src="<?= get_asset_url('img/logo.png');?>" height="48"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mx-auto site-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $home_active ?? ''; ?>" href="<?= base_url();?>">Background</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $petition_active ?? ''; ?>" href="<?= base_url('petition');?>">Petition</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $teams_active ?? ''; ?>" href="<?= base_url('teams');?>">Teams</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $minutes_active ?? ''; ?>" href="<?= base_url('minutes');?>">Minutes</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $announcements_active ?? ''; ?>" href="<?= base_url('announcements');?>">Announcements</a></li>
                </ul>
        </div>
    </div>
</nav>
