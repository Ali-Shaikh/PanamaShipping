<!--<a class="btn btn-primary" data-toggle="modal" href="#addcrew-modal">Trigger modal</a>-->
<div class="modal fade" id="addcrew-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Ship</h4>
            </div>
            <form action="/add_ship.php" method="post">
            <div class="modal-body">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input  class="form-control" id="shipName" placeholder="Ship name" name="name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="">Year model</label>
                    <input  class="form-control" id="" placeholder="Year model" name="model" required="required">
                  </div>
                  <div class="form-group">
                    <label for="">Dread Weight</label>
                    <input  class="form-control" id="" placeholder="Dread Weight" name="weight" required="required">
                  </div>
                  <div class="form-group">
                  <label for="sel1">Company:</label>
                  <select class="form-control" name="company_id" required="required">
                    <?php
                        $res=mysql_query("SELECT * FROM company ") or die(mysql_error());
                        while ($row = mysql_fetch_assoc($res)) { ?>
                             <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                        <?php  }
                    ?>
                  </select>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Ship</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->