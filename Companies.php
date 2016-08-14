<?php
session_start();
if( empty($_SESSION['user']) ) {
    header("Location: index.php");
}
?>
<?php
include "includes/header.php"
?>
<?php
include "includes/nav.php"
?>

    <script>
        $(document).ready(function () {

            var table = $('#companies').DataTable();

            $('.delete').click(function () {
                table.row('.selected').remove().draw(false);
            });
            $('.edit').click(function () {
                window.alert("HAHAHAHA Danan wants to edit his face. On serious note Edit works!");
            });
        });

        $(document).ready(function () {
            var table = $('#companies').DataTable();

            $('#companies tbody').on('click', 'tr', function () {
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
include "includes/addcompany-modal.php"
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="button-add" class="btn btn-default" data-toggle="modal"
                                data-target="#addcompany-modal">Add Company
                        </button>
                    </div>
                    </br></br></div>
                <table id="companies" class="table table-bordered table-responsive table-hover" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Email Address</th>
                        <th>Phone No</th>
                        <th>Company Address</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Company Name</th>
                        <th>Email Address</th>
                        <th>Phone No</th>
                        <th>Company Address</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>Shufflester</td>
                        <td>lrivera0@ifeng.com</td>
                        <td>56-(238)326-6187</td>
                        <td>0394 Upham Road</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Wikido</td>
                        <td>whansen1@plala.or.jp</td>
                        <td>63-(205)326-1628</td>
                        <td>79 Melby Point</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Yakidoo</td>
                        <td>pwood2@gmpg.org</td>
                        <td>850-(654)756-6971</td>
                        <td>67183 Pawling Park</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Skinder</td>
                        <td>clane3@wiley.com</td>
                        <td>55-(870)849-4407</td>
                        <td>2 Lakewood Place</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Dabjam</td>
                        <td>rpeterson4@hubpages.com</td>
                        <td>54-(761)150-7256</td>
                        <td>51 Lawn Point</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Wikibox</td>
                        <td>hboyd5@ezinearticles.com</td>
                        <td>86-(870)762-9441</td>
                        <td>04 International Pass</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Flashspan</td>
                        <td>sreed6@etsy.com</td>
                        <td>48-(270)578-9833</td>
                        <td>3840 Fairview Pass</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Livepath</td>
                        <td>jjohnston7@oakley.com</td>
                        <td>86-(759)974-7274</td>
                        <td>525 Raven Road</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Feedmix</td>
                        <td>arichardson8@abc.net.au</td>
                        <td>62-(769)383-8639</td>
                        <td>00773 Kipling Park</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Npath</td>
                        <td>troberts9@un.org</td>
                        <td>48-(660)941-4922</td>
                        <td>9 Duke Crossing</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Trudoo</td>
                        <td>jwilliamsa@desdev.cn</td>
                        <td>86-(346)353-8469</td>
                        <td>396 Hovde Trail</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Plajo</td>
                        <td>jrayb@sogou.com</td>
                        <td>53-(488)113-2138</td>
                        <td>6 Express Alley</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Edgewire</td>
                        <td>mmillerc@yolasite.com</td>
                        <td>351-(507)433-1973</td>
                        <td>079 Eliot Pass</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Cogibox</td>
                        <td>eburnsd@indiegogo.com</td>
                        <td>351-(745)823-6045</td>
                        <td>209 Shasta Plaza</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Wordify</td>
                        <td>lgreene@rediff.com</td>
                        <td>55-(889)293-3265</td>
                        <td>9320 Stone Corner Hill</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Linktype</td>
                        <td>jmoralesf@cbslocal.com</td>
                        <td>86-(777)150-7095</td>
                        <td>48 Tennessee Circle</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Skivee</td>
                        <td>slarsong@topsy.com</td>
                        <td>7-(764)564-9650</td>
                        <td>57 Bonner Point</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Realcube</td>
                        <td>vhowardh@dagondesign.com</td>
                        <td>63-(573)500-9250</td>
                        <td>60451 Charing Cross Road</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Skyndu</td>
                        <td>pboydi@merriam-webster.com</td>
                        <td>30-(626)752-0455</td>
                        <td>13545 Evergreen Way</td>
                        <td>
                            <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>
                            <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Aimbu</td>
                        <td>mreynoldsj@newyorker.com</td>
                        <td>55-(237)718-0308</td>
                        <td>046 Esch Park</td>
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