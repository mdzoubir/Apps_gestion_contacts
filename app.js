// --------------------cree post
var cree = document.getElementById('pre');
cree.addEventListener("click", creepost);
function creepost(){
    document.getElementById('cree').style.display='block';
    document.getElementById('editpost').style.display='none';
    document.getElementById('deletepost').style.display='none';
}


// ------------------edit post
var edit = document.getElementById('edit');
edit.addEventListener("click", editpost);
function editpost(){
    document.getElementById('cree').style.display='none';
    document.getElementById('editpost').style.display='block';
    document.getElementById('deletepost').style.display='none';
}


// ------------------delete post
var mod = document.getElementById('delete');
mod.addEventListener("click", deletepost);
function deletepost(){
    document.getElementById('cree').style.display='none';
    document.getElementById('editpost').style.display='none';
    document.getElementById('deletepost').style.display='block';
}
