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
          <h3 class="box-title">List Employee</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a href="<?php echo site_url('employee/create')?>" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Employee</a>
          <br>
          <br>
          <table class="table table-bordered table-sm table-striped">
            <thead>
              <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Address</th>
              </tr>
            </thead>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->