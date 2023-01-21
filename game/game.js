import { GameLogic } from "./gamelogic.js";
import { GameRenderer } from "./gamerenderer.js";

export class Game {
    constructor() {
        this.logic = new GameLogic(this);
        this.renderer = new GameRenderer(this);
        this.x = 0;
        this.y = 0;
    }

    mouseclicktest() {
        let scope = this
        this.renderer.c.addEventListener("mousemove", function (event) { scope.logic.mouseMoved(event); })
        this.renderer.c.addEventListener("click", function (event) { scope.logic.mouseClicked(event); })
        setInterval(function () { scope.doGameFrame() }, 33)
    }

    doGameFrame() {
        this.logic.logic();
        this.renderer.render();

        if (this.logic.tijd <= 0) {
        }
    }
}

let game = new Game;

/*start de game*/

game.doGameFrame();
game.mouseclicktest();