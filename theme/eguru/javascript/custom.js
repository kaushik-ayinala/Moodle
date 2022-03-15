// code to reverse the nav-drawer menu item
const navBar = document.getElementById('nav-drawer');
const arr = Array.from(navBar.childNodes);
arr.reverse();
navBar.append(...arr);

//adding spacing between navs in navbar
var children = navBar.children;
for (var i = 0; i < children.length; i++) {
  children[i].style.paddingBottom="10px";  
}

 
//rename Grades with progress
var innerTemp = navBar.innerHTML;
innerTemp = innerTemp.replace("Grades","Progress");
navBar.innerHTML=innerTemp;

innerTemp=document.getElementById('page-navbar').innerHTML;
innerTemp = innerTemp.replace("Grades","Progress");
innerTemp = innerTemp.replace("Grade administration","Progress administration");
document.getElementById('page-navbar').innerHTML=innerTemp;

innerTemp=document.getElementById('itemname').innerHTML;
innerTemp = innerTemp.replace("Grade item","Progress item");
document.getElementById('itemname').innerHTML=innerTemp;

innerTemp=document.getElementById('grade').innerHTML;
innerTemp = innerTemp.replace("Grade","Score");
document.getElementById('grade').innerHTML=innerTemp;
