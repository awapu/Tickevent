const ticketcito =document.getElementById('ticketcito');
const InputUsuario =document.getElementById('input-usuario');
const InputClave =document.getElementById('input-clave');
const body=document.querySelector('body');
const  MitadAncho=window.innerWidth/2;
const  MitadAlto=window.innerHeight/2;
let seguirPunteroMouse=true;

body.addEventListener("mousemove",(m)=>{
    if(seguirPunteroMouse){
        if(m.clientX< MitadAncho && m.clientY < MitadAlto){
            ticketcito.src="images/pet-corp/3.png";
        }
        else if(m.clientX< MitadAncho && m.clientY > MitadAlto){
            ticketcito.src="images/pet-corp/5.png";
        }
       
      
        else if(m.clientX> MitadAncho && m.clientY < MitadAlto){
            ticketcito.src="images/pet-corp/4.png";
        }
        else{
            ticketcito.src="images/pet-corp/6.png";
        }
    }
})

InputUsuario.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
    

})

InputUsuario.addEventListener('blur',()=>{
    seguirPunteroMouse = true;

})

InputUsuario.addEventListener('keyup',()=>{
    let usuario=(InputUsuario.value.length);
    if (usuario >= 0 && usuario<=5){
        ticketcito.src= 'images/pet-corp/leer/1.png'
    }else if (usuario >= 6 && usuario<=14){
        ticketcito.src= 'images/pet-corp/leer/2.png'
    } else if (usuario >= 15 && usuario<=20){
        ticketcito.src= 'images/pet-corp/leer/3.png'
    }

    
})

InputClave.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
    let cont=1;
    const CerrarOjo = setInterval(() => {
        ticketcito.src= 'images/pet-corp/tapar_ojos/'+cont+'.png';
        if (cont < 9){
            cont++
        }
        else{
            clearInterval(CerrarOjo)
        }
    },20 );

})

InputClave.addEventListener('blur',()=>{
    seguirPunteroMouse = true;
    let cont=8;
    const AbrirOjo =setInterval(() => {
        ticketcito.src= 'images/pet-corp/tapar_ojos/'+cont+'.png';
        if (cont > 1){
            cont--;
        }
        else{
            clearInterval(AbrirOjo)
        }
    },20 );

})


const openModalLogin = document.querySelector('.ingreso');
const modalLogin = document.querySelector('.modal-login');
const closeModalLogin = document.querySelector('.btn-cerrar-modal-login');

openModalLogin.addEventListener('click', (e)=>{
    e.preventDefault();
    modalLogin.classList.add('mostrar-modal-login');
});
closeModalLogin.addEventListener('click', (e)=>{
    e.preventDefault();
    modalLogin.classList.remove('mostrar-modal-login');
});



