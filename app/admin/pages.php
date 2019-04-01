<?php
         include('./partial/header.php');
    
        ?> 
<div class="container my-4">
<div class="row">
 <div class="col-lg-3 sidenav ">
 <?php include('./partial/sidebar.php'); ?>
 </div>
 <div class="col-lg-9">
 <div class="d-flex align-items-center justify-content-between mb-4">
  <h1 class="mb-0">Pages </h1>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPagesModal">
   Add New pages
  </button>
 </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Content</th>
      
    </tr>
  </thead>
  <tbody>
   
    <?php
    $sth = $pdo->prepare("SELECT * FROM categories");
    $sth->execute();
    $results = $sth->fetchAll();
    foreach ($results as $result ) {
      ?>
       <tr>
       <td><?php echo $result->id; ?></td>
       <td><?php echo $result->title; ?></td>
       <td><?php echo $result->slug; ?></td>
       <td></td>
    
       </tr>
      <?php
    }

  ?>
    
  </tbody>
</table>
 
 </div>
</div>
</div>
  

<!-- Modal -->
<div class="modal fade" id="newPagesModal" tabindex="-1" role="dialog" aria-labelledby="newPagesModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Pages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <p class="mb-4">
             <input type="text" name="title" placeholder="Title" class="form-control">
          </p>
          <p class="mb-4">
             <input type="text" name="slug" placeholder="Slug" class="form-control">
          </p>
          <p class="mb-4">
            <textarea placeholder="Content" name="content" class="form-control" id="" cols="20" rows="7"></textarea>
          </p>
        
          <p class="text-right">
          <input type="submit" class="btn btn-primary"/></p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<?php
         include('./partial/footer.php');
    
        ?> 