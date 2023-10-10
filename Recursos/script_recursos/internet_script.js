let burbujas = [];
let numBurbujas = 50;

function setup() {
    let canvas = createCanvas(windowWidth, windowHeight);
    canvas.parent('particulas');

    for (let i = 0; i < numBurbujas; i++) {
        let x = random(width);
        let y = random(height);
        let r = random(10, 50); // Este es el radio de la burbuja. Ajusta los valores si quieres burbujas más grandes o más pequeñas.
        let burbuja = new Burbuja(x, y, r);
        burbujas.push(burbuja);
    }
}

function draw() {
    clear(); // 25 es la opacidad, puedes aumentarla si quieres que las burbujas desaparezcan más rápido

    for (let burbuja of burbujas) {
        burbuja.mover();
        burbuja.mostrar();
        burbuja.interaccionConMouse();
    }
}

function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
}

class Burbuja {
    constructor(x, y, r) {
        this.x = x;
        this.y = y;
        this.r = r;
        this.velocidadX = random(-2, 2);
        this.velocidadY = random(-2, 2);
    }

    mover() {
        this.x += this.velocidadX;
        this.y += this.velocidadY;

        // Hacer que las burbujas reboten en los bordes
        if (this.x > width || this.x < 0) {
            this.velocidadX *= -1;
        }
        if (this.y > height || this.y < 0) {
            this.velocidadY *= -1;
        }
    }

    mostrar() {
        noStroke();
        fill(78, 149, 202, 180); // Color de las burbujas. Puedes cambiarlo según lo que necesites.
        ellipse(this.x, this.y, this.r * 2);
    }

    interaccionConMouse() {
        let distancia = dist(mouseX, mouseY, this.x, this.y);
        if (distancia < this.r + 20) {
            this.velocidadX = (this.x - mouseX) / 10;
            this.velocidadY = (this.y - mouseY) / 10;
        }
    }
}
