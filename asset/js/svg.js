
var mouseStartPosition = {x: 0, y: 0};
var mousePosition = {x: 0, y: 0};
var viewboxStartPosition = {x: 0, y: 0};
var viewboxPosition = {x: 0, y: 0};
var viewboxSize = {x: 700, y: 1085.33};
var viewboxScale = 1.25;

var mouseDown = false;

bg_svg.addEventListener("mousemove", mousemove);
bg_svg.addEventListener("mousedown", mousedown);
bg_svg.addEventListener("wheel", wheel);

function mousedown(e) {
  mouseStartPosition.x = e.pageX;
  mouseStartPosition.y = e.pageY;

  viewboxStartPosition.x = viewboxPosition.x;
  viewboxStartPosition.y = viewboxPosition.y;

  window.addEventListener("mouseup", mouseup);

  mouseDown = true;
}

function setviewbox()
{
  var vp = {x: 0, y: 0};
  var vs = {x: 0, y: 0};
  
  vp.x = viewboxPosition.x;
  vp.y = 700 + viewboxPosition.y;
  
  vs.x = viewboxSize.x * viewboxScale;
  vs.y = viewboxSize.y * viewboxScale;

  bg_svg.setAttribute("viewBox", vp.x + " " + vp.y + " " + vs.x + " " + vs.y);
  if(vp.x <= 0){
    bg_svg.setAttribute("viewBox", 0 + " " + vp.y + " " + vs.x + " " + vs.y);
    viewboxPosition.x = 0;
  }
  if(vp.y <=0){
    bg_svg.setAttribute("viewBox", vp.x + " " + 0 + " " + vs.x + " " + vs.y);
    viewboxPosition.y = 0;
  }

  console.log(vp.x+' / '+ vp.y);
}

function mousemove(e)
{
  mousePosition.x = e.offsetX;
  mousePosition.y = e.offsetY;
  
//   console.log("X->"+mousePosition.x+" Y->"+mousePosition.y)''
  if (mouseDown)
  {
    viewboxPosition.x = viewboxStartPosition.x + (mouseStartPosition.x - e.pageX) * viewboxScale;
    viewboxPosition.y = viewboxStartPosition.y + (mouseStartPosition.y - e.pageY) * viewboxScale;

    setviewbox();
  }
  
  var mpos = {x: mousePosition.x * viewboxScale, y: mousePosition.y * viewboxScale};
  var vpos = {x: viewboxPosition.x, y: viewboxPosition.y};
  var cpos = {x: mpos.x + vpos.x, y: mpos.y + vpos.y}
}

function mouseup(e) {
  window.removeEventListener("mouseup", mouseup);
  
  mouseDown = false;
}

function wheel(e) {
  var scale = (e.deltaY < 0) ? 0.8 : 1.2;
  
  if ((viewboxScale * scale < 8.) && (viewboxScale * scale > 1./256.))
  {  
    var mpos = {x: mousePosition.x * viewboxScale, y: mousePosition.y * viewboxScale};
    var vpos = {x: viewboxPosition.x, y: viewboxPosition.y};
    var cpos = {x: mpos.x + vpos.x, y: mpos.y + vpos.y};

    viewboxPosition.x = (viewboxPosition.x - cpos.x) * scale + cpos.x;
    viewboxPosition.y = (viewboxPosition.y - cpos.y) * scale + cpos.y;
    viewboxScale *= scale;
  
    setviewbox();
  }
}
