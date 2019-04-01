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
  <h1 class="mb-0">Users </h1>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUserModal">
   Add New users
  </button>
 </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
    $sth = $pdo->prepare("SELECT * FROM users");
    $sth->execute();
    $results = $sth->fetchAll();
    foreach ($results as $result ) {
      ?>
       <tr>
       <td><?php echo $result->id; ?></td>
       <td><?php echo $result->username; ?></td>
       <td><?php echo $result->firstname; ?></td>
       <td><?php echo $result->lastname; ?></td>
       <td><?php echo $result->created_at; ?></td>
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
<div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <p class="mb-4">
             <input type="text" name="username" placeholder="User Name" class="form-control">
          </p>
          <p class="mb-4">
             <input type="text" name="firstname" placeholder="First Name" class="form-control">
          </p>
          <p class="mb-4">
             <input type="text" name="lastname" placeholder="Last Name" class="form-control">
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