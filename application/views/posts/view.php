<h2><?php echo $post['title']; ?></h2>

<div class="row">
  <div class="col-md-3">
    <img class="col-md-12" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'];?>" />
  </div>
  <div class="col-md-9">
    <small class="post-date">Posted on: <?php echo $post['created']; ?></small><br/>
    <div class="post-body">
      <?php echo $post['body']; ?>
    </div>      
  </div>
</div>

<hr>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
  <input type="submit" value="delete" class="btn btn-danger"> 
</form>
