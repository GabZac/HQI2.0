let dispositivoConectado = true; 

function verificarConexion() {
    const dot = document.querySelector('.status-dot');
    const texto = dot.parentElement;
    if (!dispositivoConectado) {
        dot.style.backgroundColor = '#e74c3c';
        texto.innerHTML = '<span class="status-dot" style="background-color: #e74c3c;"></span>Sin conexión';
    }
}

const botonesTema = document.querySelectorAll('.btn-tema');
botonesTema.forEach(boton => {
    boton.addEventListener('click', () => {
        document.querySelector('.btn-tema.active').classList.remove('active');
        boton.classList.add('active');
    });
});

const selectMovimiento = document.getElementById('select-movimiento');
const panelEfectos = document.getElementById('panel-efectos');

selectMovimiento.addEventListener('change', () => {
    if (selectMovimiento.value === 'si') {
        panelEfectos.style.display = 'block';
    } else {
        panelEfectos.style.display = 'none';
    }
});

const botonesEfecto = document.querySelectorAll('.btn-efecto');
botonesEfecto.forEach(boton => {
    boton.addEventListener('click', () => {
        document.querySelector('.btn-efecto.active').classList.remove('active');
        boton.classList.add('active');
    });
});

const btnListo = document.querySelector('.btn-listo');
const sliderVolumen = document.querySelector('.control-group:nth-of-type(1) .slider');
const sliderLuz = document.querySelector('.control-group:nth-of-type(2) .slider');
const pickerColor = document.querySelector('.picker-color');
const checkApagado = document.querySelector('.toggle-row input');

btnListo.addEventListener('click', () => {
    const temaActivo = document.querySelector('.btn-tema.active').innerText;
    const efectoActivo = document.querySelector('.btn-efecto.active').innerText;
    
    localStorage.setItem('memot_tema', temaActivo);
    localStorage.setItem('memot_volumen', sliderVolumen.value);
    localStorage.setItem('memot_luz', sliderLuz.value);
    localStorage.setItem('memot_color', pickerColor.value);
    localStorage.setItem('memot_movimiento_luz', selectMovimiento.value);
    localStorage.setItem('memot_efecto_luz', efectoActivo);
    if(checkApagado) localStorage.setItem('memot_apagado', checkApagado.checked);
    
    alert('¡Configuración de luces y temas guardada! 🌙');
});

function cargarConfiguracion() {
    verificarConexion();
    
    if (localStorage.getItem('memot_tema')) {
        const temaGuardado = localStorage.getItem('memot_tema');
        botonesTema.forEach(b => {
            if (b.innerText === temaGuardado) {
                document.querySelector('.btn-tema.active').classList.remove('active');
                b.classList.add('active');
            }
        });
        
        sliderVolumen.value = localStorage.getItem('memot_volumen');
        sliderLuz.value = localStorage.getItem('memot_luz');
        pickerColor.value = localStorage.getItem('memot_color');
        
        const movGuardado = localStorage.getItem('memot_movimiento_luz');
        selectMovimiento.value = movGuardado;
        if (movGuardado === 'si') {
            panelEfectos.style.display = 'block';
        }
        
        const efectoGuardado = localStorage.getItem('memot_efecto_luz');
        botonesEfecto.forEach(b => {
            if (b.innerText === efectoGuardado) {
                document.querySelector('.btn-efecto.active').classList.remove('active');
                b.classList.add('active');
            }
        });

        if(checkApagado) checkApagado.checked = localStorage.getItem('memot_apagado') === 'true';
    }
}

window.onload = cargarConfiguracion;
