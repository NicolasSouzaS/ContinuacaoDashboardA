


//  aqui eu criei para a palavra "website" do sobre ficar escrevendo sozinho


// aqui eu criei para quando clicar no link do cookies a div sumir
const linksCookies = document.getElementsByClassName('linksCookies');
const cookies = document.getElementsByClassName('cookies')[0];

for (let i = 0; i < linksCookies.length; i++) {
  linksCookies[i].addEventListener('click', function(event) {
    event.preventDefault(); 

    if (cookies.style.display === 'none') {
      cookies.style.display = 'block';
    } else {
      cookies.style.display = 'none';
    }
  });
};

// aqui é para dar uma função ao clicar no menu mobile
document.querySelector(".menu-abrir").onclick = function () {
  document.documentElement.classList.add("menu-ativo");
}

document.querySelector(".menu-fechar").onclick = function () {
  document.documentElement.classList.remove("menu-ativo")
}

// carrosel serviços realizados
$('.slide-servRealizados').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  dots: true,
  autoplaySpeed: 3000,
});

$('.slide-avaliacoes').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
});

$('.slide-blog').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.slide-servRealizados').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});


document.getElementById("abrir").onclick = ()=>{
  document.querySelector(".menu").style.display = "block"

}



document.getElementById("fechar").onclick = ()=>{
  document.querySelector(".menu").style.display = "none"

}


document.getElementById("projetos").style.display = "none"

document.getElementById("projeto-tipi").onclick = ()=>{
document.getElementById("projetos").style.display = "block"
document.getElementById("projetos").style.display = "flex"

  
}


function enviarEmail() {
  let txtnome = document.getElementById("nome").value;
  let txtemail = document.getElementById("email").value;
  let txtassunto = document.getElementById("objetivo").value;
  let txttelefone = document.getElementById("telefone").value;

  var params = {
      
      from_name: txtnome,
      from_email: txtemail,
      subject: txtassunto,
      message: document.getElementById("objetivo").value
    };
  
    let serviceID = "service_83tyg09";
    let templateID = "template_sp08jzp";
      emailjs.send(serviceID, templateID, params).then(
        function (response) {
          console.log("E-mail enviado com sucesso!", response);
        },
        function (error) {
          console.error("Erro ao enviar o e-mail:", error);
        }
      );
}