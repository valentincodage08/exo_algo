function validerform() {
    var myField = document.getElementById('myField');
    var erreurLabel = document.getElementById('erreurlabel');

    if(myField.value == "") {
        erreurLabel.innerHTML = 'Veuillez remplir le champ';
        return false;
    } else {
        erreurLabel.innerHTML = 'Requete envoyee';
        return false;
    }
}
