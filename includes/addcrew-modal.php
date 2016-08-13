<style>
    .m-progress-bar {
        min-height: 1em;
        background: #c12d2d;
        width: 5%;
    }
</style>

<form class="modal multi-step" id="demo-modal-3">
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
                    <div class="form-group col-md-4">
                        <label class="control-label " for="name1">
                            Company Name
                        </label>
                        <input class="form-control" id="name1" name="name1" type="text"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label " for="date4">
                            Start Date
                        </label>
                        <input class="form-control" id="date4" name="date4" placeholder="DD/MM/YYYY" type="text"/>
                    </div>
                    <div class="form-group col-md-4">
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
                This is the final step.
                <button type="submit" class="btn">Submit</button>
            </div>
            <div class="modal-footer">
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
</form>

<script src="js/multi-step-modal.js"></script>
<script>
    $(document).ready(function () {
        sendEvent = function (sel, step) {
            $(sel).trigger('next.m.' + step);
        }
    });
</script>