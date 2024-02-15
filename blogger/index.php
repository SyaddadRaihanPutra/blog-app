<?php
$title = 'Dashboard';
include('components/header.php');
?>
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Welcome back! <?= $user_logged['name'] ?></h2>
    </div>
</section>
<?php include('components/footer.php') ?>