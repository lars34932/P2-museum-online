import { Rect } from "./Rect.js";

export class GameLogic {
    constructor(game) {
        this.game = game;
        this.nextmoletime = 1000
        this.nextmole = this.nextmoletime;
        this.mol = 0;
        this.score = 0;
        this.tijd = 60000;
        this.mol1 = new Rect(43, 133, 101, 95);
        this.mol2 = new Rect(243, 133, 101, 95);
        this.mol3 = new Rect(443, 133, 101, 95);
        this.mol4 = new Rect(43, 333, 101, 95);
        this.mol5 = new Rect(243, 333, 101, 95);
        this.mol6 = new Rect(443, 333, 101, 95);
        this.mol7 = new Rect(43, 533, 101, 95);
        this.mol8 = new Rect(243, 533, 101, 95);
        this.mol9 = new Rect(443, 533, 101, 95);
    }

    mouseMoved(event) {
        this.game.x = event.offsetX;
        this.game.y = event.offsetY;

    }

    mouseClicked(event) {
        let x = event.offsetX;
        let y = event.offsetY;

        if (this.mol1.Contains(x,y)) {
            if (this.mol == 1) {
                this.score += 1
                this.mol = 0  
            }
        }
        else if ( this.mol2.Contains(x,y)) {
            if (this.mol == 2) {
                this.score += 1
                this.mol = 0
            }
        }
        else if ( this.mol3.Contains(x,y)) {
            if (this.mol == 3) {
                this.score += 1
                this.mol = 0
            }
        }
        else if ( this.mol4.Contains(x,y)) {
            if (this.mol == 4) {
                this.score += 1
                this.mol = 0
            }
        }
        else if ( this.mol5.Contains(x,y)) {
            if (this.mol == 5) {
                this.score += 1
                this.mol = 0
            }
        }
        else if ( this.mol6.Contains(x,y)) {
            if (this.mol == 6) {
                this.score += 1
                this.mol = 0
            }
        }
        else if ( this.mol7.Contains(x,y)) {
            if (this.mol == 7) {
                this.score += 1
                this.mol = 0
            }
        }
        else if ( this.mol8.Contains(x,y)) {
            if (this.mol == 8) {
                this.score += 1
                this.mol = 0
            }
        }
        else if ( this.mol9.Contains(x,y)) {
            if (this.mol == 9) {
                this.score += 1
                this.mol = 0
            }
        }
    }

    logic() {
        this.nextmole -= 33;
        this.tijd -= 33;
        if (this.nextmole <= 0) {
            this.nextmole = this.nextmoletime
            setTimeout(() => { console.log(this.mol) }, 666);
            let number = Math.floor(Math.random() * 9) + 1;
            this.mol = number;
        }

    }

    click() {
        if (this.mol == 1){
            this.score += 1;
            this.mol = 0;  
        } 
        else if (this.mol == 2){
            this.score += 1;
            this.mol = 0;
        }
        else if (this.mol == 3){
            this.score += 1;
            this.mol = 0;
        }
        else if (this.mol == 4){
            this.score += 1;
            this.mol = 0;
        }
        else if (this.mol == 5){
            this.score += 1;
            this.mol = 0;
        }
        else if (this.mol == 6){
            this.score += 1;
            this.mol = 0;
        }
        else if (this.mol == 7){
            this.score += 1;
            this.mol = 0;
        }
        else if (this.mol == 8){
            this.score += 1;
            this.mol = 0;
        }
        else if (this.mol == 9){
            this.score += 1;
            this.mol = 0;
        }
    }
}