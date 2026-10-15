const btnMenu = document.querySelector(".nav__contenedor__actions--menuBox");

const menu = document.querySelector(".nav__contenedor__menu");

btnMenu.addEventListener("click", function(){
    menu.classList.toggle("active");
});

const obtenerJson = async (action) => {
    try {
        const id = 1;
        // www.mipagina.com/index.php?action=getCategorias&id=1
        const res = await axios.get('api/apiCaller.php', {
            params: {
                action: action,
                id: id
            }
        });

        console.log(res.data);
        return res.data;
    } catch (error) {
        console.log(error);
    }
}

