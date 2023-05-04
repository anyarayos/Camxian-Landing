const home = document.getElementById('home');
const pldtPlan = document.getElementById('pldtPlan');
const pldtEnterprise = document.getElementById('pldtEnterprise');
const aboutUs = document.getElementById('aboutUs');
const support = document.getElementById('support');
const updates = document.getElementById('updates');
const tracking = document.getElementById('tracking');
// TODO:
const contactUs = document.getElementById('contactUs');
const termsConditions = document.getElementById('termsConditions');
const securityPrivacy = document.getElementById('securityPrivacy');

home.addEventListener('click', function() {
     window.location.href = "index.html";
  });
pldtPlan.addEventListener('click', function() {
//   window.location.href = "tracking.html";
});
pldtEnterprise.addEventListener('click', function() {
    // window.location.href = "tracking.html";
  });
aboutUs.addEventListener('click', function() {
  window.location.href = "about-us.html";
});
support.addEventListener('click', function() {
    window.location.href = "support.html";
  });
updates.addEventListener('click', function() {
//   window.location.href = "tracking.html";
});

if(document.getElementById('track-button') !=null){
  const trackbutton = document.getElementById('track-button');
  trackbutton.addEventListener('click', function() {
    window.location.href = "tracking.html";
  });
}

tracking.addEventListener('click', function() {
  window.location.href = "tracking.html";
});

// --------------------------------------------
if(document.getElementById('securityAndPrivacy') != null){
  const termsAndConditions = document.getElementById('termsAndConditions');
  termsAndConditions .addEventListener('click', function() {
    window.location.href = "terms-and-conditions.html";
  });
  const securityAndPrivacy = document.getElementById('securityAndPrivacy');
securityAndPrivacy.addEventListener('click', function() {
  window.location.href = "security-and-privacy.html";
});
}


termsConditions.addEventListener('click', function() {
    window.location.href = "terms-and-conditions.html";
  });
  
  securityPrivacy.addEventListener('click', function() {
    window.location.href = "security-and-privacy.html";
  });