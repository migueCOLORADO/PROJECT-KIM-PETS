
// Cambio de cantidad de articulos ingresado por el usuario.
const minusBtn = document.querySelector('#input-minus');
const plusBtn = document.querySelector('#input-plus');
let userInput = document.querySelector('.input-number');

let userInputNumber = 0;

plusBtn.addEventListener('click', ()=>{
    userInputNumber++;
    userInput.value = userInputNumber;
});

minusBtn.addEventListener('click', ()=>{
    userInputNumber--;
    if(userInputNumber <= 0){
        userInputNumber = 0;
    }
    userInput.value = userInputNumber;
});

// Agregar el total de productos al carrito cuando se presiona el boton AÑADIR AL CARRITO
const añadirBtn = document.querySelector('.info-button');
let cartNoti = document.querySelector('.header-cart--noti');

let lastValue = parseInt(cartNoti.innerText);

añadirBtn.addEventListener('click', ()=>{ 
    lastValue = lastValue + userInputNumber;
    
    cartNoti.innerText = lastValue;
    cartNoti.style.display = 'block';
    drawProductInModal();
});


    
//Mostrar el modal con el detalle del carrito
const cartIconBtn = document.querySelector('.header-cart');
const cartModal = document.querySelector('.cart-modal');
const productCont = document.querySelector('.cart-modal-cont');


cartIconBtn.addEventListener('click', ()=>{
    cartModal.classList.toggle('show');

    if(lastValue === 0) {
        productCont.innerHTML = '<p class="cart-vacio">TU CARRITO ESTA VACIO</p>';
    }
    else {
        drawProductInModal();
    }

    
});


//Borrar el contenido del carrito
function deleteProduct() {
    const deleteContBtn = document.querySelector('#cart-modal-delete');

    deleteContBtn.addEventListener('click', () => {
        productCont.innerHTML = '<p class="cart-vacio">TU CARRITO ESTA VACIO</p>';
        lastValue = 0;
        cartNoti.innerText = lastValue;
    })
}

//Cambiar IMGs Cuando se presionen las flechas
const imgCont = document.querySelector('.galeria-img');
const previusBtn = document.querySelector('#galeria-prev');
const nextBtn = document.querySelector('#galeria-next');
let imgIndex = 1;


nextBtn.addEventListener('click', () => {
    NextImg(imgCont);
});

previusBtn.addEventListener('click', () => {
    previusImg(imgCont);
});


//Mostrar el modal de imagenes cuando hago click
const imgModal = document.querySelector('.modal-galeria-b');
const closeModalBtn = document.querySelector('#galeria-x-icono');

imgCont.addEventListener('click', () => {
    imgModal.style.display = 'grid';
});

closeModalBtn.addEventListener('click', () => {
    imgModal.style.display = 'none';
});

//Cambiar las Imagenes Principales
let galeriaConts = document.querySelectorAll('.galeria-cont');
galeriaConts = [...galeriaConts];

galeriaConts.forEach(galeriaCont => {
    galeriaCont.addEventListener('click', event => {
        console.log(event.target.id);
        imgCont.style.backgroundImage = `url('../../IMG/pecheras-${event.target.id}.webp')`
    })
})

//Cambiar las Imagenes del Modal
let ModalgaleriaConts = document.querySelectorAll('.modal-galeria-cont');
ModalgaleriaConts = [...ModalgaleriaConts];
const ModalimgCont = document.querySelector('.modal-galeria-img');

ModalgaleriaConts.forEach(ModalgaleriaCont => {
    ModalgaleriaCont.addEventListener('click', event => {
        console.log(event.target.id.slice(-1));
        ModalimgCont.style.backgroundImage = `url('../../IMG/pecheras-${event.target.id.slice(-1)}.webp')`
    })
})

//Cambiar las Imagenes del Modal desde los Botones
const ModalpreviusBtn = document.querySelector('#modal-galeria-prev');
const ModalnextBtn = document.querySelector('#modal-galeria-next');

ModalnextBtn.addEventListener('click', () => {
    NextImg(ModalimgCont);
});

ModalpreviusBtn.addEventListener('click', () => {
    previusImg(ModalimgCont);
});


//Mostrar el Menu Cuando Presiono el Menu Hamburguesa
const hamburgerMenu = document.querySelector('#menu-icono');
const modalMenu = document.querySelector('.modal-menu-b');
const closeModalMenu = document.querySelector('#x-icono');

modalMenu.style.display = 'none'

hamburgerMenu.addEventListener('click', ()=>{
    console.log('abrir modal');
    modalMenu.style.display = 'block';
});

closeModalMenu.addEventListener('click', ()=>{
    modalMenu.style.display = 'none';
});


//FUNCIONES

function drawProductInModal (){
    productCont.innerHTML = `
        <div class="cart-modal-det-cont">
            <img src="../../IMG/pecheras-1.webp" class="cart-modal-img" alt="">
            <div>
                <p class="cart-modal-producto">PECHERAS &+ PECHERAS</p>
                <p class="cart-modal-precio">$32.500 x1 <span>$32.500</span></p>
            </div>
            <i class="fa-solid fa-trash" id="cart-modal-delete"></i>
            </div>
        <a class="cart-modal-pagar" href="https://wa.link/9wbmas">COMPRAR</a>`;
    deleteProduct();
    let priceModal = document.querySelector('.cart-modal-precio');
    priceModal.innerHTML = `$32.500 x${lastValue} <span>$${lastValue*32500}</span>`;
}

function NextImg(imgCont) {
    if (imgIndex == 4) {
        imgIndex = 1;
    }
    else {
        imgIndex++;
    }
    imgCont.style.backgroundImage = `url('../../IMG/pecheras-${imgIndex}.webp')`
}

function previusImg(imgCont) {
    if (imgIndex == 1) {
        imgIndex = 4;
    }
    else {
        imgIndex--;
    }
    imgCont.style.backgroundImage = `url('../../IMG/pecheras-${imgIndex}.webp')`
}