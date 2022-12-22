export class GameLogic
{
    constructor(game)
    {
        this.game = game;
        this.levens = 3;
    }

    mouseMoved(event)
    {
        this.game.x = event.offsetX;
        this.game.y = event.offsetY;

    }

    logic()
    {

    }
}