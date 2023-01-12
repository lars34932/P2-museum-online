export class GameLogic
{
    constructor(game)
    {
        this.game = game;
        this.levens = 3;
        this.nextmoletime = 1000
        this.nextmole = this.nextmoletime;
        this.mol = 0;
        console.log(this.mol);
    }

    mouseMoved(event)
    {
        this.game.x = event.offsetX;
        this.game.y = event.offsetY;

    }

    logic()
    {

    }

    mollen() {
        this.nextmole -= 33;
        if (this.nextmole <= 0) {
            this.nextmole = this.nextmoletime
            let number = Math.floor(Math.random() * 9);
            this.mol = number;
            
        }
    }


}