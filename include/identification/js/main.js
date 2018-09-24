// JavaScript Document

// Fonction de création d'un objet XHR
function goXHR() {
 var xhr = null;

 if (window.XMLHttpRequest) {
  xhr = new XMLHttpRequest();
 } else {
    if (window.ActiveXObject) {
     try {
      xhr = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (e) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
      }
    } else {
       alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
       xhr = false;
     }
  }
 return xhr;
}

// Fonction traitant de la connexion
function infos() {
 var login = document.getElementById('login').value;
 var lcode = document.getElementById('lcode').value;

 var xhr = goXHR();
 var reponse = "";

 xhr.onreadystatechange = function() {
  if (xhr.readyState=== 4) {
   if (xhr.status===200) {
    reponse = xhr.responseText;
    document.location.href="./";
   } else { alert(xhr.status); }
  }
 }

 xhr.open("POST","./core/session.php",true);
 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 xhr.send("login="+login+"&lcode="+lcode);
}

// Fonction de concaténation du code
function leCode(v) {
  var c = document.getElementById('lcode').value;
  c = c + "" + v;
  document.getElementById('lcode').value = c;
}
