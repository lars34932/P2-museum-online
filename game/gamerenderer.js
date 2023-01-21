import { GameLogic } from "./gamelogic.js";


export class GameRenderer {
    constructor(game) {
        this.logic = game.logic;
        this.game = game;
        this.c = document.getElementById("myCanvas");
        this.ctx = this.c.getContext("2d");
        this.head = document.getElementById("molehead");
    }

    render() {
        //define ctx, hill, number
        let ctx = this.ctx
        let hill = document.getElementById("molehill")
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
            this.ctx.drawImage(this.head, 43, 133);
        } else if (number == 2) {
            this.ctx.drawImage(this.head, 243, 133);
        } else if (number == 3) {
            this.ctx.drawImage(this.head, 443, 133);
        } else if (number == 4) {
            this.ctx.drawImage(this.head, 43, 333);
        } else if (number == 5) {
            this.ctx.drawImage(this.head, 243, 333);
        } else if (number == 6) {
            this.ctx.drawImage(this.head, 443, 333);
        } else if (number == 7) {
            this.ctx.drawImage(this.head, 43, 533);
        } else if (number == 8) {
            this.ctx.drawImage(this.head, 243, 533);
        } else if (number == 9) {
            this.ctx.drawImage(this.head, 443, 533);
        }

        //render text
        ctx.fillStyle = "black";
        ctx.font = "30px Arial";
        ctx.fillText("whack-a-mole", 200, 50);
        ctx.fill();

        //render hammer
        ctx.fillRect(this.game.x, this.game.y, 10, 10);
        //moet hamer nog maken

        //render tijd
        ctx.fillText("tijd: ", 500, 50);
        ctx.fillText(Math.round(this.logic.tijd / 1000), 550, 50);

        //render score
        ctx.fillText("score: ", 250, 100);
        ctx.fillText(this.logic.score, 335, 102)
        ctx.fill();
    }
}