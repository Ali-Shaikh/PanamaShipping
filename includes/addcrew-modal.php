<style>
    .m-progress-bar {
        min-height: 1em;
        background: #c12d2d;
        width: 5%;
    }

    .entry:not(:first-of-type) {
        margin-top: 10px;
    }

    .glyphicon {
        font-size: 12px;
    }

    .modal-wide .modal-dialog {
        width: 65%;
    }

    .modal-wide .modal-body {
        overflow-y: auto;
    }

    #tallModal .modal-body p {
        margin-bottom: 900px
    }
</style>

<form class="modal multi-step modal-wide fade" id="demo-modal-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title step-1" data-step="1">Add Crew Member - Step 1</h4>
                <h4 class="modal-title step-2" data-step="2">Add Crew Member - Step 2</h4>
                <h4 class="modal-title step-3" data-step="3">Add Crew Member - Final Step</h4>
                <div class="m-progress">
                    <div class="m-progress-bar-wrapper">
                        <div class="m-progress-bar">
                        </div>
                    </div>
                    <div class="m-progress-stats">
                        <span class="m-progress-current">
                        </span>
                        /
                        <span class="m-progress-total">
                        </span>
                    </div>
                    <div class="m-progress-complete">
                        Completed
                    </div>
                </div>
            </div>
            <div class="modal-body step-1" data-step="1">
                <form role="form">
                    <div class="form-group">
                        <label class="control-label">Crew Member ID</label>
                        <input type="text" class="form-control" id="CrewMember_id" placeholder="Crew Member ID">
                    </div>
                    <div class="form-group">
                        <label class="control-label">First Name(s)</label>
                        <input type="text" class="form-control" id="CrewMember_FirstName" placeholder="First Name(s)">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Middle Name(s)</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="Middle Name(s)">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Last Name(s)</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="Last Name(s)">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Residential Address</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="Residential Address">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Passport No</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="Passport No">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Passport Expiry Date</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="Passport Expiry Date">
                    </div>
                    <div class="form-group">
                        <label class="control-label">CDC No</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="CDC No">
                    </div>
                    <div class="form-group">
                        <label class="control-label">CDC Expiry Date</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="CDC Expiry Date">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone No</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="Phone No">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" class="form-control" id="formInput23" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date Joined</label>
                        <input type="text" class="form-control" id="formInput23"
                               placeholder="Date Started Working at the Company">
                    </div>
                </form>
            </div>
            <div class="modal-body step-2" data-step="2">
                <form role="form">
                    <div class="form-group col-md-6">
                        <label class="control-label " for="select">
                            Rank
                        </label>
                        <select class="select form-control" id="select" name="select">
                            <option value="First Choice">
                                Captain / Master
                            </option>
                            <option value="Second Choice">
                                Chief Engineer
                            </option>
                            <option value="Third Choice">
                                Oiler
                            </option>
                            <option value="Fourth Choice">
                                Steward
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label " for="date">
                            Start Date
                        </label>
                        <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label " for="date1">
                            End Date
                        </label>
                        <input class="form-control" id="date1" name="date1" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label " for="select1">
                            Company Name
                        </label>
                        <select class="select form-control" id="select1" name="select1">
                            <option value="First Choice">
                                Prosperity Bay Shipping
                            </option>
                            <option value="Second Choice">
                                Dredging International NV
                            </option>
                            <option value="Third Choice">
                                Messers. Vamva Shipping
                            </option>
                            <option value="Fourth Choice">
                                Acquis Business Systems
                            </option>
                            <option value="Fifth Choice">
                                Other
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label " for="date2">
                            Start Date
                        </label>
                        <input class="form-control" id="date2" name="date2" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label " for="date3">
                            End Date
                        </label>
                        <input class="form-control" id="date3" name="date3" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label " for="select2">
                            Ship
                        </label>
                        <select class="select form-control" id="select2" name="select2">
                            <option value="First Choice">
                                M/V Ourania Luck
                            </option>
                            <option value="Second Choice">
                                M/V Anna Smile
                            </option>
                            <option value="Third Choice">
                                M/V Captain George-L
                            </option>
                            <option value="Fourth Choice">
                                M/V Ourania Hope
                            </option>
                            <option value="Fifth Choice">
                                M/V Aeriko
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label " for="name">
                            Salary
                        </label>
                        <input class="form-control" id="name" name="name" type="text"/>
                    </div>
                    <div class="form-group col-md-12">
                        <hr/>
                        <h4> If Selected other </h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label " for="name1">
                            Company Name
                        </label>
                        <input class="form-control" id="name1" name="name1" type="text"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label " for="date4">
                            Start Date
                        </label>
                        <input class="form-control" id="date4" name="date4" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label " for="date5">
                            End Date
                        </label>
                        <input class="form-control" id="date5" name="date5" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label " for="name2">
                            Ship Name
                        </label>
                        <input class="form-control" id="name2" name="name2" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label " for="name3">
                            Salary
                        </label>
                        <input class="form-control" id="name3" name="name3" type="text"/>
                    </div>
                </form>
            </div>
            <div class="modal-body step-3" data-step="3">
                <div id="calc" class="row text-center">
                    <form role="form" class="entry form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="formInput82">Field label</label>
                            <div class="input-group">
                                <div class="input-group-addon"></div>
                                <select id="formInput82" class="form-control">
                                    <option value="Certification on Competency">Certification on Competency</option>
                                    <option value="Certificate of Competence Granted">Certificate of Competence
                                        Granted
                                    </option>
                                    <option value="Certificate of Proficiency in Watch keeping">Certificate of
                                        Proficiency in Watch keeping
                                    </option>
                                    <option value="Personal Survival Techniques">Personal Survival Techniques</option>
                                    <option value="Fire Prevention and Fire Fighting">Fire Prevention and Fire
                                        Fighting
                                    </option>
                                    <option value="Elementary First Aid">Elementary First Aid</option>
                                    <option value="Personal Safety and Social Responsibilities ">Personal Safety and
                                        Social Responsibilities
                                    </option>
                                    <option value="Ship Security Awareness">Ship Security Awareness</option>
                                    <option value="Maritime English Course ">Maritime English Course</option>
                                    <option value="Pre Sea Training Deck Ratings Programme ">Pre Sea Training Deck
                                        Ratings Programme
                                    </option>
                                    <option value="Tanker Familiarisation ">Tanker Familiarisation</option>
                                    <option value="International Ships and Port Facilities Security Code">International
                                        Ships and Port Facilities Security Code
                                    </option>
                                    <option value="Refresher Course for Engine Rating ">Refresher Course for Engine
                                        Rating
                                    </option>
                                    <option value="Global Maritime Distress and Safety System">Global Maritime Distress
                                        and Safety System
                                    </option>
                                    <option value="Electronic Navigation System">Electronic Navigation System</option>
                                    <option value="Radar Observation and Plotting ">Radar Observation and Plotting
                                    </option>
                                    <option value="Navigation Watch Keeping Simulator Course ">Navigation Watch Keeping
                                        Simulator Course
                                    </option>
                                    <option value="Automatic Radar Plotting Aids">Automatic Radar Plotting Aids</option>
                                    <option value="Radar Simulator ">Radar Simulator</option>
                                    <option value="Hazardous Cargo Material Handling ">Hazardous Cargo Material
                                        Handling
                                    </option>
                                    <option value="Proficiency in Medical Care ">Proficiency in Medical Care</option>
                                </select></div>
                        </div>
