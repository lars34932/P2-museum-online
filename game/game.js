import { GameLogic } from "./gamelogic.js";
import { GameRenderer } from "./gamerenderer.js";

class Game
{
    constructor()
    {
        this.logic = new GameLogic(this);
        this.renderer = new GameRenderer(this);
        this.x = 0;
        this.y = 0;
    }

    mouseclicktest()
    {
        let scope = this;
        this.renderer.c.addEventListener("mousemove", function(event) {scope.logic.mouseMoved(event); })
        setInterval(function () {scope.doGameFrame() }, 33)
    }

    doGameFrame()
    {
        this.logic.logic();
        this.renderer.render(0,0);
        this.renderer.render(200,0);
        this.renderer.render(400,0);
        this.renderer.render(0,200);
        this.renderer.render(200,200);
        this.renderer.render(400,200);
        this.renderer.render(0,400);
        this.renderer.render(200,400);
        this.renderer.render(400,400);
    }
}

let game = new Game;

/*start de game*/
game.doGameFrame();