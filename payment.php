<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<div class="container">
<div class="row mt-5">
    <div class="col-md-10 d-block mx-auto">
    <div class="renew rounded">
    Renew Subscription
    </div>
    </div>
</div>
<div class="row my-2">
<div class="col-xl-10 d-block mx-auto">
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table mr-1"></i>
Transaction History
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table
        class="table table-bordered"
        id="dataTable"
        width="100%"
        cellspacing="0"
      >
        <thead>
          <tr>
            <th>#Ref</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Duration</th>
            <th>Status</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td>165366925</td>
            <td>Daily</td>
            <td>50 NGN</td>
            <td>1 day</td>
            <td>Expired</td>
          </tr>
       </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>       
      <?php include('includes/footer.php'); ?>



