

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <div>
        <h2>Sisa Waktu: </h2>
        <div id="countdown"></div>
        </div>
    <div id="player1">
        <div>
        <button id="left1" onclick="fungsi">left</button>
        <button id="right1" onclick="fungsi">right</button>
        
            <h1>Hasil 1: </h1>
            <h2 name="hasil1" id="hasil1"></h2>
             <button type="submit" name="submit">Submit Score</button>
    </div>
    <!-- <div id="player2">
        <button id="left2" onclick="fungsi">left</button>
        <button id="right2" onclick="fungsi">right</button>
        <h1>Hasil 2: </h1>
        <h2 id="hasil2"></h2>
    </div> -->
    <button type="button" name="kembali" onclick="location.href='index.php';">back</button>
    </body>
    <script>
    var touch1 = 5;
        var L=1;
        var R=2;

        var touch2 = 1;

        function click_kiri1 () {
            console.log(L);
            //some code
            L+=2;
            touch1++;
        }

        function click_kanan1 () {
            console.log(R);
            //some code
            R+=2;
            touch1++;
        }

        //  function click_kiri2 () {
        //     console.log(L);
        //     //some code
        //     L+=2;
        //     touch2++;
        // }
        //
        // function click_kanan2 () {
        //     console.log(R);
        //     //some code
        //     R+=2;
        //     touch2++;
        // }
        var btnLeft1 = document.getElementById("left1");

        var btnRight1 = document.getElementById("right1");
        // var btnLeft2 = document.getElementById("left2");
        //
        // var btnRight2 = document.getElementById("right2");

        document.onkeyup = function(e) {
        	var keyCode = e.keyCode;
        	if(keyCode == 37) {
        		click_kiri1();
        	}
        	else if(keyCode == 39) {
        		click_kanan1();
        	}
            // else if(keyCode == 38) {
            //     click_kiri2();
            // }
            // else if(keyCode == 40) {
            //     click_kanan2();
            // }
            // document.getElementById("hasil2").innerHTML = touch2;
            document.getElementById("hasil1").innerHTML = touch1;

        };

        //  document.onkeydown = function(e) {
        //     var keyCode = e.keyCode;
        //     if(keyCode == 97) {
        //         click_kiri2();
        //     }
        //     else if(keyCode == 100) {
        //         click_kanan2();
        //     }
        //     document.getElementById("hasil2").innerHTML = touch2;
        // };
        btnLeft1.onclick = click_kiri1;
        btnRight1.onclick = click_kanan1;
        // btnLeft2.onclick = click_kiri2;
        // btnRight2.onclick = click_kanan2;


        var timeLeft = 3;
var elem = document.getElementById('countdown');
var timerId = setInterval(countdown, 1000);
let newUrl;
function countdown() {
    if (timeLeft == -1) {
        clearTimeout(timerId);
        newUrl = ["_play.php?res="+touch1];
        doSomething();
    } else {
        elem.innerHTML = timeLeft + ' seconds remaining';
        timeLeft--;
    }
}
function doSomething() {
    document.location.href = newUrl;
}
    </script>
</html>
