<?php
$title = 'Create Post';
include('components/header.php');
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="text-primary">Create new post</h4>
            <a href="posts.php" class="btn btn-light">Back and cancel</a>
        </div>
        <form action="php/posts.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add">
            <div class="form-group mb-3">
                <label for="title">Title Post</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title of your post">
            </div>
            <div class="form-group mb-3">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" accept="image/*" name="image" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>
<?php include('components/footer.php') ?>