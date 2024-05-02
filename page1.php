<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call PHP Function from JavaScript</title>
</head>
<body>


 <div id="resultContainer"></div> 
<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('page2.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=display', s
    })
    .then(response => response.text())
     .then(data => {

        document.getElementById('resultContainer').innerHTML = data;
    })
});
</script>
</body>
</html>
