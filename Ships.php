<?php
include "includes/header.php"
?>
<?php
include "includes/nav.php"
?>

    <script>
        $(document).ready(function () {

            var table = $('#ships').DataTable();

            $('.delete').click(function () {
                table.row('.selected').remove().draw(false);
            });
            $('.edit').click(function () {
                window.alert("HAHAHAHA Danan wants to edit his face. On serious note Edit works!");
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
                                data-target="#demo-modal-3">Add Ship
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
                    <tr>
                        <td>PS-1</td>
                        <td>Calypso&#39;s Poison Jewel</td>
                        <td>2000</td>
                        <td>74823 MT</td>
                        <td>Shufflester</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-2</td>
                        <td>Davy Jones&#39; Doom</td>
                        <td>2000</td>
                        <td>74823 MT</td>
                        <td>Wikido</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-3</td>
                        <td>Davy Jones&#39; Secret</td>
                        <td>2000</td>
                        <td>74823 MT</td>
                        <td>Yakidoo</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-4</td>
                        <td>Dragon&#39;s Cruelty</td>
                        <td>2000</td>
                        <td>75363 MT</td>
                        <td>Skinder</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-5</td>
                        <td>Hades&#39; Lightning</td>
                        <td>2000</td>
                        <td>63534 MT</td>
                        <td>Dabjam</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-6</td>
                        <td>Killer&#39;s Strumpet</td>
                        <td>2000</td>
                        <td>32234 MT</td>
                        <td>Wikibox</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-7</td>
                        <td>Murderer&#39;s Strumpet</td>
                        <td>2009</td>
                        <td>43342 MT</td>
                        <td>Flashspan</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-8</td>
                        <td>Pirate&#39;s Sadness</td>
                        <td>2009</td>
                        <td>34322 MT</td>
                        <td>Livepath</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-9</td>
                        <td>Plunderer&#39;s Gold</td>
                        <td>2009</td>
                        <td>34233 MT</td>
                        <td>Feedmix</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-10</td>
                        <td>Privateer&#39;s Red Trident</td>
                        <td>2009</td>
                        <td>63534 MT</td>
                        <td>Npath</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-11</td>
                        <td>Sea&#39;s Hell-born Coral</td>
                        <td>2009</td>
                        <td>32234 MT</td>
                        <td>Trudoo</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-12</td>
                        <td>The Bloody Storm</td>
                        <td>2015</td>
                        <td>43342 MT</td>
                        <td>Plajo</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-13</td>
                        <td>The Fearful Disgrace</td>
                        <td>2015</td>
                        <td>34322 MT</td>
                        <td>Edgewire</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-14</td>
                        <td>The Greed of the Killer</td>
                        <td>2015</td>
                        <td>34233 MT</td>
                        <td>Cogibox</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-15</td>
                        <td>The Greedy Strumpet of the Caribbean</td>
                        <td>2015</td>
                        <td>74823 MT</td>
                        <td>Wordify</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-16</td>
                        <td>The Greedy One</td>
                        <td>2015</td>
                        <td>74823 MT</td>
                        <td>Linktype</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-17</td>
                        <td>The Greedy Wolf of Tortuga</td>
                        <td>2015</td>
                        <td>75363 MT</td>
                        <td>Skivee</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-18</td>
                        <td>The Horrible Eel of the West</td>
                        <td>2012</td>
                        <td>63534 MT</td>
                        <td>Realcube</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-19</td>
                        <td>The Horrid Blade</td>
                        <td>2012</td>
                        <td>32234 MT</td>
                        <td>Skyndu</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-20</td>
                        <td>The Howl of the West</td>
                        <td>2012</td>
                        <td>43342 MT</td>
                        <td>Aimbu</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-21</td>
                        <td>The Corsair of the South</td>
                        <td>2012</td>
                        <td>34322 MT</td>
                        <td>Zoomzone</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-22</td>
                        <td>The Mad Barnacle</td>
                        <td>2012</td>
                        <td>34233 MT</td>
                        <td>Photojam</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-23</td>
                        <td>The Red Deciet</td>
                        <td>2013</td>
                        <td>63534 MT</td>
                        <td>Flashset</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-24</td>
                        <td>The Shade of the South</td>
                        <td>2013</td>
                        <td>32234 MT</td>
                        <td>Blogspan</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PS-25</td>
                        <td>The Cannon of the South</td>
                        <td>2013</td>
                        <td>32342 MT</td>
                        <td>Aivee</td>
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