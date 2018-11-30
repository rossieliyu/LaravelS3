<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <title>Upload S3 Test</title>
</head>
<body>
    <form id = "upload">
        <input id="file" type="file" name="photo"/>
        <button>Upload</button>
    </form>
    <div id = "status"></div>

    <script>
       

        $('#upload').on('submit',function(e){
            e.preventDefault();
            let input = document.getElementById('file');
            var formData = new FormData();
            formData.append('photo', input.files[0]);

            $.ajax({
                url : '/api/upload',
                type : 'POST',
                data : formData,
                processData: false,
                contentType: false
            }).done(function(res){
                console.log(res);
            })
        })
    </script>
</body>
</html>