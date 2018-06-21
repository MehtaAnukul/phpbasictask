<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <style>
        .preview > div {
            display: inline-block;
            text-align: center;
        }
    </style>
    <script src="css/picture.js"></script>
    <script src="css/jquery.min.js"></script>
    <script src="css/angular.min.js"></script>


</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="i_file" name="upfile" />
        <button type="submit" id="i_submit" name="btn-upload">upload</button><br/>
        <img src="" width="200" height="200" style="display:none; border-radius:100%" />
    </form>


</body>
<script type="text/javascript">
    $('#i_file').change(function (event) {


        $("img").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
    });
</script>

</html>