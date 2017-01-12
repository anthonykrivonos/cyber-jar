var PLAYER1 = 1, PLAYER2 = 2;

var operator = false;
var operand = false;
var player = PLAYER1;

function updateScore (target)
{
    var vals = target.split(",");
    if (parseInt(vals[1]) == PLAYER1)
    {
        if (player != PLAYER1)
        {
            player = PLAYER1;
            operator = false;
            operand = false;
            if (vals[0] != "+" && vals[0] != "-")
                return;
            operator = vals[0];
            if (operator == "+")
                document.getElementById("notif").innerHTML = "Addition";
            else
                document.getElementById("notif").innerHTML = "Subtraction";
            return;
        }
        else
        {
            if (operator == false || (operator != false && (vals[0] == "+" || vals[0] == "-")))
            {
                if (vals[0] != "+" && vals[0] != "-")
                {
                    document.getElementById("notif").innerHTML = "Please enter an operator.";
                    return;
                }
                operator = vals[0];
                if (operator == "+")
                    document.getElementById("notif").innerHTML = "Addition";
                else
                    document.getElementById("notif").innerHTML = "Subtraction";
                return;
            }
            else
            {
                if (operator == "+")
                {
                    document.getElementById("t," + PLAYER1).value = parseInt(document.getElementById("t," + PLAYER1).value) + parseInt(vals[0]);
                    document.getElementById("notif").innerHTML = document.getElementById("name1").value + " gained " + vals[0] + " life point(s).";
                }
                else
                {
                    document.getElementById("t," + PLAYER1).value = parseInt(document.getElementById("t," + PLAYER1).value) - parseInt(vals[0]);
                    document.getElementById("notif").innerHTML = document.getElementById("name1").value + " lost " + vals[0] + " life point(s).";
                }
                document.getElementById("ca1").value = "";
                operator = false;
                checkWin();
            }
        }
    }
    else
    {
        if (player != PLAYER2)
        {
            player = PLAYER2;
            operator = false;
            operand = false;
            if (vals[0] != "+" && vals[0] != "-")
                return;
            operator = vals[0];
            if (operator == "+")
                document.getElementById("notif").innerHTML = "Addition";
            else
                document.getElementById("notif").innerHTML = "Subtraction";
            return;
        }
        else
        {
            if (operator == false || (operator != false && (vals[0] == "+" || vals[0] == "-")))
            {
                if (vals[0] != "+" && vals[0] != "-")
                {
                    document.getElementById("notif").innerHTML = "Please enter an operator.";
                    return;
                }
                operator = vals[0];
                if (operator == "+")
                    document.getElementById("notif").innerHTML = "Addition";
                else
                    document.getElementById("notif").innerHTML = "Subtraction";
                return;
            }
            else
            {
                if (operator == "+")
                {
                    document.getElementById("t," + PLAYER2).value = parseInt(document.getElementById("t," + PLAYER2).value) + parseInt(vals[0]);
                    document.getElementById("notif").innerHTML = document.getElementById("name2").value + " gained " + vals[0] + " life point(s).";
                }
                else
                {
                    document.getElementById("t," + PLAYER2).value = parseInt(document.getElementById("t," + PLAYER2).value) - parseInt(vals[0]);
                    document.getElementById("notif").innerHTML = document.getElementById("name2").value + " lost " + vals[0] + " life point(s).";
                }
                document.getElementById("ca2").value = "";
                operator = false;
                checkWin();
            }
        }
    }
}

function reset (target)
{
    document.getElementById("t," + PLAYER1).value = target;
    document.getElementById("t," + PLAYER2).value = target;
    document.getElementById("ca1").value = "";
    document.getElementById("ca2").value = "";
    document.getElementById("notif").innerHTML = "Tap any operator to begin.";
    operator = false;
    operand = false;
    player = PLAYER1;
}

function updateOnValid (target)
{
    var vals = target.split(",");
    if (vals[0].match(/[a-z]/i))
    {
        if (parseInt(vals[1]) == 1)
            document.getElementById("ca1").value = "";
        else
            document.getElementById("ca2").value = "";
    }
    else
        updateScore(target);
}

function flash (target)
{
    target.style.background = "#E6E6E6";
    setTimeout(function(){target.style.background = "white"}, 200);
}

function checkWin ()
{
    if (document.getElementById("t," + PLAYER1).value <= 0)
    {
        document.getElementById("t," + PLAYER1).value = 0;
        document.getElementById("game").style.display = "none";
        document.getElementById("popup").style.display = "inline-block";
        document.getElementById("winner").innerHTML =  document.getElementById("name2").value + " wins!";
    }
    else if (document.getElementById("t," + PLAYER2).value <= 0)
    {
        document.getElementById("t," + PLAYER2).value = 0;
        document.getElementById("game").style.display = "none";
        document.getElementById("popup").style.display = "inline-block";
        document.getElementById("winner").innerHTML =  document.getElementById("name1").value + " wins!";
    }
}

function showGame ()
{
    document.getElementById("game").style.display = "inline-block";
        document.getElementById("popup").style.display = "none";
}