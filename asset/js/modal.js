// Welcome Modal
setTimeout(()=>{
    showModal('#welcomeModal', 'flex');
}, 2000)

closeWelcome.addEventListener('click',()=>{
    document.querySelector('#welcomeModal').style.display = "none";
    document.querySelector('#blackBG').style.display = "none";
})


function showModal(target, display){
    document.querySelector(target).style.display = display;
    document.querySelector('#blackBG').style.display = "block";
}