<!--                        <div class="form-group">-->
<!--                            <div class="radio">-->
<!--                                <label class="control-label">-->
<!--                                    <input type="radio" name="group" value="Yes"> Yes-->
<!--                                </label>-->
<!---->
<!--                                <label class="control-label">-->
<!--                                    <input type="radio" name="group" value="No"> No-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" id="formInput90" placeholder="Start Date">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" id="formInput98" placeholder="End Date">
                        </div>

                        <button type="submit" class="btn btn-primary btn-add"><span
                                class="glyphicon glyphicon-plus"></span></button>
                    </form>
                </div>
                <!--                <button type="submit" class="btn text-centre">Submit</button>-->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success step-3" data-step="3">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary step step-1" data-step="1"
                        onclick="sendEvent('#demo-modal-3', 2)">Continue
                </button>
                <button type="button" class="btn btn-primary step step-2" data-step="2"
                        onclick="sendEvent('#demo-modal-3', 1)">Back
                </button>
                <button type="button" class="btn btn-primary step step-2" data-step="2"
                        onclick="sendEvent('#demo-modal-3', 3)">Continue
                </button>

            </div>
        </div>
    </div>
    </div>
</form>

<script src="js/multi-step-modal.js"></script>
<script>
    $(document).ready(function () {
        sendEvent = function (sel, step) {
            $(sel).trigger('next.m.' + step);
        }
    });

    $(function () {
        var i = 1;
        $('#calc:first').find('.input-group-addon').html(i);
        $(document).on('click', '.btn-add', function (e) {
            e.preventDefault();

            var controlForm = $('#calc:first'),
                currentEntry = $(this).parent('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            $(newEntry).find('.input-group-addon').html(++i);

            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="glyphicon glyphicon-minus"></span>');
        }).on('click', '.btn-remove', function (e) {
            i--;
            $(this).parent().nextAll('.entry').each(function () {
                $(this).find('.input-group-addon').html($(this).find('.input-group-addon').html() - 1);
            });
            $(this).parents('.entry:first').remove();


            e.preventDefault();
            return false;
        });
    });
</script>