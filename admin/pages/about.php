<style>
.ck {
    color:black;
}
    </style>
<div class="padding">
    <div class="box" style="background-color:black!important">
        <div class="box-header" style="display:flex;justify-content:space-between;">
            <h2>About Us</h2>
            <p><?php echo $message; ?> </p>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
            <form method="post">
              
                <div class="form-group mb-3">
                    <label for="exampleInputTitle">
                        Contract Address </label>
                    <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="title"
                        placeholder="Enter contract address" name="contractAddress"
                        value="<?php if(isset($contractAddress)){
                            echo $contractAddress;} ?>"
                        >
                        <input type="hidden" name="aboutId" class="form-control" value="<?php if(isset($aboutId)){
                            echo $aboutId;} ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputTitle">
                        Buy Now link </label>
                    <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="title"
                        placeholder="Enter buy now link" name="buyNowlink"
                        value="<?php if(isset($buyNowlink)){
                            echo $buyNowlink;} ?>"
                        >
                </div>
                    </div>
                    </label>
                    <div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <div>
                        <textarea name="description" style="width:100%" id="aboutEditor" rows='10'>
                            <?php if(isset($aboutdescription)){echo $aboutdescription;} ?>
                    </textarea>
                    </div>
                </div>
                    <button type="submit"name="updateabout" class="btn float-end" style="background:red;">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
ClassicEditor
    .create(document.querySelector('#aboutEditor'))
    .catch(error => {
        console.error(error);
    });
    
</script>