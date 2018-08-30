var textItems = [];
for(var i=0;i<3;i++){
    textItems[i]=document.getElementById("text-"+i);
}
function textMove(e){
    x = e.clientX;
    y = e.clientY;
    textItems[0].style.top = y/250+2+"rem";
    textItems[0].style.right = x/300+"rem";
    textItems[1].style.top = y/400+2+"rem";
    textItems[1].style.right = x/300+"rem";
    textItems[2].style.top = y/-750+4+"rem";
    textItems[2].style.right = x/-450+3+"rem";
};