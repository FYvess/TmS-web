<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMEL APPLIANCES MFG. CORP</title>
    <link rel="stylesheet" href="camelss.css">
    <link rel="stylesheet" href="SW.css">
</head>
<body>
<table>
        <tr>
            <td><img src="https://media.licdn.com/dms/image/C5603AQF8-Uq433bdxg/profile-displayphoto-shrink_800_800/0/1600301126773?e=2147483647&v=beta&t=Gz5jn5qfGLT-MAVmAqbpFAB9MFCKbGaz8XhDloSNRcs"
    alt="Camel Logo" height="100" width="100"></td>
    <td><h1>CAMEL APPLIANCES MFG. CORP </h1>
    <h2 style="text-align:Center">Point of Sale</h2></td>
        </tr>
    </table>
<nav>
    <ul class="topnav "id="NavDrop">
        <li><a href="#home.php">Home</a></li>
        <li><a href="#home.php">Sale</a></li>
        <li class="nav-right"><a href="#home.php">Signup</a></li>
        <li class="dropdown"><a href="javascript:void(0);" onclick="DrpD()">&#9776;</a></li>
    </ul>
</nav>
<div class="container" id="section-1">
    <div class="row">
        <div class="col-6 leftSide-col">
            <div>
                <h1>Excel Datasheet</h1>
            </div>
            <form>
                <div>
                    <p> Name</p>
                    <input class="Name" id="Name" type="text" placeholder="Name">
                    <p> Trial 1</p>
                    <input class="trial1" id="trial1" type="text" placeholder="Timer 1">
                </div>
            </form>
        </div>
        <div class="col-6">
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
        </div>
    </div>
</div>


<script>
    function DrpD(){
        var x = document.getElementById("NavDrop");
        if(x.className === "topnav"){
            x.className += " responsive";
        }
        else{
            x.className = "topnav";
        }
    }
</script>
</body>
</html>