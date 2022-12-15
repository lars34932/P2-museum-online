class Game
{
    constructor()
    {

    }

    setupBoard(x,y)
    {
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        ctx.beginPath();
        ctx.arc(x+100, y+200, 50, 0, 2 * Math.PI);
        ctx.fill();
        ctx.font = "30px Arial";
        ctx.fillText("whack-a-mole", 200, 50);
        ctx.fillText("score:", 250, 100);
        ctx.fillText("❤️",550, 50)
        ctx.fillText("❤️",500, 50)
        ctx.fillText("❤️",450, 50)
    }

    score()
    {
        
    }
}

let game = new Game;

/*setupBoard*/
game.setupBoard(0,0);
game.setupBoard(200,0);
game.setupBoard(400,0);
game.setupBoard(0,200);
game.setupBoard(200,200);
game.setupBoard(400,200);
game.setupBoard(0,400);
game.setupBoard(200,400);
game.setupBoard(400,400);