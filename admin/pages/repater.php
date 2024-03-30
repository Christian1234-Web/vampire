<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Repeater</title>
<style>
    /* Basic styling */
    fieldset {
        margin-bottom: 20px;
    }
</style>
</head>
<body>

<form id="mainForm">
    <fieldset>
        <legend>Item 1</legend>
        <label for="item1">Item:</label>
        <input type="text" id="item1" name="item[]">
    </fieldset>
    <button type="button" onclick="addSection()">Add Item</button>
    <button type="button" onclick="removeSection()">Remove Item</button>
    <button type="submit">Submit</button>
</form>

<script>
    // Function to add a new section
    function addSection() {
        var form = document.getElementById('mainForm');
        var fieldset = document.createElement('fieldset');
        var legend = document.createElement('legend');
        var itemCount = form.querySelectorAll('fieldset').length + 1;

        legend.textContent = 'Item ' + itemCount;
        fieldset.appendChild(legend);

        var label = document.createElement('label');
        label.setAttribute('for', 'item' + itemCount);
        label.textContent = 'Item:';
        fieldset.appendChild(label);

        var input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('id', 'item' + itemCount);
        input.setAttribute('name', 'item[]');
        fieldset.appendChild(input);

        form.insertBefore(fieldset, form.lastElementChild);
    }

    // Function to remove the last section
    function removeSection() {
        var form = document.getElementById('mainForm');
        var fieldsets = form.querySelectorAll('fieldset');
        if (fieldsets.length > 1) {
            form.removeChild(fieldsets[fieldsets.length - 1]);
        }
    }
</script>

</body>
</html>
