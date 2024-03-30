<?php
// database connection variable
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = 'mysqlpassword';
$dbname = 'fallouttactics';
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(mysqli_connect_errno()){
    die("Database connection failed: ".
    mysqli_connect_error().
    " (" . mysqli_connect_errno() . ")"
);
}
?>

<div class="box m-4">
    <div class="box-header">
        <h3>Story</h3>
    </div>
    <div class="box-body">
        <small>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                $description = $row["descriptions"];
                $id = $row["id"];
                echo  $description ;
            }
            ?>
        </small>
    </div>
</div>

<div class="float-end mx-3">
    <button id="btnmaf" onclick="openModal()" class="btn text-white btn-primary" data-toggle="modal"
        data-target="#m-a-f">Edit</button>
</div>


<!-- modal start -->
<div id="m-a-f" class="modal  ">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Story</h5>
            </div>
            <form method="post">
                <div class="modal-body  p-lg">
                    <label class="mb-2">Description</label>
                    <input type="hidden" name="userId" value="<?php echo $id; ?>">
                    <textarea class="form-control" name="description" rows="12"><?php echo $description ?></textarea>

                </div>
                <div class=" modal-footer">
                    <button type="button" onclick="closeModal()" class="btn dark-white p-x-md"
                        data-dismiss="modal">Cancel</button>
                    <button type="submit" name="updatestory" class="btn danger p-x-md">Update</button>
                </div>
            </form>
        </div>

        <!-- /.modal-content -->
    </div>
</div>
<!-- modal end -->
<div id="show-backdrop" class="modal-backdrop show " style="display: none;"> </div>



<script>
let maf = document.getElementById('m-a-f');
let btnmaf = document.getElementById('btnmaf');
let show = document.getElementById('show-backdrop');

function openModal() {
    maf.style.transition = 'opacity .15s linear'
    show.style.display = 'block';
    maf.style.display = 'block';
}

function closeModal() {
    show.style.display = 'none';
    maf.style.display = 'none';
}
</script>