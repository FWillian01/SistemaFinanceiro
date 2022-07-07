









const list = document.querySelectorAll('.sidenav-list');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
}
    list.forEach((item) =>
    item.addEventListener('click', activeLink));

const menuButton = document.querySelector('[data-menu="button"]');
const List = document.querySelector('[data-menu="list"]');

function abrirConf() {
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');

}

menuButton.addEventListener('click', abrirConf);


