/* -----------------------VAR FORMS------------------ */
//var formClientExistant = document.getElementById('clientExistant');
var formSituationPro = document.getElementById('formSituationPro');
var formClientPhysique = document.getElementById('clientPhysique');
var formClientEntreprise = document.getElementById('clientEntreprise');
var allforms = document.getElementById('allForms');

var boutonsClient = document.getElementById('boutons_formClient');

// /* -------CLIENT EXISTANT------- */

// var choix_client_existant = document.getElementById('Existant');
// choix_client_existant.addEventListener('click',afficher_client_existant);

// var recherche_par_id = document.getElementById('searchById');
// recherche_par_id.addEventListener('click',afficher_searchboxID);

// var inputForId = document.getElementById('byId');

// var recherche_par_compte = document.getElementById('searchByAccount');
// recherche_par_compte.addEventListener('click',afficher_searchboxAccount);

// var inputForAccount = document.getElementById('byAccount');


/* -------CLIENT PHYSIQUE------- */

var choix_client_physique = document.getElementById('choixPhysique');
choix_client_physique.addEventListener('click',afficher_client_physique);

/* ---SALARIE --- */

var client_salarie = document.getElementById('clientSalarie');
client_salarie.addEventListener('click',afficher_form_salarie);

var formClientPhysique = document.getElementById('clientPhysique');
var labelProfession = document.getElementById('labelProfession');
var inputProfession = document.getElementById('profession');

/* ----- NON SALARIE ------- */

var client_non_salarie = document.getElementById('clientNonSalarie');
client_non_salarie.addEventListener('click',afficher_form_non_salarie);


var labelSalaire = document.getElementById('labelSalaire');
var inputSalaire = document.getElementById('salaire');
var labelEmployeur = document.getElementById('labelEmployeur');
var inputInfosEmployeur = document.getElementById('infos_emp');

/* -------CLIENT ENTREPRISE------- */
var choix_client_entreprise = document.getElementById('choixEntreprise');
choix_client_entreprise.addEventListener('click',afficher_client_entreprise);

/* -----------------------VAR CHAMPS------------------ */
var enregistrerClient = document.getElementById('submitClient');
enregistrerClient.addEventListener('click', check_entrees_client);

var annuler = document.getElementById('reset');
annuler.addEventListener('click', refresh);

var nom_client_physique = document.getElementById("nom_client_physique");
    var nom_client_entreprise = document.getElementById("nom_client_entreprise");
    var nom_m = document.getElementById('name_error');

    var prenom_client_physique = document.getElementById("prenom");
    var prenom_m = document.getElementById('firstname_error');

    var adresse_client_physique = document.getElementById('adresse_client_physique');
    var adresse_client_entreprise = document.getElementById('adresse_client_entreprise');
    var adresse_m = document.getElementById('adress_error');

    var tel_client_physique = document.getElementById('tel_client_physique');
    var tel_client_entreprise = document.getElementById('tel_client_entreprise');
    var tel_m = document.getElementById('tel_error');

    var telformat = /^\d{10}$/;

    var email_client_physique = document.getElementById("email_client_physique");
    var email_client_entreprise = document.getElementById("email_client_entreprise");
    var email_m = document.getElementById('email_error');

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var salaire = document.getElementById("salaire");
    var salaire_m = document.getElementById('salary_error');

    var id = document.getElementById("id_client_physique");
    var id_m = document.getElementById("id_error");

    var ninea = document.getElementById('ninea');
    var ninea_m = document.getElementById('ninea_error');

    var regisCommerce = document.getElementById('regiscommerce');
    var regisCommerce_m = document.getElementById('regiscom_error');

    /* -------CLIENT PHYSIQUE------- */

function afficher_client_physique(e){
    e.preventDefault();
    formSituationPro.style.display = 'block';
    formClientEntreprise.style.display = 'none';
    formClientPhysique.style.display = 'none';
    formCompteBloque.style.display = 'none';
    formCompteEpargne.style.display = 'none';
    formCompteCourant.style.display = 'none';
    boutonsClient.style.display = 'none';
}


