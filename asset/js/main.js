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
// MONSTER MENU IN SIDE BAR
let monsterMenu = document.querySelectorAll('.monster_listing');
for(let i =0;i<monsterMenu.length;i++){
    let monstersOnMap = document.querySelectorAll('.monster_svg')
    monsterMenu[i].addEventListener('click',()=>{
        monstersOnMap[i].classList.toggle('monShow');
        monsterMenu[i].classList.toggle('checkedMonster');
    })
    }

// LEGEND PANEL //
var legendControl = document.getElementsByClassName('legendctr')[0];
var legendPanel = document.getElementsByClassName('legend')[0];
legendControl.addEventListener('click',()=>{
    legendControl.classList.toggle('rotateToLeft');
    if(legendPanel.style.right == "0px"){
        legendPanel.style.right = "-120px";
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
        legendPanel.style.right = "-120px";
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
// AJAX -- Icon click from SVG map
var modalCtr = {
    modalOpen : function(openType){
                document.querySelectorAll('.z-monstermodal')[0].style.display = openType;
                document.querySelector('#blackBG').style.display = "block";
            },
    modalClose : function(target){
        document.querySelectorAll(target)[0].style.display = "none";
        document.querySelector('#blackBG').style.display = "none";
    }
}
//Close
document.querySelectorAll('.closeBtnImg_1')[0].addEventListener('click',()=>{
    modalCtr.modalClose('.z-monstermodal');
})
const monsters = document.querySelectorAll('.monster_svg');
var obje ={};
for(let i=0;i<monsters.length;i++){
    monsters[i].addEventListener('click',()=>{
        // Coloring Monter Icon
        monsters[i].style.filter="none";
        // AJAX -- Mon & Site
        fetch("./asset/php_module/monster_site.php?id="+i)
        .then(res => res.json())
        .then(function(data){
                // console.log(data);
                obje = data;
            // modal window open/close
                modalCtr.modalOpen('flex');
            // Contents insert
                document.querySelectorAll(".z-img")[0].src ="asset/images/monster/"+data.monImg
                document.querySelectorAll(".z-img")[0].alt = data.monName;
                document.querySelectorAll(".z-mon_name")[0].innerHTML = data.monName;
                document.querySelectorAll(".z-monsterdesc")[0].innerHTML = data.monDesc;
                document.querySelectorAll(".z-locationname")[0].innerHTML = data.siteName;
                document.querySelectorAll(".z-locationdesc")[0].innerHTML = data.siteDesc;
            // Parking Lot git addInfo
                let parkingdata = [data.parking1,data.parking2,data.parking3];
                let removelist = document.querySelectorAll('.parkinglistup');
                    for(let i=0;i<removelist.length;i++){
                        parkingAll.removeChild(removelist[i]);
                    }
                    if(parkingdata[0]){
                        parkingLot = document.createElement('li');
                        parkingLot.id = "parkinglist";
                        parkingLot.classList.add('parkinglistup');
                        parkingAll.appendChild(parkingLot);
                        parkinglist.innerHTML = parkingdata[0]
                    }
                    if(parkingdata[1]){
                        parkingLot1 = document.createElement('li');
                        parkingLot1.id = "parkinglist2";
                        parkingLot1.classList.add('parkinglistup');
                        parkingAll.appendChild(parkingLot1);
                        parkinglist2.innerHTML = parkingdata[1]
                    }
                    if(parkingdata[2]){
                        parkingLot2 = document.createElement('li');
                        parkingLot2.id = "parkinglist3";
                        parkingLot2.classList.add('parkinglistup');
                        parkingAll.appendChild(parkingLot2);
                        parkinglist3.innerHTML = parkingdata[2]
                    }

            // Photos
                let photos = [data.pic1, data.pic2];
                siteimg1.src = "asset/images/photos/"+photos[0];
                siteimg1.alt = data.siteName;
                siteimg2.src = "asset/images/photos/"+photos[1];
                siteimg2.alt = data.siteName;
            // REVIEW
                // INIT LISTED ITEMS
                let discard = document.querySelectorAll(".z-reviewer");
                for(let i=0;i<discard.length;i++){
                    discard[i].remove()
                }
                //  AJAX INSERTATION
                for(const inner in data.reviewPost){
                    // CREATE LI ELEMENT
                    let addList = document.createElement('li');
                    addList.classList.add('z-reviewer');
                    addList.id = "list_"+data.reviewPost[inner].date;
                    reviewListing.prepend(addList);
                    let listID = document.getElementById("list_"+data.reviewPost[inner].date);
                    
                    // INSERT USER NAME
                    let p_user = document.createElement('p');
                    p_user.classList.add('z-user');
                    p_user.id = "p_user"+data.reviewPost[inner].date;
                    listID.appendChild(p_user);
                    let puser = document.getElementById("p_user"+data.reviewPost[inner].date);
                    puser.innerHTML = data.reviewPost[inner].author;

                    //INSERT REVIEW CONTENT
                    let p_review = document.createElement('p');
                    p_review.classList.add('z-review');
                    p_review.id = "p_content"+data.reviewPost[inner].date;
                    listID.appendChild(p_review);
                    let preview = document.getElementById("p_content"+data.reviewPost[inner].date);
                    preview.innerHTML = data.reviewPost[inner].content;

                    //INSERT REVIEW DATE CONTENT
                    let p_date = document.createElement('p');
                    p_date.classList.add('z-review_time');
                    p_date.id = "p_date"+data.reviewPost[inner].date;
                    listID.appendChild(p_date);
                    let pdate = document.getElementById("p_date"+data.reviewPost[inner].date);
                    pdate.innerHTML = data.reviewPost[inner].date;
                }
            })
            
        .catch(function(error){
            console.log(error)
        })
    })
}
