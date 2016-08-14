<!--<a class="btn btn-primary" data-toggle="modal" href="#addcrew-modal">Trigger modal</a>-->
<div class="modal fade" id="addcrew-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Ship</h4>
            </div>
            <div class="modal-body">
                <form role="form">

                    <div class="form-group">
                        <label class="control-label" for="formInput21">Ship Name</label>
                        <input type="text" class="form-control" id="formInput21" placeholder="Ship Name">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="formInput21">Year Model</label>
                        <input type="text" class="form-control" id="formInput21" placeholder="Year Model">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="formInput21">Dread Weight</label>
                        <input type="text" class="form-control" id="formInput21" placeholder="Dread Weight">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="formInput27">Ship Owner/Company</label>

                        <select id="formInput27" class="form-control">
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
                    <div class="form-group">
                        <label class="control-label" for="formInput21">Other, Company Name</label>
                        <input type="text" class="form-control" id="formInput21" placeholder="Other, Company Name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Ship</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->