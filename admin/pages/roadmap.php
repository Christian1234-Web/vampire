
<style>
.ck {
    color:black;
}
    </style>
<div class="padding">
    <div class="box" style="background-color:black!important">
    <div class="box-header" style="display:flex;justify-content:space-between;">
            <h2>Road Map</h2>
            <p><?php echo $roadmapMessage; ?> </p>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
            <form method="post">
            <?php
                    foreach($roadmap as $row) {
                ?>
                        <div class="form-group mb-3">
                            <label for="exampleInputTitle">
                                Phase <?php echo $row["id"]; ?> 
                            </label>
                            <input type="hidden" name="phaseId" class="form-control" value="<?php if(isset($phaseId)){
                            echo $phaseId;} ?>">
                              <textarea name="phases[<?php echo $row["id"]; ?>]" cols="10" class="roadmapEditor<?php echo $row["id"]; ?>" rows="5">
            <?php echo $row["phase"]; ?> 
        </textarea>
                        </div>
                <?php
                    }
               
                ?>

                    <button type="submit" class="btn float-end" name="updateRoadmapPhases" style="background:red;">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
 ClassicEditor
    .create(document.querySelector('.roadmapEditor1'))
    .catch(error => {
        console.error(error);
    });
    
</script>
<script>
 ClassicEditor
    .create(document.querySelector('.roadmapEditor2'))
    .catch(error => {
        console.error(error);
    });
    
</script>
<script>
 ClassicEditor
    .create(document.querySelector('.roadmapEditor3'))
    .catch(error => {
        console.error(error);
    });
    
</script>
<script>
 ClassicEditor
    .create(document.querySelector('.roadmapEditor4'))
    .catch(error => {
        console.error(error);
    });
    
</script>
