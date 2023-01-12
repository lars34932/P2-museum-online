import { GameLogic } from "./gamelogic.js";

export class GameRenderer
{
    constructor(game)
    {
        this.logic = game.logic;
        this.game = game;
        this.c = document.getElementById("myCanvas");
        this.ctx = this.c.getContext("2d");
    }
    
    render()
    {
        let ctx = this.ctx
        let hill = document.getElementById("molehill")
        let head = document.getElementById("molehead")
        ctx.fillStyle = "green";
        ctx.fillRect(0,0,600,700);
        ctx.fillStyle = "black";
        ctx.beginPath();
        ctx.drawImage(hill, 25, 200);
        ctx.drawImage(hill, 225, 200);
        ctx.drawImage(hill, 425, 200);

        //tijdelijk om te testen//
        ctx.drawImage(head, 43, 133)
        ctx.drawImage(head, 243, 133)
        ctx.drawImage(head, 443, 133)
        //.//
        ctx.drawImage(head, 43, 333)
        ctx.drawImage(head, 243, 333)
        ctx.drawImage(head, 443, 333)
        //.//
        ctx.drawImage(head, 43, 533)
        ctx.drawImage(head, 243, 533)
        ctx.drawImage(head, 443, 533)
        //.//

        ctx.fill();
        ctx.beginPath();
        ctx.drawImage(hill, 25, 400);
        ctx.drawImage(hill, 225, 400);
        ctx.drawImage(hill, 425, 400);
        ctx.fill();
        ctx.beginPath();
        ctx.drawImage(hill, 25, 600);
        ctx.drawImage(hill, 225, 600);
        ctx.drawImage(hill, 425, 600);
        ctx.fill();
        ctx.font = "30px Arial";
        ctx.fillText("whack-a-mole", 200, 50);
        ctx.fillText("score: ", 250, 100);
        ctx.fillStyle = "#leca07";
        ctx.fillRect(this.game.x, this.game.y, 10, 10);
        ctx.fill();
    }

    mollen()
    {
        let ctx = this.ctx
        console.log(this.logic.mol)
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