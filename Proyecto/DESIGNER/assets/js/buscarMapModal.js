let lugaresInfo = [];

$("#mostrarEstablecimientos").click(function () {
    var data = {
        Distrito: ""
    };
    $.ajax({
        url: "../HELPER/GeoUbicacion.php",
        data: { "GET_UBICACION_NEGOCIOS": JSON.stringify(data)},
        type: "POST",
        async: true,
        datatype: "html",
        success: function (data) {
            $.each($.parseJSON(data), function (index, info) {
                let lugarInfo = {
                    posicion: { lat: parseFloat(info.lat),
                                lng: parseFloat(info.lng)   },
                    nombre: info.nombre
                }
                lugaresInfo.push(lugarInfo);
            });
            GET_UbicacionUsuario();
        }
    });
});


const GET_UbicacionUsuario = () =>
{
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((usuarioUbicacion) => {
            let ubicacion = {
                lat: usuarioUbicacion.coords.latitude,
                lng: usuarioUbicacion.coords.longitude,
            }            
            DibujarMapa(ubicacion);
        });
    }
}

const DibujarMapa = (ubicacionUsuario) =>
{
    let map = document.getElementById('map').style.display = "block";
    let mapa = new google.maps.Map(document.getElementById('map'), {
        center: ubicacionUsuario,
        zoom: 14
    });
console.log(ubicacionUsuario);
    let marcadorUsuario = new google.maps.Marker({
        position: ubicacionUsuario,
        title: 'Usted esta aquí'
    });
    
    marcadorUsuario.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png')
    marcadorUsuario.setMap(mapa);
    console.log(lugaresInfo);
    let marcadores = lugaresInfo.map(lugar => {
        return new google.maps.Marker({
            position: lugar.posicion,
            title: lugar.nombre,
            map: mapa
        });
    });
}


/* //Crear y mostrar mapa
// Añadir un objeto de atributos a un elemento
const addAttributes = (element, attrObj) => {
    for (attr in attrObj){
        if(attrObj.hasOwnProperty(attr))
        element.setAttribute(attr,attrObj[attr]);
    }
}

// Crear objetos con atributos e hijos
const createCustomElement = (element, attributes, children) =>{
    let customElement = document.createElement(element);
    if(children !== undefined){
        children.forEach(el => {
            if(el.nodeType){
                if(el.nodeType === 1 || el.nodeType === 11)
                customElement.appendChild(el);
            } else{
                customElement.innerHTML += el;
            }
        });
    }    
    addAttributes(customElement, attributes);
    return customElement;
};

const printModal = content =>{
    //Crear contenedor interno
    const modalContentEl = createCustomElement('div',{
        id: 'map-negocios',
        class: 'el-modal-content'
    }, [content]),
    //Crear contenedor principal
    modalContainerEl = createCustomElement('div',{
        id: 'el-modal-container',
        class: 'el-modal-container'
    }, [modalContentEl])

    document.body.appendChild(modalContainerEl);

    const removeModal = () =>{
        document.body.removeChild(modalContainerEl);
    }

    modalContainerEl.addEventListener('click', e =>{
        if(e.target === modalContainerEl) removeModal();
    });
} */

/* document.getElementById('btJson').addEventListener('click', () =>{
    printModal('Cargando mapa, por favor espere...');
}); */
