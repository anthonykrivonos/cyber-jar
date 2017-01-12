<!DOCTYPE HTML>
<html>
    <head>
        <title>Cyber.jar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="cyber.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="be.css?<?php echo time(); ?>">
    </head>
    <body>
        <div id="game" class="container-fluid unselectable">
            <div class="row">
                <div class="col-xs-12">
                    <h1 style="color:white;">Cyber.jar</h1>
                    <p style="color:white;" id="notif">Tap any operator to begin.</p>
                </div>
                <div class="col-xs-6">
                    <input id="name1" type="text" value="Player 1" style="width:100%; margin-bottom:10px; padding-left:5px; border-radius:5px;"/>
                    <input id="t,1" type="text" value="8000" style="width:100%; height:60px; font-size:30pt; padding-left:5px;"/>
                    <div data-toggle="collapse" data-target="#player1" class="col-xs-12 nopadding dropdown">
                        <span class="glyphicon glyphicon-triangle-bottom"></span>
                    </div>
                    <div id="player1" class="collapse">
                        <div class="col-xs-6 nopadding">
                            <button id="+,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">+</button>
                        </div>
                        <div class="col-xs-6 nopadding">
                            <button id="-,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">-</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="0,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">0</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="1,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">1</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="5,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">5</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="10,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">10</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="25,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">25</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="50,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">50</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="100,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">100</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="500,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">500</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="1000,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">1000</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="2000,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">2000</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="4000,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">4000</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="8000,1" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">8000</button>
                        </div>
                        <div class="col-xs-8 nopadding">
                            <input id="ca1" type="text" placeholder="Custom Amount" style="width:100%"/>
                        </div>
                        <div class="col-xs-4 nopadding">
                            <button onclick="flash(this); updateOnValid(document.getElementById('ca1').value + ',1')" style="width:100%; margin:0;">Go</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <input id="name2" type="text" value="Player 2" style="width:100%; margin-bottom:10px; padding-left:5px; border-radius:5px;"/>
                    <input id="t,2" type="text" value="8000" style="width:100%; height:60px; font-size:30pt; padding-left:5px;"/>
                    <div data-toggle="collapse" data-target="#player2" class="col-xs-12 nopadding dropdown">
                        <span class="glyphicon glyphicon-triangle-bottom"></span>
                    </div>
                    <div id="player2" class="collapse">
                        <div class="col-xs-6 nopadding">
                            <button id="+,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">+</button>
                        </div>
                        <div class="col-xs-6 nopadding">
                            <button id="-,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">-</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="0,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">0</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="1,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">1</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="5,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">5</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="10,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">10</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="25,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">25</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="50,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">50</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="100,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">100</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="500,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">500</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="1000,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">1000</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="2000,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">2000</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="4000,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">4000</button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 nopadding">
                            <button id="8000,2" onclick="flash(this); updateScore(this.id)" style="width:100%; margin:0;">8000</button>
                        </div>
                        <div class="col-xs-8 nopadding">
                            <input id="ca2" type="text" placeholder="Custom Amount" style="width:100%"/>
                        </div>
                        <div class="col-xs-4 nopadding">
                            <button onclick="flash(this); updateOnValid(document.getElementById('ca2').value + ',2')"  style="width:100%; margin:0;">Go</button>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid" style="margin-top: 50px; text-align:center; color:white;">
                    Reset Game: <span onclick="reset(4000);"><i>4000</i></span> / <span onclick="reset(8000);"><i>8000</i></span> / <span onclick="reset(12000);"><i>12000</i></span><br/>
                    Theme: <span onclick="location.href='index.php'"><i>Basic</i></span> / <span onclick="location.href='cbj.php'"><i>Cyber Jar</i></span> / <span style="font-weight:200; cursor: default;"><i>Blue Eyes</i></span> / <span onclick="location.href='chaos.php'"><i>Chaos</i></span><br/>
                    Copyright &copy; Anthony Krivonos 2016 / Hosted by x10Hosting
                </div>
            </footer>
        </div>
        <div id="popup" class="container-fluid popup unselectable">
            <span id="winner"></span><br/>Play again?<br/>
            <span onclick="reset(4000); showGame();"><i>4000</i></span> / <span onclick="reset(8000); showGame();"><i>8000</i></span> / <span onclick="reset(12000); showGame();"><i>12000</i></span><br/>
        </div>
    </body>
</html>