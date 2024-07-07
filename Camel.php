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
        <tr style="flex: 1;">
            <td><img src="https://media.licdn.com/dms/image/C5603AQF8-Uq433bdxg/profile-displayphoto-shrink_800_800/0/1600301126773?e=2147483647&v=beta&t=Gz5jn5qfGLT-MAVmAqbpFAB9MFCKbGaz8XhDloSNRcs"
    alt="Camel Logo" height="90" width="90"></td>
    <td><h1>CAMEL APPLIANCES MFG. CORP </h1>
    <h2 style="text-align: center;">Time and Motion Study - Excel Datasheet</h2>
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
<div class="container" id="section-1" style="margin:0px;">
    <div class="row">
        <div class="col-6 leftSide-col">
            <form>
                <div style="display: flex;">
                    <div>
                        <div class="stopwatch" style="align-self: center; margin-right:30px;">
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
                                <div class="button1">
                                    <button class="trial" id="trial4.1">Trial 4</button>
                                    <button class="trial" id="trial5.1">Trial 5</button>
                                    <button class="trial" id="trial6.1">Trial 6</button>
                                </div>
                                <div class="button1">
                                    <button class="trial" id="trial7.1">Trial 7</button>
                                    <button class="trial" id="trial8.1">Trial 8</button>
                                    <button class="trial" id="trial9.1">Trial 9</button>
                                </div>
                                <div class="button1">
                                    <button class="trial" id="trial10.1">Trial 10</button>
                                    <button class="trial2z" type="submit">Save data</button>
                                </div>
                            </div>
                            <div>
                                <button class="buttonz1" type="submit">Save as Excel</button>
                                <button class="buttonz3" type="submit">Delete Data</button>
                            </div>
                        </div>
                    <div style="flex: 1; margin-right:30px; margin-left: 60px;">
                        <p> Process Name</p>
                        <input class="PName" id="PName" type="text" placeholder="PName">   
                        <p> Trial 1</p>
                        <input class="trial1" id="trial1" type="text" placeholder="Timer 1">
                        <p> Trial 2</p>
                        <input class="trial2" id="trial2" type="text" placeholder="Timer 2">
                        <p> Trial 3</p>
                        <input class="trial3" id="trial3" type="text" placeholder="Timer 3">
                        <p> Trial 4</p>
                        <input class="trial4" id="trial4" type="text" placeholder="Timer 4">
                        <p> Trial 5</p>
                        <input class="trial5" id="trial5" type="text" placeholder="Timer 5">
                    </div>
                    <div style="flex: 1; margin-right:40px; ">
                        <p> Operator Name</p>
                        <input class="OName" id="OName" type="text" placeholder="OName">
                        <p> Trial 6</p>
                        <input class="trial6" id="trial6" type="text" placeholder="Timer 6">
                        <p> Trial 7</p>
                        <input class="trial7" id="trial7" type="text" placeholder="Timer 7">
                        <p> Trial 8</p>
                        <input class="trial8" id="trial8" type="text" placeholder="Timer 8">
                        <p> Trial 9</p>
                        <input class="trial9" id="trial9" type="text" placeholder="Timer 9">
                        <p> Trial 10</p>
                        <input class="trial10" id="trial10" type="text" placeholder="Timer 10">
                    </div>
                </div>
                    
                </div>
            </form>
        </div>
        <div class="col-6">
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
<script src="SW.js"></script>
</body>
</html>