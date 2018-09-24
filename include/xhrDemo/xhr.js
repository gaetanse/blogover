// JavaScript Document

// Méthode générique retournant un objet XMLHttpRequest
function goXHR() {
 var xhr = null; 

 if (window.XMLHttpRequest) { // Autres navigateurs
  xhr = new XMLHttpRequest(); 
 } else {
    if (window.ActiveXObject) { // Internet Explorer 
     try {
      xhr = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (e) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
      }
    } else { // XMLHttpRequest non supporté par le navigateur 
       alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
       xhr = false; 
     }
  } 
 return xhr;
}

// Méthode générique pour un retour via XMLHttpRequest 
function requeteXHR() {
 // Récupération d'un objet XMLHttpRequest
 var xhr = goXHR();

 // Traitement une fois la réponse obtenue
 xhr.onreadystatechange = function() {
  // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
  if (xhr.readyState==4) {
   if (xhr.status==200) {
    // Retour du print du script PHP 
    reponse = xhr.responseText;
    alert(reponse);
   } else {
      alert(xhr.status);   
    } 
  }
 }
 
 // Envoi de la requête par GET sans données
 xhr.open("GET","./xhr.php",true);
 xhr.send(null);
}
			
// Méthode générique pour un retour via XMLHttpRequest avec un transfert de données par GET 
function requeteGetXHR() {
 // Récupération de la valeur du formulaire
 var info = document.getElementById('info0').value;
 // Récupération d'un objet XMLHttpRequest 
 var xhr = goXHR();

 // Traitement une fois la réponse obtenue
 xhr.onreadystatechange = function() {
  if (xhr.readyState==4) {
   if (xhr.status==200) {
    // Retour du print du script PHP       
    reponse = xhr.responseText;
    // On se sert de innerHTML pour changer le contenu dans le formulaire
    document.getElementById('resultatGET').innerHTML = reponse;
   } else {
      alert(xhr.status);   
    } 
  }
 }

 // Envoi de la requête par GET avec données 
 xhr.open("GET","./xhrGET.php?info="+info,true);
 xhr.send(null);
}

// Méthode générique pour un retour via XMLHttpRequest avec un transfert de données par POST
function requetePostXHR(nomScript) {
 // Récupération des valeurs du formulaire avec utilisation (optionnelle) d'un tableau
 var tab = new Array();
 tab[0] = document.getElementById('info1').value;
 tab[1] = document.getElementById('info2').value;
 tab[2] = document.getElementById('info3').value;
 // Récupération d'un objet XMLHttpRequest  
 var xhr = goXHR();

 // Traitement une fois la réponse obtenue
 xhr.onreadystatechange = function() {
  if (xhr.readyState== 4) {
   if (xhr.status==200) {
    // Retour du print du script PHP  
    reponse = xhr.responseText;
    // On se sert de innerHTML pour changer le contenu dans le formulaire    
    document.getElementById('resultatPOST').innerHTML = reponse;
   } else {
      alert(xhr.status);   
    } 
  }
 }

 // Envoi de la requête par POST avec données 	
 xhr.open("POST","./"+nomScript+".php",true);
 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 xhr.send("tab0="+tab[0]+"&tab1="+tab[1]+"&tab2="+tab[2]);
}
