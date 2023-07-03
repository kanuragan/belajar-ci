<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$subTitle?>
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active"><?=$subTitle?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Create Employee</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a href="<?php echo site_url('employee')?>" class="btn btn-success">BACK</a>
          <br>
          <br>
          <div class="informationError">
            <?php if(!is_null(validation_errors()) && !empty(validation_errors())) {
              echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
            } ?>
          </div>
        </div>
        
        <form role="form" action="<?php echo site_url('employee/store');?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">NIP</label>
              <input type="text" class="form-control" name="nip" placeholder="Enter NIP">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Usia</label>
              <input type="number" class="form-control" name="usia" placeholder="Enter Usia">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Alamat</label>
              <textarea class="form-control" name="alamat"></textarea>
            </div>
          </div>

          <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->