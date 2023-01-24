import { Rect } from "./Rect.js";

class beginScherm {
    constructor() {
        this.c = document.getElementById("myCanvas");
        this.ctx = this.c.getContext("2d");
        this.start = new Rect(200, 250, 200, 100);
    }

    renderBeginScherm() {
        let ctx = this.ctx
        let hill = document.getElementById("molehill")
        let head = document.getElementById("molehead");

        ctx.fillStyle = "green"
        ctx.fillRect(0, 0, 600, 700)

        ctx.fillStyle = "black"
        ctx.strokeRect(200, 250, 200, 100)
        ctx.font = "30px Arial";
        ctx.fillText("whack a mole", 210, 110)
        ctx.fillText("start", 268, 310)

        ctx.drawImage(hill, 25, 200);
        ctx.drawImage(head, 43, 133);
        ctx.drawImage(hill, 425, 200);
        ctx.drawImage(head, 443, 133);
    }

    mouseClicked(event) {
        let x = event.offsetX;
        let y = event.offsetY;

        if (this.start.Contains(x, y)) {
            import("./game.js").then(() => {})
        }
    }

    click() {
        let scope = this
        this.c.addEventListener("click", function (event) { scope.mouseClicked(event); })
    }
}

let beginscherm = new beginScherm;
beginscherm.renderBeginScherm();
beginscherm.click();