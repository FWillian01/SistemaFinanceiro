function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);
    modal.classList.add('mostrar');
    modal.addEventListener('click', (e) => {
        if(e.target.id == modalID || e.target.className == 'fechar') {
            modal.classList.remove('mostrar');
        }
    });
}

// iniciaModal('modal-conf');

const title = document.querySelector('.title');
title.addEventListener('click', () => iniciaModal('modal-conf'));

