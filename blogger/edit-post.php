<?php
$title = 'Posts';
include('components/header.php');

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM posts WHERE id = '$id'"));
?>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="text-primary">Edit post</h4>
            <a href="posts.php" class="btn btn-light">Back and cancel</a>
        </div>
        <form action="php/posts.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="form-group mb-3">
                <label for="title">Title Post</label>
                <input type="text" name="title" id="title" value="<?= $data['title'] ?>" class="form-control" placeholder="Title of your post">
            </div>
            <div class="form-group mb-3">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?= $data['body'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" accept="image/*" name="image" id="image" class="form-control">
                <span class="form-text">Isi jika ingin mengubah gambar</span>
            </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>
<?php include('components/footer.php') ?>