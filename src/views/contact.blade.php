<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Contact Us </h1>

    <form action="{{route('contact')}}" method="post">
    @csrf 
    <input type="text" name="name" placeholder="your name">
    <input type="email" name="email" placeholder="email">
    <textarea name="message" placeholder="Your query"> </textarea>
    <input type="submit" value="submit">
    </form>
</body>
</html>