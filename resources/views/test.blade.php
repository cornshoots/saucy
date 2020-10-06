<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms 3</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <form action="{{ route('paramresponse') }}" method="POST">
        @csrf
        <label>Page Number : </label><br> 
        <input type="number" name="param" min=1 max=300><br>


        <input type="submit" name="submit">
    </form>
</body>
</html>