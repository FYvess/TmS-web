<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="SW.css">
</head>
<body>
    <div class="stopwatch">
        <h1 id="displayTime">00:00:00:000</h1>
        <div class="button">
            <img src="images/stop.png" onclick="watchstop()">
            <img src="images/start.png" onclick="watchstart()">
            <img src="images/reset.png" onclick="watchreset()">
        </div>
        <div class="button1">
            <button class="trial" id="trial1.1">Trial 1</button>
            <button class="trial" id="trial2.1">Trial 2</button>
            <button class="trial" id="trial3.1">Trial 3</button>
        </div>
    </div>
   <script src="SW.js"></script>
</body>
</html>