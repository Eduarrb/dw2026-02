const obtenerJson = async (nombre) => {
    try {
        const res = await axios.get(`https://pokeapi.co/api/v2/pokemon/${nombre}`)
        return res.data;
    } catch (error) {
        console.log(error);
    }
}


const form = document.querySelector('form');
const input = form.querySelector('input[type=text]');
const pokeData = document.querySelector('.pokeData');
const pokeImg = document.querySelector('.pokeImagen');
const pokeNombre = document.querySelector('h2');
const alerta = document.querySelector('.relleno');

form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const nombrePokemon = input.value;
    if(!nombrePokemon) {
        alerta.textContent = 'Por favor ingresa un nombre';
        return;
    }
    let pokemon = await obtenerJson(nombrePokemon);
    console.log(pokemon);
    const plantilla = `
        <ul>
            <li><strong>HP:</strong> ${pokemon.stats[0].base_stat}</li>
            <li><strong>Attack:</strong> ${pokemon.stats[1].base_stat}</li>
            <li><strong>Defense:</strong> ${pokemon.stats[2].base_stat}</li>
            <li><strong>Special-Attack:</strong> ${pokemon.stats[3].base_stat}</li>
            <li><strong>Special-Defense:</strong> ${pokemon.stats[4].base_stat}</li>
            <li><strong>Speed:</strong> ${pokemon.stats[5].base_stat}</li>
        </ul>
    `;

    pokeData.innerHTML = plantilla;
    pokeImg.innerHTML = `<img src="${pokemon.sprites.front_default}" alt="${textContent = pokemon.name}">`;
    pokeNombre.textContent = pokemon.name.toUpperCase();
    input.value = '';
});
