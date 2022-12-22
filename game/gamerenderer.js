export class GameRenderer
{
    constructor(game)
    {
        this.game = game;
        this.c = document.getElementById("myCanvas");
        this.ctx = this.c.getContext("2d");
    }
    
    render(x,y)
    {
        let ctx = this.ctx
        ctx.beginPath();
        ctx.arc(x+100, y+200, 50, 0, 2 * Math.PI);
        ctx.fill();
        ctx.font = "30px Arial";
        ctx.fillText("whack-a-mole", 200, 50);
        ctx.fillText("score: ", 250, 100);
        ctx.fillText("❤️",550, 50)
        ctx.fillText("❤️",500, 50)
        ctx.fillText("❤️",450, 50)

        ctx.fillStyle = "#leca07";
        ctx.fillRect(this.game.x, this.game.y, 10, 10);
    }
}