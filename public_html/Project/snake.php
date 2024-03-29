<?php
require(__DIR__ . "/../../partials/nav.php");
?>
  <main>
    <body id="game">
        <link rel="stylesheet" href="styles.css">
        <h1>SNAKE!</h1>
        <canvas  tabindex="0" id="canvas" width="600px" height="600px" style="border: 1px solid orange;">
    
        </canvas>
        <br>
        <button  id="restart" onClick="window.location.reload();">Restart</button>
    </body>
  </main>
    <script>
        var canvas = document.getElementById('canvas');

        var context = canvas.getContext('2d');

        async function postData(data = {}, url = "/Project/api/save_score.php") {

console.log(Object.keys(data).map(function(key) {
    return "" + key + "=" + data[key]; // line break for wrapping only
}).join("&"));

    // Default options are marked with *
    const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            //'Content-Type': 'application/json'
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: Object.keys(data).map(function(key) {
            return "" + key + "=" + data[key]; // line break for wrapping only
        }).join("&") //JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects

    
}


        class SnakePart{
            constructor(x, y){
                this.x =x;
                this.y=y;
            }
        }

        let speed = 7;

        var score = 0;
        
        let tileCount = 25;
        let tileSize = 22;

        let headX = 10;
        let headY = 10;
        let xVelocity =0;
        let yVelocity=0;
        const snakeParts = [];
        let tailLength=2;

        let appleX = 5;
        let appleY = 5;

        function drawGame(){
            changeSnakePos();
            let result = isGameOver();
            if(result){
                return;
            }

            clearScreen();
            
            isColliding();
            drawApple();
            drawSnake();
            setTimeout(drawGame, 1000/speed);

            context.fillStyle = 'orange';
            context.font = '24px Arial';
            context.textAlign = 'left';
            context.fillText('Score: ' + score, 1, 25);
        }

        function isGameOver(){
            let gameOver=false;

            if (yVelocity === 0 && xVelocity === 0) {
                return false;
            }


            if (headX < 0) {
                gameOver = true;
            } else if (headX === tileCount-1) {
                gameOver = true;
            } else if (headY < 0) {
                gameOver = true;
            } else if (headY === tileCount-1) {
                gameOver = true;
            }

            for (let i = 0; i < snakeParts.length; i++) {
                let part = snakeParts[i];
                if (part.x === headX && part.y === headY) {
                     gameOver = true;
                    break;
                }
            }


            if (gameOver) {
                context.fillStyle = "white";
                context.font = "100px Impact";
                context.textAlign = 'center';

                var gradient = context.createLinearGradient(0, 0, canvas.width, 0);
                gradient.addColorStop("0", " magenta");
                gradient.addColorStop("0.5", "blue");
                gradient.addColorStop("1.0", "red");
      
                context.fillStyle = gradient;

                context.fillText("Game Over!", canvas.width / 2, canvas.height / 2);
                context.font = "30px Impact";
                context.fillText("Your score was: " + score, canvas.width / 2, canvas.height / 1.5);
                postData({
                        score: score,
                    }, "/Project/api/save_score.php").then(data => {
                        console.log(data);
                        //quick, brief example (you wouldn't want to use alert)
                        if (data.status === 200) {
                            //saved successfully
                            flash("Your score has been saved", "success")
                        } else {
                            //some error occurred, maybe want to handle it before resetting
                            flash("You must be logged in to save your score", "warning")
                        }
    })
            }


            return gameOver;
        }
        function clearScreen(){
            context.fillStyle = 'black';
            context.fillRect(0,0,canvas.width, canvas.height);
        }

        function drawSnake() {

            context.fillStyle = 'green';

            for (let i=0; i<snakeParts.length; i++){
                let part = snakeParts[i];
                context.fillRect(part.x*tileCount, part.y*tileCount,tileSize, tileSize);
            }

            snakeParts.push(new SnakePart(headX,headY));
            if(snakeParts.length > tailLength){
                snakeParts.shift();
            }

            context.fillStyle = 'yellow';
            context.fillRect(headX * tileCount, headY *tileCount, tileSize, tileSize);

            
        }

        function changeSnakePos(){
            headX = headX +xVelocity;
            headY = headY +yVelocity;
        }

        function drawApple(){
            context.fillStyle = 'red';
            context.fillRect(appleX * tileCount, appleY * tileCount, tileSize-3, tileSize-3);
        }

        function isColliding(){
            if (appleX === headX && appleY === headY){
                appleX = Math.floor(Math.random()*tileCount);
                appleY = Math.floor(Math.random()*tileCount);
                tailLength++;
                score ++;
                if (speed < 14 && (score % 2 === 0)){
                    speed ++;
                }
            }
        }

        document.body.addEventListener('keydown', keyDown);

        function keyDown(event){
            //up
            if (event.keyCode == 38){
                if(yVelocity ==1)
                    return;
                yVelocity = -1;
                xVelocity = 0;
            }
            //down
            if (event.keyCode == 40){
                if(yVelocity == -1)
                    return;
                yVelocity = 1;
                xVelocity = 0;
            }
            //left
            if (event.keyCode == 37){
                if(xVelocity == 1)
                    return;
                yVelocity = 0;
                xVelocity = -1;
            }
            if (event.keyCode == 39){
                if(xVelocity == -1)
                    return;
                yVelocity = 0;
                xVelocity = 1;
            }
        }

        

        drawGame();
    </script>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>