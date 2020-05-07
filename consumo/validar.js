//login para la firebase
var provider = new firebase.auth.GoogleAuthProvider();
$( "#validar" ).click(login());
function login (){
    firebase.lauth().signInWithPopup(provider).then(function(result) {
        console.log(result);
        alert('la fncion se ejecuto con exito');
      })
}
