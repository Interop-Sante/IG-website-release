<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.0.1/ValueSet-fr-core-vs-patient-gender-INS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.0.1/ValueSet-fr-core-vs-patient-gender-INS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.0.1/ValueSet-fr-core-vs-patient-gender-INS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.0.1/ValueSet-fr-core-vs-patient-gender-INS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.0.1/ValueSet-fr-core-vs-patient-gender-INS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.0.1/ValueSet-fr-core-vs-patient-gender-INS.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/2.0.1/ValueSet-fr-core-vs-patient-gender-INS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
