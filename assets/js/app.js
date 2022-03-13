
var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");


btnSignin.addEventListener("click", function () {
   body.className = "sign-in-js"; 
});

btnSignup.addEventListener("click", function () {
    body.className = "sign-up-js";
})

var suap = new SuapClient(SUAP_URL, CLIENT_ID, REDIRECT_URI, SCOPE);
suap.init();
$("#suap-login-button").attr("href", suap.getLoginURL());
var logoff = $("#logoff").val();

if (logoff == "S" && suap.isAuthenticated()){
    suap.logout();
}

if (suap.isAuthenticated()){
    var escopos = suap.getToken().getScope();
    suap.getResource(escopos, respostaSUAP);
}

function respostaSUAP(dados){
    $.ajax({
        url: BASE_URL+"/login/index",
        method: "post",
        data: {
            tipo_login: "api",
            nome: dados.identificacao,
            login: dados.email,
            foto: ""
        },
        dataType: 'json'
    }).done(function(){
        window.location.href=BASE_URL;
    })};
