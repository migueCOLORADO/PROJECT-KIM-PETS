
const n1 = document.querySelector('#n1');
const n1Info = document.querySelector('#n1-info');
const nombre = document.querySelector('#nombre-1');
const desig = document.querySelector('#desig-1');


n1.addEventListener('mouseover', () => {
    n1Info.style.display = 'block';
    nombre.style.color = 'black';
    desig.style.color = '#5da6bf';
});

n1.addEventListener('mouseout', () => {
    n1Info.style.display = 'none';
    nombre.style.color = 'white';
    desig.style.color = 'white';
});

const n2 = document.querySelector('#n2');
const n2Info = document.querySelector('#n2-info');
const nombre2 = document.querySelector('#nombre-2');
const desig2 = document.querySelector('#desig-2');

n2.addEventListener('mouseover', () => {
    n2Info.style.display = 'block';
    nombre2.style.color = 'black';
    desig2.style.color = '#5da6bf';
});

n2.addEventListener('mouseout', () => {
    n2Info.style.display = 'none';
    nombre2.style.color = 'white';
    desig2.style.color = 'white';
});


const n3 = document.querySelector('#n3');
const n3Info = document.querySelector('#n3-info');
const nombre3 = document.querySelector('#nombre-3');
const desig3 = document.querySelector('#desig-3');


n3.addEventListener('mouseover', () => {
    n3Info.style.display = 'block';
    nombre3.style.color = 'black';
    desig3.style.color = '#5da6bf';
});

n3.addEventListener('mouseout', () => {
    n3Info.style.display = 'none';
    nombre3.style.color = 'white';
    desig3.style.color = 'white';
});