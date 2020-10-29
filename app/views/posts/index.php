<?php require_once APPROOT . '/views/inc/header.php';?>

    <div class="row mt-4 mb-3">
        <div class="col-md-6">
            <h1>Posts</h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT;?>/posts/add" class="btn btn-dark pull-right">
                <i class="fa fa-camera"></i> Add photo
            </a>
        </div>
    </div>

    <?php foreach($data['posts'] as $post):?>
        <div class="card mb-3" style="width:60%">
        <img class="card-img-bottom" src="<?php echo URLROOT."/public/img/".$post->img_name;?>" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Taken by <?php echo $post->name;?></h4>
            <p class="card-text">on <?php echo $post->postCreated;?></p>
        </div>
        </div>
    <?php endforeach;?>

<?php require_once APPROOT . '/views/inc/footer.php';?>