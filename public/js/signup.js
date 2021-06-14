function validazione(event)
{   //verifica se le password inserite sono uguali
	if(form.password.value!==form.passwordDue.value){
    alert("Le password NON corrispondono.");	
    event.preventDefault();
    
}
    // Verifica se tutti i campi sono riempiti
    if(form.name.value.length == 0 ||
       form.surname.value.length == 0 ||
       form.email.value.length == 0 ||
       form.password.value.length == 0)
    {
        // Avvisa utente
        alert("Compilare tutti i campi.");
        // Blocca l'invio del form
        event.preventDefault();
    }
    //check JS su email
    if(form.email.value.indexOf('@') == -1)  
        {
        
        alert("Errore email");
        event.preventDefault();

        }

    if(form.password.value.length < 8){
        alert('Password troppo corta (Almeno 8 caratteri)');
        event.preventDefault();
    }
}

function jsonUsername(json){
    console.log(json);
    if(json.exists==true){
        alert("Username gia preso, scegline un altro");
        console.log(form.try);
        form.try.disable=true;
    }else{
        form.try.disable=false;
    }
}

function onResponse(response){
    if (!response.ok) return null;
    return response.json();
}

function check_username_database(event){
	//cerchiamo nel database il dato username inserito.
	console.log(usr.value);
    const formData=new FormData();
    formData.append('username',usr.value);
	fetch(CHECK_USER,{
        method:'post',
        body:formData,
        headers:{'X-CSRF-TOKEN':CSFR_TOKEN}
    }).then(onResponse).then(jsonUsername);
	
}

// Riferimento al form
const form = document.forms['nome_form'];
// Aggiungi listener
form.addEventListener('submit', validazione);
const usr=form.username;
usr.addEventListener('blur',check_username_database);