<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
</head>

<body>
    <h1>welcome</h1>

    <form action="{{route('imagets.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <img id="output"><br>
        <input type="file" name="photo" accept="image/*" onchange="showPreview(event);"><br>
        <input type="submit">
    </form>

    <a href="{{url('/imagets')}}">All Data</a>
    <script>
        // var loadfile = function(event) {
        //     //alert('ok');
        //     var output = document.getElementById('output');
        //     output.src = URL.createObjectURL(event.traget.files[0]);
        // };

        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("output");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
</body>

</html>