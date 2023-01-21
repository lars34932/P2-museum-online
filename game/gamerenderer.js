import { GameLogic } from "./gamelogic.js";


export class GameRenderer {
    constructor(game) {
        this.logic = game.logic;
        this.game = game;
        this.c = document.getElementById("myCanvas");
        this.ctx = this.c.getContext("2d");
    }

    render() {
        //define ctx, hill, number
        let ctx = this.ctx
        let hill = document.getElementById("molehill")
        let head = document.getElementById("molehead");
        let hammer = document.getElementById("hammer");
        let number = this.logic.mol

        //render background
        ctx.fillStyle = "green";
        ctx.fillRect(0, 0, 600, 700);

        //render hills
        ctx.drawImage(hill, 25, 200);
        ctx.drawImage(hill, 225, 200);
        ctx.drawImage(hill, 425, 200);
        ctx.drawImage(hill, 25, 400);
        ctx.drawImage(hill, 225, 400);
        ctx.drawImage(hill, 425, 400);
        ctx.drawImage(hill, 25, 600);
        ctx.drawImage(hill, 225, 600);
        ctx.drawImage(hill, 425, 600);
        
        //render mollen
        if (number == 1) {
            ctx.drawImage(head, 43, 133);
        } else if (number == 2) {
            ctx.drawImage(head, 243, 133);
        } else if (number == 3) {
            ctx.drawImage(head, 443, 133);
        } else if (number == 4) {
            ctx.drawImage(head, 43, 333);
        } else if (number == 5) {
            ctx.drawImage(head, 243, 333);
        } else if (number == 6) {
            ctx.drawImage(head, 443, 333);
        } else if (number == 7) {
            ctx.drawImage(head, 43, 533);
        } else if (number == 8) {
            ctx.drawImage(head, 243, 533);
        } else if (number == 9) {
            ctx.drawImage(head, 443, 533);
        }

        //render text
        ctx.fillStyle = "black";
        ctx.font = "30px Arial";
        ctx.fillText("whack-a-mole", 200, 50);
        ctx.fill();

        //render hammer
        ctx.drawImage(hammer, this.game.x-40, this.game.y-60);
        //moet hamer nog maken

        //render tijd
        ctx.fillText("tijd: ", 490, 50);
        ctx.fillText(Math.round(this.logic.tijd / 1000), 540, 50);

        //render score
        ctx.fillText("score: ", 250, 100);
        ctx.fillText(this.logic.score, 335, 102)
        ctx.fill();
    }
}