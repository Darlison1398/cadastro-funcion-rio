
function direcionar(){
    var id = window.document.getElementById('id').value;
    var equipamento = window.document.getElementById('equipamento').value;
    var dataCadastro = window.document.getElementById('data_cadastro').value;
    var cliente = window.document.getElementById('cliente').value;
    var tecInstalador = window.document.getElementById('tecnico_instalador').value;
    var observacao = window.document.getElementById('observations').value;

    if (id != "" || equipamento != "" || dataCadastro != "" || cliente != "" || tecInstalador != "" || observacao != ""){
        alert("Equipamento cadastrado com sucesso!");
    } else{
        alert("Insira o restante dos dados");
    }
}

function confirmDelete(itemId){
    var confirmDelete = confirm("Tem certeza que deseja excluir o item com oo ID " + itemId + "?");
    if (confirm){
        window.location.href = "config/delete.php?id=" + itemId;
    }
}