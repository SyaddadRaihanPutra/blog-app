<?php
include('components/header.php');
$data = mysqli_fetch_array(mysqli_query($connect, "SELECT *, posts.slug AS post_slug FROM posts INNER JOIN users ON posts.user_id=users.id WHERE posts.slug='$_GET[title]' ORDER BY posts.id DESC"))
?>

<header class="detail py-5">
    <div class="container">
        <span class="bg-light rounded p-2 fw-bold text-primary category mx-auto d-block" style="width: max-content">The newest</span>
        <h1 class="header-title text-center"><?= $data['title'] ?></h1>

        <div class="d-flex align-items-center justify-content-center gap-3 mt-3 mb-5">
            <img src="assets/img/user/<?= $data['photo'] ?>" class="avatar rounded-circle" alt="">
            <div class="profile">
                <p class="m-0 name text-primary"><?= $data['name'] ?></p>
                <p class="m-0 position text-secondary">Website Developer</p>
            </div>
        </div>

        <img src="assets/img/post/<?= $data['image'] ?>" class="rounded-2" alt="">
    </div>
</header>

<section class="detail-post pb-5">
    <div class="container">
        <p>
            <?= $data['body'] ?>
        </p>
    </div>
</section>

<section class="bg-primary subscribe">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <h2 class="section-title text-white text-capitalize">Subscribe for new content</h2>
                <p class="mb-3 mb-md-0 text-secondary text-capitalize">By becoming a member of our blog, you have access articles and content</p>
            </div>
            <div class="col-md-5">
                <form action="#" method="post" class="d-flex align-items-center gap-2">
                    <div class="w-75">
                        <div class="input-group rounded p-2">
                            <span class="input-group-text bg-transparent border-0 text-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control bg-transparent border-0 text-white" placeholder="Enter your email">
                        </div>
                    </div>
                    <button class="btn btn-white w-25 fw-bold">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('components/footer.php') ?>