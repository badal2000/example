<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <div>
            @foreach($docs as $doc)
                <h1>file show</h1>
                <a href="{{$doc->upload_file}}" download="{{$doc->file_name}}">File</a>

            @endforeach

        </div>    
</body>
</html>