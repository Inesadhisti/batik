<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          INPUT DATA KRITERIA
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="view/kriteria/proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">ID KRITERIA</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_kriteria" placeholder="ID Kriteria" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Kriteria</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_kriteria" placeholder="Nama Kriteria" autocomplete="off" required>
              </div>
            </div>
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->