<!-- FIXME: <h2><?php echo $post['title']; ?></h2> -->
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<div class="row">
        <?php echo $post['body'];?>
</div>

<hr>

<a class="btn btn-outline-warning float-left" href="edit/<?php echo $post['id']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-outline-danger">
<?php echo form_close(); ?>
