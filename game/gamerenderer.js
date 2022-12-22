import { GameLogic } from "./gamelogic.js";

export class GameRenderer
{
    constructor(game)
    {
        this.logic = new GameLogic(this);
        this.game = game;
        this.c = document.getElementById("myCanvas");
        this.ctx = this.c.getContext("2d");
    }
    
    render()
    {
        let ctx = this.ctx
        ctx.fillStyle = "green";
        ctx.fillRect(0,0,600,700);
        ctx.fillStyle = "black";
        ctx.beginPath();
        ctx.arc(100, 200, 50, 0, 2 * Math.PI);
        ctx.arc(300, 200, 50, 0, 2 * Math.PI);
        ctx.arc(500, 200, 50, 0, 2 * Math.PI);
        ctx.fill();
        ctx.beginPath();
        ctx.arc(100, 400, 50, 0, 2 * Math.PI);
        ctx.arc(300, 400, 50, 0, 2 * Math.PI);
        ctx.arc(500, 400, 50, 0, 2 * Math.PI);
        ctx.fill();
        ctx.beginPath();
        ctx.arc(100, 600, 50, 0, 2 * Math.PI);
        ctx.arc(300, 600, 50, 0, 2 * Math.PI);
        ctx.arc(500, 600, 50, 0, 2 * Math.PI);
        ctx.fill();
        ctx.font = "30px Arial";
        ctx.fillText("whack-a-mole", 200, 50);
        ctx.fillText("score: ", 250, 100);
        ctx.fillStyle = "#leca07";
        ctx.fillRect(this.game.x, this.game.y, 10, 10);
        ctx.fill();
    }

    levens()
    {
        let ctx = this.ctx
        if(this.logic.levens == 3)
        {
            ctx.fillText("❤️",550, 50);
            ctx.fillText("❤️",500, 50);
            ctx.fillText("❤️",450, 50);
        }
        else if(this.logic.levens == 2)
        {
            ctx.fillText("❤️",550, 50);
            ctx.fillText("❤️",500, 50);
        }
        else if(this.logic.levens == 1)
        {
            ctx.fillText("❤️",550, 50);
        }
    }
}