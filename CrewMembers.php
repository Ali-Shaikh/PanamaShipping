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
    });

    $(document).ready(function () {

        var table = $('#example').DataTable();

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
                    <button type="button" id="button-add" class="btn btn-default" data-toggle="modal"
                            data-target="#demo-modal-3">Add Crew Member
                    </button>

                </div>
                </br></br></div>
            <table id="example" class="table table-bordered table-responsive table-hover" cellspacing="0" width="100%">
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
                    <td>1</td>
                    <td>Christina Chavez</td>
                    <td>Captain / Master</td>
                    <td>32</td>
                    <td>678-13-3290</td>
                    <td>Shufflester</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Heather Lawson</td>
                    <td>Chief Engineer</td>
                    <td>21</td>
                    <td>229-81-8830</td>
                    <td>Wikido</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carol Mills</td>
                    <td>Oiler</td>
                    <td>35</td>
                    <td>691-96-4540</td>
                    <td>Yakidoo</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Louis Hayes</td>
                    <td>Steward</td>
                    <td>41</td>
                    <td>418-33-0851</td>
                    <td>Skinder</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Brenda Vasquez</td>
                    <td>Captain / Master</td>
                    <td>46</td>
                    <td>458-62-6765</td>
                    <td>Dabjam</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Theresa Duncan</td>
                    <td>Chief Engineer</td>
                    <td>40</td>
                    <td>749-44-4684</td>
                    <td>Wikibox</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Marie Kelley</td>
                    <td>Oiler</td>
                    <td>18</td>
                    <td>145-99-1654</td>
                    <td>Flashspan</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Gary Gordon</td>
                    <td>Steward</td>
                    <td>39</td>
                    <td>992-69-4026</td>
                    <td>Livepath</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Donald Crawford</td>
                    <td>Captain / Master</td>
                    <td>24</td>
                    <td>435-62-9325</td>
                    <td>Feedmix</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Anna Rose</td>
                    <td>Chief Engineer</td>
                    <td>26</td>
                    <td>852-10-7174</td>
                    <td>Npath</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Kevin Burke</td>
                    <td>Oiler</td>
                    <td>26</td>
                    <td>837-24-2731</td>
                    <td>Trudoo</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Carlos Knight</td>
                    <td>Steward</td>
                    <td>34</td>
                    <td>306-08-4135</td>
                    <td>Plajo</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Deborah Dixon</td>
                    <td>Captain / Master</td>
                    <td>43</td>
                    <td>571-30-3766</td>
                    <td>Edgewire</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Thomas Davis</td>
                    <td>Chief Engineer</td>
                    <td>27</td>
                    <td>642-54-5410</td>
                    <td>Cogibox</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Robert James</td>
                    <td>Oiler</td>
                    <td>19</td>
                    <td>211-68-3834</td>
                    <td>Wordify</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Rebecca Day</td>
                    <td>Steward</td>
                    <td>37</td>
                    <td>121-96-7209</td>
                    <td>Linktype</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Kathryn Gomez</td>
                    <td>Captain / Master</td>
                    <td>27</td>
                    <td>625-84-8092</td>
                    <td>Skivee</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Gregory Fowler</td>
                    <td>Captain / Master</td>
                    <td>50</td>
                    <td>791-21-5432</td>
                    <td>Realcube</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Kimberly Willis</td>
                    <td>Chief Engineer</td>
                    <td>30</td>
                    <td>400-97-4543</td>
                    <td>Skyndu</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Cynthia Gordon</td>
                    <td>Oiler</td>
                    <td>34</td>
                    <td>528-16-5759</td>
                    <td>Aimbu</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Ashley Gomez</td>
                    <td>Steward</td>
                    <td>29</td>
                    <td>937-09-4180</td>
                    <td>Zoomzone</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Nicole Johnston</td>
                    <td>Captain / Master</td>
                    <td>41</td>
                    <td>679-99-6412</td>
                    <td>Photojam</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Susan Morris</td>
                    <td>Chief Engineer</td>
                    <td>49</td>
                    <td>895-43-0861</td>
                    <td>Flashset</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Martin Gardner</td>
                    <td>Oiler</td>
                    <td>49</td>
                    <td>466-75-9682</td>
                    <td>Blogspan</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Andrea Ramos</td>
                    <td>Steward</td>
                    <td>22</td>
                    <td>886-27-9029</td>
                    <td>Aivee</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Philip Martinez</td>
                    <td>Captain / Master</td>
                    <td>50</td>
                    <td>832-71-3641</td>
                    <td>Buzzshare</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Ryan Stewart</td>
                    <td>Chief Engineer</td>
                    <td>42</td>
                    <td>872-14-3406</td>
                    <td>Photolist</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Teresa Porter</td>
                    <td>Oiler</td>
                    <td>47</td>
                    <td>569-24-4735</td>
                    <td>Zoombox</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Adam Carter</td>
                    <td>Steward</td>
                    <td>39</td>
                    <td>549-90-8792</td>
                    <td>Buzzbean</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Kevin Cole</td>
                    <td>Captain / Master</td>
                    <td>26</td>
                    <td>280-26-0514</td>
                    <td>Kayveo</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Benjamin Ruiz</td>
                    <td>Chief Engineer</td>
                    <td>18</td>
                    <td>882-08-0294</td>
                    <td>Jabberbean</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Mildred Harris</td>
                    <td>Oiler</td>
                    <td>21</td>
                    <td>995-93-0497</td>
                    <td>Rhynoodle</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Harold Kennedy</td>
                    <td>Steward</td>
                    <td>44</td>
                    <td>806-11-1009</td>
                    <td>Yakitri</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Marilyn Ruiz</td>
                    <td>Captain / Master</td>
                    <td>30</td>
                    <td>946-56-2354</td>
                    <td>Ailane</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Ronald Stanley</td>
                    <td>Captain / Master</td>
                    <td>32</td>
                    <td>199-88-5160</td>
                    <td>Quinu</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>Dorothy Torres</td>
                    <td>Chief Engineer</td>
                    <td>34</td>
                    <td>487-29-8452</td>
                    <td>Izio</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>Karen Morgan</td>
                    <td>Oiler</td>
                    <td>23</td>
                    <td>998-22-6340</td>
                    <td>Skivee</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>Gary Harvey</td>
                    <td>Steward</td>
                    <td>42</td>
                    <td>833-03-1073</td>
                    <td>Topiczoom</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>Philip Alexander</td>
                    <td>Captain / Master</td>
                    <td>37</td>
                    <td>962-31-3229</td>
                    <td>Yacero</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>Teresa Powell</td>
                    <td>Chief Engineer</td>
                    <td>42</td>
                    <td>212-34-2011</td>
                    <td>Youbridge</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>41</td>
                    <td>Jimmy Reed</td>
                    <td>Oiler</td>
                    <td>33</td>
                    <td>180-00-3338</td>
                    <td>Yodel</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>42</td>
                    <td>Billy James</td>
                    <td>Steward</td>
                    <td>47</td>
                    <td>245-28-5673</td>
                    <td>Kwilith</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>43</td>
                    <td>Lois Campbell</td>
                    <td>Captain / Master</td>
                    <td>24</td>
                    <td>365-83-3656</td>
                    <td>Eire</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>44</td>
                    <td>Terry Ramirez</td>
                    <td>Chief Engineer</td>
                    <td>34</td>
                    <td>841-35-4964</td>
                    <td>Eire</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>45</td>
                    <td>Edward Carpenter</td>
                    <td>Oiler</td>
                    <td>21</td>
                    <td>835-29-2576</td>
                    <td>Skyndu</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>46</td>
                    <td>Mark Rodriguez</td>
                    <td>Steward</td>
                    <td>28</td>
                    <td>614-53-0612</td>
                    <td>Lazzy</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>47</td>
                    <td>Frances Dixon</td>
                    <td>Captain / Master</td>
                    <td>34</td>
                    <td>577-15-9980</td>
                    <td>Devcast</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>Ernest Cooper</td>
                    <td>Chief Engineer</td>
                    <td>20</td>
                    <td>311-93-1914</td>
                    <td>Muxo</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>49</td>
                    <td>Russell Moreno</td>
                    <td>Oiler</td>
                    <td>32</td>
                    <td>360-72-2834</td>
                    <td>Rhyzio</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

                        <button type="button" id="button-edit" class="edit btn btn-success">Edit</button>

                        <button type="button" id="button-delete" class="delete btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>Michael Bennett</td>
                    <td>Steward</td>
                    <td>36</td>
                    <td>821-57-1211</td>
                    <td>Rhycero</td>
                    <td>
                        <button type="button" id="button-view" class="view btn btn-info">View</button>

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

