document.addEventListener("DOMContentLoaded", init);

function init() {
  cookies();
  createDot();
  addDataImages();
  dot(1);
  myImage(pic1);
  attachClickOnImages();
  initCollapseButton();
  // displayInfo();
  // displayTagCookies();
}

function cookies(event){
  cookieChoices.showCookieConsentBar("Nous diffusons des cookies afin d'analyser le trafic sur ce site. Les informations concernant l'utilisation que vous faites de notre site nous sont transmises dans cette optique.", "J’accepte", "En savoir plus", "https://carlindusdesign.fr/ADDcom/index.html#pol-conf");
}

// fonction pour l'animation
function anim() {
  document.getElementById('animHome').style.overflowY = 'scroll';
}

//fonction pour le menu Burger
function openMenu() {
  document.getElementById("menuGal").style.left = "0";
  document.getElementById("menuGalBurger").classList.toggle('hide');
  document.getElementById("menuGalCross").classList.toggle('hide');
}

function closeMenu() {
  document.getElementById("menuGal").style.left = "-100%";
  document.getElementById("menuGalCross").classList.toggle('hide');
  document.getElementById("menuGalBurger").classList.toggle('hide');
}


function initCollapseButton(){
  var inactiveButtons = document.querySelectorAll(".buttonCollapse");
  inactiveButtons.forEach(function(inactiveButton){
    inactiveButton.addEventListener("click", displayCollapseElement);
  })
}

function displayCollapseElement (event){
  event.preventDefault();
  console.log(this);
  var targetID = this.getAttribute("data-target")
  document.getElementById(targetID).classList.toggle("inactive");

}

// fonctions pour la galerie
// fonction pour afficher les images à partir des thumbnails
function attachClickOnImages() {
  var images = document.querySelectorAll("#navGal img");
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      myImage(image);
    })
    image.addEventListener('dblclick', function(){
      myImage(image);
      displayPopupImage(image);
    })
  })
}

function myImage(imgs) {
  var expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.getAttribute('data-expand-image');
  var imageIndex = imgs.getAttribute("data-imageIndex");
  expandImg.setAttribute("data-imageIndex", imageIndex);
}

// calcul du nombre d'images et de points //
function createDot() {
  var images = document.querySelectorAll("#navGal img");
  var nbDots = Math.ceil(images.length / 6);
  for (var i = 1; i < nbDots + 1; i++) {
    var divDot = document.createElement("div");
    document.getElementById("dotContainer").append(divDot);
    divDot.setAttribute("id", "dot" + i);
    divDot.classList.add("dot");
    divDot.setAttribute("data-dot", i);
    divDot.addEventListener('click', function() {
      var index = this.getAttribute("data-dot");
      dot(index);
    })
  }
}

// fonctions pour faire bouger la galerie et mettre les points de navigation
function dot(index) {
  if (window.matchMedia("(max-width: 480px)").matches) {
    document.getElementById('navGal').style.left = ((index - 1) * -330) + "px";
  } else if (window.matchMedia("(max-width: 960px)").matches) {
    document.getElementById('navGal').style.left = ((index - 1) * -480) + "px";
  } else {
    document.getElementById('navGal').style.left = (index - 1) * -22 + "vw";
  };
  var dots = document.querySelectorAll(".dot");
  dots.forEach(function(dot) {
    dot.classList.remove('dotFull');
  })
  document.getElementById("dot" + index).classList.add('dotFull');
};

function addDataImages() {
  var images = document.querySelectorAll("#navGal img");
  for (var i = 0; i < images.length; i++) {
    images[i].setAttribute("data-imageIndex", i);
  }
};

// Créer une div fullscreen //
function displayPopupImage(image) {
  var popup = document.createElement("div");
  popup.classList.add("popupFullscreen", "centerFlex");
  // Créer un conteneur pour l'image & lui donner l'attribut de l'image //
  var popupFigure = document.createElement("figure");
  var imageIndex = parseInt(image.getAttribute("data-imageIndex"));
  popupFigure.setAttribute("data-imageIndex", imageIndex);
  popup.append(popupFigure);
  popupFigure.style.background = 'url(' + image.src + ') no-repeat center fixed';
  popupFigure.style.backgroundSize = 'contain';
  // intégrer le popup dans le document //
  var body = document.querySelector("body");
  body.append(popup);
  // lancer les fonctions de création de boutons //
  addCloseButton(popup);
  addNavigationArrows(popup, imageIndex, popupFigure);
}


// fonction de création de bouton //
function addCloseButton(element) {
  var closeButton = document.createElement("button");
  closeButton.classList.add("closeButton");
  closeButton.insertAdjacentText('afterbegin', 'Réduire');
  element.append(closeButton);
  // donner la fonction close au bouton //
  closeButton.addEventListener('click', function() {
    closePopup(element);
  })
}
// définir la fonction close = suppression du popup //
function closePopup(popup) {
  popup.parentNode.removeChild(popup);
}


// création des flèches de navigation
function addNavigationArrows(element, imageIndex, popupFigure) {
  var prevButton = document.createElement("div");
  prevButton.classList.add("prevButton");
  element.append(prevButton);
  var nextButton = document.createElement("div");
  nextButton.classList.add("nextButton");
  element.append(nextButton);

  //fonction des boutons de navigation
  var images = document.querySelectorAll("#navGal img");
  var nbreImages = images.length;

  nextButton.addEventListener('click', function() {
    if (nextButton.classList.contains("buttonInactive") == false) {
      if (++imageIndex < nbreImages) {
        prevButton.classList.remove("buttonInactive");
        var nextImage = document.querySelector("#navGal img[data-imageIndex='" + imageIndex + "']");
        var nextImgSrc = nextImage.getAttribute("data-expand-image");
        popupFigure.style.backgroundImage = 'url(' + nextImgSrc + ')';
        if (imageIndex == nbreImages - 1) {
          nextButton.classList.add("buttonInactive");
        }
      }
    }
  })
  prevButton.addEventListener('click', function() {
    if (prevButton.classList.contains("buttonInactive") == false) {
      if (--imageIndex >= 0) {
        nextButton.classList.remove("buttonInactive");
        var prevImage = document.querySelector("#navGal img[data-imageIndex='" + imageIndex + "']");
        var prevImgSrc = prevImage.getAttribute("data-expand-image");
        popupFigure.style.backgroundImage = 'url(' + prevImgSrc + ')';
        if (imageIndex == 0) {
          prevButton.classList.add("buttonInactive");
        }
      }
    }
  })
}
