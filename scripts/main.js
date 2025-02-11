// Mudar o Hamburger para X no menu

var icon = document.querySelector(".navbar-toggler-icon")
function mudar(){icon.classList.toggle("troca")}

// Scroll Para o Main
var rolar = document.querySelector(".rolar");
rolar.scrollIntoView();

// Scroll Para o Menu na HomePage
function abrirMenu(){setTimeout(function(){document.querySelector("#menu_emp").click();}, 600);}

// Go Back para os Destaques
function voltar(){history.back();}