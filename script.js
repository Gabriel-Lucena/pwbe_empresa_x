const newButton = document.getElementById("add__new");
const cancelButton = document.getElementById("cancel");
const sendButton = document.getElementById("send");
const modal = document.getElementById("container__modal");
const modalBackground = document.getElementById("bg");

const buttonSim = document.getElementById("buttonSim");
const buttonNao = document.getElementById("buttonNao");
const modalExcluir = document.getElementById("modalExcluir");
const buttonExcluir = document.getElementById("excluir");

newButton.addEventListener("click", openNewModal);
cancelButton.addEventListener("click", closeNewModal);
buttonExcluir.addEventListener("click", abrirModalExcluir);
buttonNao.addEventListener("click", fecharModalExcluir);

function openNewModal() {
  modal.style.display = "flex";
}

function closeNewModal() {
  modal.style.display = "none";
}

function abrirModalExcluir() {
  modalExcluir.style.display = "flex";
}

function fecharModalExcluir() {
  modalExcluir.style.display = "none";
}
