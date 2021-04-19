<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>New enquiry</h1>
<p>Name : {{$name}}</p>
<p>Email : {{$email}}</p>
<p>Contact : {{$contact}}</p>
<p>Message: </p>
<p>{!! nl2br(e($msg)) !!}</p>
    
</body>
</html>