<div class="col container">
    <h1>Enter new SCP Subject Form</h1>
    <form name="insert" method="POST" action="data.php" class="form-group">
        <label>Enter Subject Number</label>
        <br>
        <input type="text" name="itemNo" class="form-control" placeholder="Use the following format SCP-###" required>
        <br>
        <label>Enter Subject Class Type</label>
        <br>
        <select class="form-control" name="objectClass" required>
            <option>Euclid</option>
            <option>Safe</option>
            <option>Keter</option>
            <option>Thaumiel</option>
            <option>Neutralized</option>
        </select>
        <br>
        <label>Enter link to subject image (if any available)</label>
        <br>
        <input type="text" name="image" class="form-control" placeholder="Use following format: images/image_name.(gif, jpg, png)">
        <br>
        <label>Enter Special Containment Procedures</label>
        <br>
        <textarea name="SCP" rows="10" class="form-control" required>Format with html tags e.g < h1> < /h1> < br></textarea>
        <br>
        <br>
        <label>Enter Description</label>
        <br>
        <textarea name="description" rows="10" class="form-control" requried>Format with html tags e.g < h1> < /h1> < br></textarea>
        <br>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
</div>  