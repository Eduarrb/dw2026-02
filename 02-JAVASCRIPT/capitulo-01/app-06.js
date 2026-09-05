// METODOS => son funciones dentro de un objeto

let username = 'juan28'

const usuario = {
    dni: '123456789',
    id: 'dsfds-2435d-12343',
    username: 'PepitoMuchaAura',
    edad: 20,
    libroFavorito: 'Harry Pooter',
    jugar: function(consola){
        console.log(`Pepito prendio su ${consola}`);
    },
    estudiar: () => {
        console.log(`Pepito empezo a leer su libro: ${this}`);
    },
    // THIS
    // Hace refencia al objeto dependiendo del entorno de ejecución
    llamarthis: function() {
        console.log(this);
    },
    iniciarSesion: function(){
        console.log(`el usuario ${this.username} inicio sesión correctamente`);
    }
}


// console.log(usuario.dni);
usuario.jugar('xbox 360');
usuario.estudiar();

// variable global
let num = 1;
// entorno global, this hacer referencia al objeto root global -> window
console.log(this); // window

usuario.llamarthis();

usuario.iniciarSesion();