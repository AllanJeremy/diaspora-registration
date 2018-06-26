<div class="jumbotron d-flex flex-column justify-content-center align-items-center">
    <h1><?= $title ?? 'Content missing'; ?></h1>
<?php if(isset($message)): ?>
    <p class="lead"><?= $message; ?></p>
<?php endif;?>
</div>