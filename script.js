const newButton = document.getElementById('add__new');
const cancelButton = document.getElementById('cancel');
const sendButton = document.getElementById('send');
const modal = document.getElementById('container__modal');
const modalBackground = document.getElementById('bg');

newButton.addEventListener('click', openNewModal);
cancelButton.addEventListener('click', closeNewModal);
modalBackground.addEventListener('click', closeNewModal);

function openNewModal() {
  modal.style.display = 'flex';
}

function closeNewModal() {
  modal.style.display = 'none';
}