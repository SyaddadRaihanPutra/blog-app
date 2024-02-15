<?php
include('components/header.php');
$last_post = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id ORDER BY posts.id DESC LIMIT 1"));
?>

<header class="py-5">
    <div class="container">
        <h1 class="header-title text-center">Discover Nice Articles Here</h1>
        <p class="text-secondary text-center text-capitalize">
            all the articles and contents of the site have been Updated today and
            you can find your articles and contents quickly and without any problems.
        </p>
        <form action="#" method="get" class="d-flex align-items-center gap-2 bg-light rounded p-2">
            <div class="input-group w-75">
                <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                <input type="search" class="form-control border-0 bg-transparent" placeholder="Search">
            </div>
            <button class="btn btn-primary w-25" type="submit">Go</button>
        </form>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <a href="detail.php?title=<?= $last_post['slug'] ?>" class="row align-items-center hero-post">
            <div class="col-md-6">
                <img src="assets/img/post/<?= $last_post['image'] ?>" alt="" class="rounded-3 mb-3 hero-post-img">
            </div>
            <div class="col-md-6">
                <span class="bg-light rounded p-2 fw-bold text-primary category">The newest</span>
                <h2 class="hero-post-title text-primary text-capitalize mt-3"><?= $last_post['title'] ?></h2>
                <p class="text-secondary">
                    <?= (str_word_count($last_post['body']) > 60 ? substr($last_post['body'], 0, 200) . "......" : $last_post['body']) ?>
                </p>
                <div class="d-flex align-items-center gap-3">
                    <img src="assets/img/user/<?= $last_post['photo'] ?>" class="avatar rounded-circle" alt="">
                    <div class="profile">
                        <p class="m-0 name text-primary"><?= $last_post['name'] ?></p>
                        <p class="m-0 position text-secondary">Website Developer</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>

<section class="posts pb-5">
    <div class="container">
        <div class="row">
            <?php
            $query = mysqli_query($connect, "SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id ORDER BY posts.id DESC");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-md-4">
                    <a href="detail.php?title=<?= $data['slug'] ?>" class="card border-0 rounded-4 mb-3">
                        <img src="assets/img/post/<?= $data['image'] ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <span class="bg-light fw-bold rounded p-2 text-primary category">Developer</span>
                            <h2 class="text-primary post-title text-capitalize mt-3"><?= $data['title'] ?></h2>
                            <div class="d-flex align-items-center gap-3">
                                <img src="assets/img/user/<?= $data['photo'] ?>" class="avatar rounded-circle" alt="">
                                <div class="profile">
                                    <p class="m-0 name text-primary"><?= $data['name'] ?></p>
                                    <p class="m-0 position text-secondary">Website Developer</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
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