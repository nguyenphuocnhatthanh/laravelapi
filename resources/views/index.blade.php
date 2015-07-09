<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//js.pusher.com/2.2/pusher.min.js"></script>
    <script>
        this.pusher = new Pusher("dcb383c331da52f8c8a7");
    </script>
</head>
<body>

<script>

    this.pusherChannel = pusher.subscribe('test-channel');
    this.pusherChannel.bind('app\\Events\\UserRegistered', function(data) {
        console.log(data.data.power);
    });
</script>
</body>
</html>