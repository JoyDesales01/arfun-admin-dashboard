<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form enctype="multipart/form-data">
        <label for="lesson">Select Lesson:</label>
        <input type="file" id="lesson" accept=".pdf,.word">
        <button type="submit" onclick="upload()">Upload</button>
    </form>
    </center>
</body>
</html>