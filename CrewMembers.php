<?php
include "includes/header.php"
?>
<?php
include "includes/nav.php"
?>


<script>
    $(document).ready(function () {
        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });

        $('.delete').click(function () {
            table.row('.selected').remove().draw(false);
        });
        $('.edit').click(function () {
            window.alert("HAHAHAHA Danan wants to edit his face. On serious note Edit works!");
        });
    });
</script>

<?php
include "includes/addcrew-modal.php"
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" id="button-add" class="btn btn-default"data-toggle="modal" data-target="#demo-modal-3">Add Crew Member</button>

                </div>
                </br></br></div>
            <table id="example" class="table table-bordered table-responsive table-hover cellspacing=" 0
            " width="100%">
            <thead>
            <tr>
                <th>Crew Member ID</th>
                <th>Name</th>
                <th>Rank</th>
                <th>Age</th>
                <th>Phone No</th>
                <th>Company</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Crew Member ID</th>
                <th>Name</th>
                <th>Rank</th>
                <th>Age</th>
                <th>Phone No</th>
                <th>Company</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>
                    <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                    <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>
                    <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                    <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>
                    <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                    <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>
                    <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                    <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include "includes/footer.php"
?>