function afficher_form_salarie(e){
    e.preventDefault();
    labelProfession.style.display = 'none';
    inputProfession.style.display = 'none';
    formClientPhysique.style.display = 'block';
    labelSalaire.style.display = 'block';
    inputSalaire.style.display = 'block';
    labelEmployeur.style.display = 'block';
    inputInfosEmployeur.style.display = 'block';
    boutonsClient.style.display = 'block';
    formClientEntreprise.style.display = 'none';
}


function afficher_form_non_salarie(e){
    e.preventDefault();
    formClientPhysique.style.display ='block';
    labelProfession.style.display = 'block';
    inputProfession.style.display = 'block';
    boutonsClient.style.display = 'block';
    labelSalaire.style.display = 'none';
    inputSalaire.style.display = 'none';
    labelEmployeur.style.display = 'none';
    inputInfosEmployeur.style.display = 'none';
}


/* -------CLIENT ENTREPRISE------- */

function afficher_client_entreprise(e){
    e.preventDefault();
    formClientEntreprise.style.display = 'block';
    boutonsClient.style.display = 'block';
    formSituationPro.style.display = 'none';
    formClientPhysique.style.display = 'none';
}

function check_entrees_client(e) {
        
    if (!nom_client_physique.value || nom_client_physique.length < 3 || nom_client_physique[0] === '') { 
        e.preventDefault();
            nom_m.textContent ='renseignez le  nom';
            nom_m.style.color ='red';            
    }

    else if (!nom_client_entreprise.value || nom_client_entreprise.length < 3 || nom_client_entreprise[0] === '') { 
        e.preventDefault();
            nom_m.textContent ='renseignez le  nom';
            nom_m.style.color ='red';            
    }

    else if (!prenom_client_physique.value || prenom_client_physique.length < 3 || prenom_client_physique[0] === '') {
        e.preventDefault();
            prenom_m.textContent ='renseignez le  prenom';
            prenom_m.style.color ='red';
        }
       
    else if (!adresse_client_physique.value || adresse_client_physique[0] === '') {
        e.preventDefault();
            adresse_m.textContent ='renseignez l\'adresse';
            adresse_m.style.color ='red';
    }

    else if (!adresse_client_entreprise.value || adresse_client_entreprise[0] === '') {
        e.preventDefault();
            adresse_m.textContent ='renseignez l\'adresse';
            adresse_m.style.color ='red';
    }

    else if (!email_client_physique.value.match(mailformat)) {
        e.preventDefault();
            email_m.textContent ='renseignez le  bon mail';
            email_m.style.color ='red';
    }

    else if (!email_client_entreprise.value.match(mailformat)) {
        e.preventDefault();
            email_m.textContent ='renseignez le  bon mail';
            email_m.style.color ='red';
    }
        
    else if (!tel_client_physique.value || tel_client_entreprise.length < 9 || tel_client_entreprise.length > 10) {
        e.preventDefault();
            tel_m.textContent ='renseignez le  telephone';
            tel_m.style.color ='red';
    }

    else if (!tel_client_entreprise.value || tel_client_entreprise.length < 9 || tel_client_entreprise.length > 10) {
        e.preventDefault();
            tel_m.textContent ='renseignez le  telephone';
            tel_m.style.color ='red';
    }

    else if (!salaire.value || salaire[0] === ' ' || salaire.length > 12) {
        e.preventDefault();
            salaire_m.textContent ='renseignez le  salaire';
            salaire_m.style.color ='red';
    }
       
    else if (!id.value || id[0] === ' ' || id.length < 10) {
        e.preventDefault();
            id_m.textContent ='renseignez le bon identifiant';
            id_m.style.color ='red';
        }

    else if (!numeroCompte.value || numeroCompte[0] === ' ' || numeroCompte.length < 6) {
        e.preventDefault();
            numeroCompte_m.textContent ='renseignez un numero de compte valide';
            numeroCompte_m.style.color ='red';
    }

    else if (!ninea.value || ninea[0] == ' ' || ninea.length < 10 ) {
        e.preventDefault();
            ninea_m.textContent ='renseignez un ninea valide';
            ninea_m.style.color ='red';
    }

    else if (!regisCommerce.value || regisCommerce.length < 10){
        e.preventDefault();
            regisCommerce_m.textContent = 'renseignez un registre valide';
            regisCommerce_m.style.color = 'red';
    }

    else {
        window.alert('Formulaire envoyé !');
    }
}

function refresh(e) {
    e.preventDefault();
    location.reload();
}
