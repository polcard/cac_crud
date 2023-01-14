
//Valida Formato Correo
function mailCorrecto(correo) {
  return /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(correo);
}

// levanto el a del link de whatssap 

var a_msj_wsp = document.getElementById('WSP')
function mensaje_wsp(){
  var nombre = document.getElementById("name");
  var mail = document.getElementById("exampleInputEmail1");
  var motivo = document.getElementById("exampleInputPassword1");
  var mensaje = document.getElementById("contenido");

  //console.log(nombre.value)

  if(nombre.value === ""){
    alert('Por favor, completa tu nombre');
    nombre.classList.add('is-invalid');
    nombre.focus();
    return;
  }else{
    nombre.classList.remove('is-invalid');
    nombre.classList.add('is-valid');
  }

  if(mail.value === ""){
    alert('Por favor, completa tu mail');
    mail.classList.add('is-invalid');
    mail.focus();
    return;
  }else if(!mailCorrecto(mail.value)){
    alert('El mail no tiene el formato correcto');
    mail.focus();
    return;
  }else{
    mail.classList.remove('is-invalid');
    mail.classList.add('is-valid');
  }

  if(motivo.value === ""){
    alert('Por favor, completa tu motivo');
    motivo.classList.add('is-invalid');
    motivo.focus();
    return;
  }else{
    motivo.classList.remove('is-invalid');
    motivo.classList.add('is-valid');
  }

  if(mensaje.value === ""){
    alert('Por favor, completa tu mensaje');
    mensaje.classList.add('is-invalid');
    mensaje.focus();
    return;
  }else{
    mensaje.classList.remove('is-invalid');
    mensaje.classList.add('is-valid');
  }


  var mensaje_final;
  mensaje_final ="Hola!,%20Mi%20Nombre%20es:%20" + nombre.value +",%20";
  mensaje_final = mensaje_final + "%20Mi%20Mail%20es:%20" + mail.value;
  mensaje_final = mensaje_final + ",%20El%20Motivo%20de%20mi%20contacto%20es%20" + motivo.value + ",%20";
  mensaje_final = mensaje_final + "%20mensaje%20:%20" + mensaje.value;
  var mensaje = "https://api.whatsapp.com/send?phone=+5491155124846&text="+mensaje_final;
  //Esto%20es%20una%20prueba
  a_msj_wsp.href = mensaje;
}

a_msj_wsp.addEventListener('click', mensaje_wsp);