
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laracoding.com TinyMCE Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js'])
</head>
<body>
<h2>Laracoding.com - TinyMCE Example</h2>
<form action="" method="get">
    <div class="mb-3">
        <label for="pwd">TinyMCE input:</label>
        <textarea class="tinyMce" name="user-bio"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<script>
document.addEventListener("DOMContentLoaded", function() {

document.getElementById('button-image').addEventListener('click', (event) => {
event.preventDefault();

window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
});
});

// set file link
function fmSetLink($url) {
// cấu hình link
document.getElementById('image_label').value = $url;
}
</script>
</body>
</html>
