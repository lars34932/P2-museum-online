import { Game } from "./game.js";
import { Rect } from "./Rect.js";

class eindScherm
{
    constructor(game) {
        this.c = document.getElementById("myCanvas");
        this.ctx = this.c.getContext("2d");
    }

    renderEindScherm()
    {
        let ctx = this.ctx
        ctx.fillStyle = "green"
        ctx.fillRect(0, 0, 600, 700)
        
        ctx.fillStyle = "black"
        ctx.font = "30px Arial";
        ctx.fillText("score: ", 245, 110)
        let score = JSON.parse(localStorage.getItem('score'));
        ctx.fillText(score, 335, 110)
    }
}

let eindscherm = new eindScherm; 
eindscherm.renderEindScherm();