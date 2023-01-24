export class Rect
{
    constructor(x, y, w, h)
    {
        this.x = 0.0 + x;
        this.y = 0.0 + y;
        this.w = 0.0 + w;
        this.h = 0.0 + h;
    }
    CX()
    {
        return this.x + this.W2();
    } CY()
    {
        return this.y + this.H2();
    }
    W2()
    {
        return this.w / 2;
    }
    H2()
    {
        return this.h / 2;
    }
    Right()
    {
        return this.x + this.w;
    }
    Bottom()
    {
        return this.y + this.h;
    }
    Contains(x, y)
    {
        let x2 = this.Right();
        let y2 =  this.Bottom();
        return x >= this.x && x <= x2 && y >= this.y && y <=y2;
    }
}