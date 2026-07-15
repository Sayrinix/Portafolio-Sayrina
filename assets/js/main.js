document.addEventListener('DOMContentLoaded', function () {
    const botones = document.querySelectorAll('.boton-filtro');
    const proyectos = document.querySelectorAll('.proyecto-item');

    botones.forEach(function (boton) {
        boton.addEventListener('click', function () {
            const filtro = boton.getAttribute('data-filter');

            botones.forEach(function (btn) {
                btn.classList.remove('active');
            });

            boton.classList.add('active');

            proyectos.forEach(function (proyecto) {
                const categorias = proyecto.getAttribute('data-category');

                if (filtro === 'todos' || categorias.includes(filtro)) {
                    proyecto.style.display = 'block';
                } else {
                    proyecto.style.display = 'none';
                }
            });
        });
    });
});