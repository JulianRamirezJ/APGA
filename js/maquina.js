const getId = (id) => document.getElementById(id);

class MaquinaEscribir {
    constructor(Objeto) {
        [this.id, this.texto] = [Objeto.id, Objeto.texto];
        this.contador = this.texto.length;
        this.max = this.contador;        
    }

    iniciarMaquina() {
        this.salida = getId(this.id);
        this.request = setInterval( () => this.loop(--this.contador), 60 );
    }
    loop(contador) {
        let letraActual = (-contador + (this.max-1)) % this.max;
        this.salida.innerHTML += this.texto[letraActual];

        if(contador <= 0) {
            window.clearInterval(this.request);
        }
    } 

}