// Welcome Modal
setTimeout(()=>{
    showModal('#welcomeModal', 'flex');
}, 2000)

//Triger on ZoonCtr
welcomeOpen.addEventListener('click',()=>{
    showModal('#welcomeModal', 'flex')})
// Atribution modal
attribution.addEventListener('click',()=>{
    showModal('#attributionModal', 'flex')
})
atriClose.addEventListener('click',()=>{
    document.querySelector('#attributionModal').style.display = "none";
    document.querySelector('#blackBG').style.display = "none";
})
closeWelcome.addEventListener('click',()=>{
    document.querySelector('#welcomeModal').style.display = "none";
    document.querySelector('#blackBG').style.display = "none";
})
welcomeclose.addEventListener('click',()=>{
    document.querySelector('#welcomeModal').style.display = "none";
    document.querySelector('#blackBG').style.display = "none";
})

function showModal(target, display){
    document.querySelector(target).style.display = display;
    document.querySelector('#blackBG').style.display = "block";
}