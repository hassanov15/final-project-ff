
<div class="form-group">
            <label class="control-label col-sm-2" for="Client">Clients Name:</label>
            <div class="col-sm-10">
                <input type="text" name="client" onblur="checkName(this.value)" class="form-control" id="client" placeholder="Client's Name">
                <span><small id="nameError" style="color: red"></small></span>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="designation">Designation:</label>
            <div class="col-sm-10">
                <select name="designation" id="designation" class="form-control" onclick="populateManagers(this.value)">
                    <option value="staff">Staff</option>
                    <option value="manager">Manager</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="manager">Select Managers:</label>
            <div class="col-sm-10">
                <select name="manager" id="manager" class="form-control">

                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>