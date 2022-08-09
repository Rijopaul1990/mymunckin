<?php 
  //include topbar page
include_once('include/topbar.php');
  //delete code
?>

<div class="content-wrapper">

  <section class="content"> 
    <div class="panel panel-primary">
     <div class="panel panel-heading">
       <i class="fa fa-bars"></i> <?php echo $page_title ?>
       <span class="pull-right"><a href="<?php echo base_url('admin/add_blog') ?>" class="btn btn-xs btn-munchkin">Add New</a></span>
     </div>
     <?php if ($success = $this->session->flashdata('success')): ?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong><?php echo $success; ?></strong> 
      </div>
    <?php endif ?>

    <?php if ($error = $this->session->flashdata('error')): ?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong><?php echo $error; ?></strong> 
      </div>
    <?php endif ?>
    <div class="panel-body">
     <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Sr no</th>
          <th>Date</th>
          <th> Heading</th>
         
          <th>Image</th>
          <th>Status</th>
          <th>Status For Home</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if(is_array($all_blog) || is_object($all_blog)){
         $is = 1;
         foreach($all_blog as $fac){ 
          ?>
          <tr>
            <td><?php echo $is++; ?></td>
             <td><?php echo $fac->b_date; ?></td>
            <td><?php echo $fac->heading; ?></td>
            
            <td><?php if($fac->img){ ?>
                  <img src="<?php echo base_url($fac->img); ?>" width="100" height="50">
                <?php } else{ ?>
                  
                  <img src="<?php echo base_url('assets/no_img.png'); ?>" width="100" height="50">
                  
                <?php } ?>
                </td> 
          <td><?php if($fac->status=="1"){ ?>
            <a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Blog/UpdateBlog/'.$fac->id) ?>">Show</a>
          <?php }
          else{ ?>
            <a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Blog/UpdateBlog/'.$fac->id) ?>">Hide</a>
            <?php } ?></td>
             <td><?php if($fac->status_for_home=="1"){ ?>
            <a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Blog/UpdateHomeBlog/'.$fac->id) ?>">Show</a>
          <?php }
          else{ ?>
            <a class="btn btn-xs btn-munchkin" href="<?php echo base_url('admin/Blog/UpdateHomeBlog/'.$fac->id) ?>">Hide</a>
            <?php } ?></td>

            <td>
              <a href="<?php echo base_url('admin/add_blog/'.$fac->id) ?>" class="btn  btn-success"><i class="fa fa-edit"></i> </a>
              <a href="<?php echo base_url('admin/Blog/DeleteBlog/'.$fac->id) ?>" class=""><button class="btn  btn-danger" onclick="return confirm('You Want To Delete??');"><i class="fa fa-trash"></i> </button></a>

            </td>
          </tr>
        <?php                  }

      }
      ?>

    </tbody>
  </table>
</div>

</div> 
</section>
<!-- /.content -->
</div>

<?php 
  //include footer page
include_once('include/footer.php');
?>