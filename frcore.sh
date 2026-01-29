git submodule update --init --recursive
git pull --recurse-submodules


java -jar input-cache/publisher.jar -go-publish -source /Users/nicolasriss/Desktop/ig-is/1.Projet-FRCore/hl7.fhir.fr.core  -web  /Library/WebServer/Documents/InteropSante/IG-website-release/www/ig/fhir -registry /Library/WebServer/Documents/InteropSante/IG-website-release/ig-registry/fhir-ig-list.json -history /Library/WebServer/Documents/InteropSante/IG-website-release/ig-history -templates /Library/WebServer/Documents/InteropSante/IG-website-release/templates -temp /Library/WebServer/Documents/tmp
