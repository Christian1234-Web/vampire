<div class="padding">
    <div class="col-sm-12">
        <h6>Features</h6>

        <ul class="" id="sortable" data-plugin="html5sortable"></ul>

        <form method="post" id="mainForm">
            <div id="sections">
                <?php
                // Number of initial sections
                $numSections = 1;

                // Function to generate input fields for a section
                function generateInputs($sectionIndex) {
                    echo '<div class="item" id="item' . $sectionIndex . '" name="item[' . $sectionIndex . ']">';
                    for ($i = 1; $i <= 1; $i++) {
                        echo '<div class="form-group mb-3">';
                        echo '<label for="phase' . $i . '">New Section </label>';
                        echo '
                        <div class="form-group mb-3">
                            <label for="exampleInputTitle">
                                Title </label>
                            <input type="text" class="form-control" name="title[]" aria-describedby="title"
                                placeholder="Enter (eg: MetaMask, Backpack, Jupiter)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <div>
                                <textarea name="description[]" style="width:100%" cols="10" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputImage"> Image </label>
                            <input type="file" class="form-control" name="image[]" accept="*/image">
                        </div>
                    </div>';
                    }
                    echo '</div>';
                }

                // Generate initial sections
                generateInputs(0);
                ?>
            </div>

            <div>
                <button type="button" class="btn float-end" style="background:red;" onclick="submitForm()">Submit</button>
                <button type="button" class="btn float-end" onclick="addSection()">Add Item</button>
                <button type="button" class="btn float-end" onclick="removeSection()">Remove Item</button>
            </div>
        </form>
    </div>
</div>

<script>
function addSection() {
    var sections = document.getElementById('sections');
    var lastItem = sections.lastElementChild.cloneNode(true);
    var newItemId = "item" + (sections.childElementCount);
    lastItem.id = newItemId;

    // Update phase label
    var nextPhaseLabel = sections.childElementCount + 1;
    lastItem.querySelector('label').textContent = 'New Section ' + nextPhaseLabel;

    // Clear input values
    var inputs = lastItem.querySelectorAll('.form-control');
    inputs.forEach(function (input) {
        input.setAttribute('value', ''); // Clear the value attribute
    });

    sections.appendChild(lastItem);
}



    function removeSection() {
        var sections = document.getElementById('sections');
        if (sections.childElementCount > 1) {
            sections.lastElementChild.remove();
        }
    }

    function submitForm() {
        var formData = new FormData(document.getElementById('mainForm'));
        var data = {};

        // Collect input values
        var titles = document.getElementsByName('title[]');
        var descriptions = document.getElementsByName('description[]');
        var images = document.getElementsByName('image[]');

        for (var i = 0; i < titles.length; i++) {
            var sectionData = {
                title: titles[i].value,
                description: descriptions[i].value,
                image: images[i].files[0] // Access the file object for file inputs
            };
            data['section' + (i + 1)] = sectionData;
        }

        console.log(data);
    }
</script>
