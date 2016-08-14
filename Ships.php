<?php
session_start();
if( empty($_SESSION['user']) ) {
    header("Location: index.php");
}
?>
<?php
include_once 'dbconfig.php';
include "includes/header.php"
?>
<?php
include "includes/nav.php"
?>

    <script>
        $(document).ready(function () {

            var table = $('#ships').DataTable();

            $('.delete').click(function (e) {
                if( !confirm('Are you sure?') ) {
                        e.preventDefault();
                }
            });
        });

        $(document).ready(function () {
            var table = $('#ships').DataTable();

            $('#ships tbody').on('click', 'tr', function () {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
        });
    </script>

<?php
include "includes/addship-modal.php"
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="button-add" class="btn btn-default" data-toggle="modal"
                                data-target="#addcrew-modal">Add Ship
                        </button>
                    </div>
                    </br></br></div>
                <table id="ships" class="table table-bordered table-responsive table-hover" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Ship ID</th>
                        <th>Ship Name</th>
                        <th>Year Model</th>
                        <th>Dread Weight</th>
                        <th>Company</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Ship ID</th>
                        <th>Ship Name</th>
                        <th>Year Model</th>
                        <th>Dread Weight</th>
                        <th>Company</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                        $res=mysql_query("
                            SELECT s.id, s.name, s.model, s.weight, c.name as company_name
                            FROM ship as s inner join company as c on s.company_id = c.id
                            ") or die(mysql_error());
                        while ($row = mysql_fetch_assoc($res)) { ?>
                             <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['model']; ?></td>
                                <td><?= $row['weight']; ?></td>
                                <td><?= $row['company_name']; ?></td>
                                <td>
                                    <a href="edit_ship.php?id=<?= $row['id']; ?>" id="button-edit" class="edit btn btn-success">Edit</a>
                                    <a href="delete_ship.php?id=<?= $row['id']; ?>" id="button-delete" class="delete btn btn-danger">Delete</a>
                                </td>
                        <?php  }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
include "includes/footer.php";
?>