<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('category.store')}}" method="post">

    <label for="">Name</label>
    <input type="text" name="name" id="">
    <br><br>
    <label for="">Description</label>
    <input type="text" name="description" id="">
    <br><br>
    <label for="">Status</label>
    <input type="checkbox" name="status" checked>
   <br><br>
    <button type="submit">Add Category</button>
    </form>
</body>
</html>