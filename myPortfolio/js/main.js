document.querySelector('.nav-menu').addEventListener('click', manageNav);

var side = document.querySelector('#side-menu');
var sv = document.querySelector('#my-svg');
var t1 = document.querySelector('.test1');
var t2 = document.querySelector('.test2');


 function manageNav(){
    this.classList.toggle('rotation');
    side.classList.toggle('sideNav');
    t1.classList.toggle('_test1');
    t2.classList.toggle('_test2');
    sv.classList.toggle('_svg');
}
