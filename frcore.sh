git submodule update --init --recursive

sudo java -Dfile.encoding=UTF-8 -jar input-cache/publisher.jar -go-publish  -source /Users/nicolasriss/Desktop/fr-ig/hl7.fhir.fr.core  -web  /Library/WebServer/Documents/InteropSante/IG-website-release/www/ig/fhir -registry /Library/WebServer/Documents/InteropSante/IG-website-release/ig-registry/fhir-ig-list.json -history /Library/WebServer/Documents/InteropSante/IG-website-release/ig-history -templates /Library/WebServer/Documents/InteropSante/IG-website-release/templates -temp /Library/WebServer/Documents/tmp
