//問1
function circle(r){
    return "半径"+r+"cmの円の面積は"+(r*r*3.14)+"㎠です。<br>";
}

document.write(circle(5));
document.write(circle(7));
document.write(circle(10));

document.write("<br>");

//問2
function totalprice(group,adult,child){
    return group+"グループの合計金額は"+(adult*500+child*200)+"円です。"+"<br>";
}

document.write(totalprice("A",2,4));
document.write(totalprice("B",1,5));
document.write(totalprice("C",3,7));