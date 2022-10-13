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
const menus = document.querySelectorAll('.sideBar_subheading');
const menuItems = document.querySelectorAll('.hidden');
const dropArrow = document.querySelectorAll('.dropdownArrow');

for(let i=0 ; i<menus.length ; i++){
    menus[i].addEventListener('click',(e)=>{
        e.preventDefault();
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
let legendslide = document.querySelector('.legend');
    legendslide.addEventListener('mouseover',(e)=>{
        legendPanel.style.right = "0px";
        legendControl.classList.add('rotateToLeft');
        document.querySelector('.legend').style.opacity = 1;
    })
    legendslide.addEventListener('mouseout',(e)=>{
        legendPanel.style.right = "-118px";
        legendControl.classList.remove('rotateToLeft');
        document.querySelector('.legend').style.opacity = 0.9;
    })
// LEGEND ICON working with icons on map
const legendItems = document.querySelectorAll('.legenditems');
const legendIcons = document.querySelectorAll('.legendIcons');
const iconsOnMap = ['.mon','.Parking_x5F_icon','.road_for_car','.trails','.river']

for(let i =0;i<legendItems.length;i++){
    legendItems[i].addEventListener('click',()=>{
        legendIcons[i].classList.toggle('showColor');
        var iconMap = document.querySelector(iconsOnMap[i]).style.filter;
        if(iconMap == ''){
            document.querySelector(iconsOnMap[i]).style.filter ='none';
        } else if(iconMap == 'none'){
            document.querySelector(iconsOnMap[i]).style.filter ='grayscale()';
            iconMap = '';
        } else {
            document.querySelector(iconsOnMap[i]).style.filter ='none';
        }
    })
}
// AJAX Icon click from SVG map
var modalCtr = {
    modalOpen : function(openType){
                document.querySelectorAll('.z-monstermodal')[0].style.display = openType;
                document.querySelector('#blackBG').style.display = "block";
            },
    modalClose : function(){
        document.querySelectorAll('.z-monstermodal')[0].style.display = "none";
        document.querySelector('#blackBG').style.display = "none";
    }
}
//Close
document.querySelectorAll('.closeBtnImg')[0].addEventListener('click',()=>{
    modalCtr.modalClose()
})

const monsters = document.querySelectorAll('.monster_svg');
for(let i=0;i<monsters.length;i++){
    monsters[i].addEventListener('click',()=>{
        // Coloring Monter Icon
        monsters[i].style.filter="none";
        // AJAX -- Mon & Site
        fetch("./asset/php_module/monster_site.php?id="+i)
        .then(res => res.json())
        .then(function(data){
                // modal window open/close
                modalCtr.modalOpen('flex');
                // Contents insert Start
                document.querySelectorAll(".z-img")[0].src ="asset/images/monster/"+data.monImg
                document.querySelectorAll(".z-img")[0].alt = data.monName;
                document.querySelectorAll(".z-monstername")[0].innerHTML = data.monName;
                document.querySelectorAll(".z-monsterdesc")[0].innerHTML = data.monDesc;
                document.querySelectorAll(".z-locationname")[0].innerHTML = data.siteName;
                document.querySelectorAll(".z-locationdesc")[0].innerHTML = data.siteDesc;
                // activities
            })
        .catch(function(error){
            console.log('fail')
        })
        //AJAX -- Review
        fetch("./asset/php_module/review.php?id="+i)
        .then(res => res.json())
        .then(function(data){
                // console.log(data);
            })
        .catch(function(error){
            console.log('fail_review');
        })

    })
}
// data.monName
// data.monDesc
// data.monImg
// data.monLv
// data.siteName
// data.siteDesc
// data.season
// data.siteTime
// data.siteIMG
// data.activity
// data.facilities