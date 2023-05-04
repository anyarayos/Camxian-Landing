//  Home PLDT Plans About Us FAQ 
// Navbar
const home = document.getElementById('home');
const pldtPlans = document.getElementById('pldtPlans');
const aboutUs = document.getElementById('aboutUs');
const faq = document.getElementById('faq');

// -------------------------------------------- NAVBAR

home.addEventListener('click', function() {
     window.location.href = "index.html";
  });
pldtPlans.addEventListener('click', function() {
//   window.location.href = "tracking.html";
});

aboutUs.addEventListener('click', function() {
  window.location.href = "about-us.html";
});

faq.addEventListener('click', function() {
  window.location.href = "faq.html";
});

// -------------------------------------------- SPAN & BUTTON

// SPAN ELEMENT
if(document.getElementById('securityAndPrivacy') != null){
  const securityAndPrivacy = document.getElementById('securityAndPrivacy');
  securityAndPrivacy.addEventListener('click', function() {
    window.location.href = "security-and-privacy.html";
  });
}

// TRACK BUTTON INDEX
if(document.getElementById('track-button') !=null){
  const trackbutton = document.getElementById('track-button');
  trackbutton.addEventListener('click', function() {
    window.location.href = "tracking.html";
  });
}

// -------------------------------------------- FOOTER 
// TODO: ADD Home PLDT Plans About Us FAQ 
const home_footer = document.getElementById('home_footer');
const pldtPlans_footer = document.getElementById('pldtPlans_footer');
const aboutUs_footer = document.getElementById('aboutUs_footer');
const faq_footer = document.getElementById('faq_footer');
const securityPrivacy_footer = document.getElementById('securityPrivacy_footer');

home_footer.addEventListener('click', function() {
  window.location.href = "index.html";
});

pldtPlans_footer.addEventListener('click', function() {
  window.location.href = "pldtplans.html";
});

aboutUs_footer.addEventListener('click', function() {
  window.location.href = "about-us.html";
});

faq_footer.addEventListener('click', function() {
  window.location.href = "faq.html";
});

securityPrivacy_footer.addEventListener('click', function() {
  window.location.href = "security-and-privacy.html";
});
