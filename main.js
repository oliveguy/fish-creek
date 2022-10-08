// SHOW / HIDE SIDE MANU
hamburgerMenu.addEventListener('click',(e)=>{
    e.preventDefault();
    sideBar.style.left = "0";
    sidebarTrigger.style.display = "none";
})
closeSideBar.addEventListener('click',(e)=>{
    e.preventDefault();
    sideBar.style.left = "-270px";
    sidebarTrigger.style.display = "flex";
})
// SHOW SUB MENU
const menus = document.querySelectorAll('.sidebaritems');
const menuItems = document.querySelectorAll('.hidden');
const dropArrow = document.querySelectorAll('.dropdownArrow');

for(let i=0 ; i<menus.length ; i++){
    menus[i].addEventListener('click',()=>{
        menuItems[i].classList.toggle('appear');
        dropArrow[i].classList.toggle('rotate');
        dropArrow[i].style.transitionDuration = '0.5s';
    })
}
// --------------- //
// LEGEND PANEL //
var legendControl = document.getElementsByClassName('legendctr')[0];
var legendPanel = document.getElementsByClassName('legend')[0];
legendControl.addEventListener('click',()=>{
    legendControl.classList.toggle('rotateToLeft');
    if(legendPanel.style.right == "0px"){
        legendPanel.style.right = "-118px";
    } else {
        legendPanel.style.right = "0px";
    }
})
// LEGEND PANEL MOUSE OVER
function mousemove(e){
    console.log("X "+e.clientX);
    console.log("Y "+e.clientY);
    var xRatio = e.clientX/screen.width;
    var yRatio = e.clientY/screen.height;
    if( xRatio >= 0.9 && yRatio <= 0.3){
        legendPanel.style.right = "0px";
        legendControl.classList.add('rotateToLeft');
    } else if(xRatio < 0.9 || yRatio > 0.3){
        legendPanel.style.right = "-118px";
        legendControl.classList.remove('rotateToLeft');
    }
}
// Refactoring work needed
// document.body.offsetWidth
// document.body.offsetHeight
window.addEventListener('mousemove', mousemove);

// scroll Zoom
function myFunction(e) {
    var y = e.deltaY;
    document.getElementById("demo").innerHTML = y;
  }
