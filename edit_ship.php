<?php
session_start();
if( empty($_SESSION['user']) ) {
    header("Location: index.php");
}
?>
<?php
include_once 'dbconfig.php';

if( isset($_POST['id']) ) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $model = $_POST['model'];
    $weight = $_POST['weight'];
    $company_id = $_POST['company_id'];
    $ship_id = 'SP-100';
    
    $sql_query = "UPDATE ship
                SET name = '$name', model = '$model', weight = '$weight', company_id = '$company_id', ship_id = '$ship_id'
                WHERE id = '$id'";
    $res = mysql_query($sql_query);

    if (!$res) {
        die('Error: ' . mysql_error());
    }

    header("Location: Ships.php");
    die();
}

?>

<?php
include "includes/header.php";
include "includes/nav.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                      <form action="edit_ship.php" method="post">
                          <?php
                                $id = $_GET['id'];
                                $res=mysql_query("SELECT * FROM ship where id = '$id' ") or die(mysql_error());
                                $row = mysql_fetch_assoc($res);    
                                ?>
                              <div class="form-group">
                                <input  value="<?= $row['id']?>" type="hidden" id=""  name="id" required="required">
                                <label for="">Name</label>
                                <input  value="<?= $row['name']?>" class="form-control" id="shipName" placeholder="Ship name" name="name" required="required">
                              </div>
                              <div class="form-group">
                                <label for="">Year model</label>
                                <input value="<?= $row['model']?>"  class="form-control" id="" placeholder="Year model" name="model" required="required">
                              </div>
                              <div class="form-group">
                                <label for="">Dread Weight</label>
                                <input value="<?= $row['weight']?>" class="form-control" id="" placeholder="Dread Weight" name="weight" required="required">
                              </div>
                              <div class="form-group">
                              <label for="sel1">Company:</label>
                              <select class="form-control" name="company_id" required="required">
                                <?php
                                    $res=mysql_query("SELECT * FROM company ") or die(mysql_error());
                                    while ($line = mysql_fetch_assoc($res)) { ?>
                                        <?php if( $line['id'] == $row['id'] ) { ?>
                                          <option selected="selected" value="<?= $line['id']; ?>"><?= $line['name']; ?></option>
                                      <?php  }else{ ?>
                                          <option value="<?= $line['id']; ?>"><?= $line['name']; ?></option>
                                     <?php } ?>
                              <?php  } ?>
                              </select>
                            </div>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit Ship</button>
                      </form>
                    </div>
                    </br></br></div>

            </div>
        </div>
    </div>

<?php
include "includes/footer.php";
?>