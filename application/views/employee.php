<?php 
	$this->load->view('templates/header');
?>
<!-- employee table -->
<div class="jumbotron">
	<div class="container">
    <div class="col-md-3">
      <div class="col-md-4">
        <label for="sel1">View:</label>
      </div>
      <div class="col-md-8">
        <select class="form-control" id="sel1">
          <option>All Employees</option>
          <option>Active Employees</option>
          <option>Inactive Employees</option>
        </select>
      </div> 
    </div>  

    <div class="col-md-9">
      <div class="btn-group btn-group-xs" style="float: right; margin-top: 12px;">
        <button type="button" class="btn btn-success">New</button>
        <button type="button" class="btn btn-success">Pay</button>
        <button type="button" class="btn btn-success">Check History</button>
        <button type="button" class="btn btn-success">Pay Multiple Employees</button>
        <button type="button" class="btn btn-success">Import Employees</button>
      </div>    
    </div>

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table id="mytable" class="table table-bordred table-striped">
						<thead>
              <th><input type="checkbox" id="checkall" /></th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Address</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Pay</th>
            </thead>
            <tbody>
              <?php for ($i=0; $i < sizeof($edata); $i++) {
              ?>
              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td><?php echo $edata[$i]['fname']; ?></td>
                <td><?php echo $edata[$i]['lname']; ?></td>
                <td><?php echo $edata[$i]['address']; ?></td>
                <td><?php echo $edata[$i]['email']; ?></td>
                <td><?php echo $edata[$i]['contact']; ?></td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Edit">
                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button>
                  </p>
                </td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                </td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Pay"><button class="btn btn-danger btn-xs" data-title="Pay" data-toggle="modal" data-target="#pay" ><span class="glyphicon glyphicon-usd"></span></button></p>
                </td>
              </tr>
              <?php
              }?>    
            </tbody>
          </table>

          <div class="clearfix"></div>

          <ul class="pagination pull-right">
            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
          <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </div>
  </div>
</div>


<?php 
	$this->load->view('templates/footer');
?>