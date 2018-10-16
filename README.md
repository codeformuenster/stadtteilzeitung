# Stadtteilzeitung
"Eine Zeitung für Münsters Stadtteile" - Ein Münsterhack 2018 Projekt 

## Ergebnisse

Design-Entwürfe für die Eingabeformulare befinden sich hier: 

* https://codeformuenster.org/stadtteilzeitung/forms/index.html - Startseite
* https://codeformuenster.org/stadtteilzeitung/forms/district1.html - Ausgabe wählen
* https://codeformuenster.org/stadtteilzeitung/forms/login.html - Loginformular
* https://codeformuenster.org/stadtteilzeitung/forms/kurzartikel.html - Eingabeformular für kurze Artikel
* https://codeformuenster.org/stadtteilzeitung/forms/langartikel.html - Eingabeformular für lange Artikel
* https://codeformuenster.org/stadtteilzeitung/forms/generator.html - Button zum Publizieren der Zeitung


Stadtteilzeitungs-Ausgabe

* Pdf Dateien der Testversion unserer Stadtteilzeitung befinden sich hier: https://github.com/codeformuenster/stadtteilzeitung/tree/master/pdf

Content-Management-System zum Managen einer Zeitungs-Ausgabe
* Das Content Management-System ist derzeit nicht aktiv, sie können es lokal auf ihrem Computer starten, indem sie Docker-Compose nutzen. Anleitung siehe unten.


# Content Management System

## Installation

Folgendes auf der Konsole ausführen:
```
docker-compose up
```

## Starten
Im Browser folgende Seite öffnen: http://localhost
Login: user / bitnami


# HintergrundInformationen

## Debugging
```
docker-compose up
```

# Ideas for input form designs
https://colorlib.com/wp/free-html5-contact-form-templates/

Best choices:
 * https://colorlib.com/etc/cf/ContactFrom_v1/index.html
 * https://colorlib.com/etc/cf/ContactFrom_v15/index.html
 * https://colorlib.com/etc/cf/ContactFrom_v19/index.html

# Links
* http://localhost/2018/?print=pdf-search => PDF view

# Project overview

Wordpress Docker Varianten
* wordpress-bitnami => looks good! => https://hub.docker.com/r/bitnami/wordpress/
* wordpress-library => nope! => This installation does not support installing extensions via zip files :(

Wordpress PDF Plugins
* "Make PDF Newsletter" => :( no longer maintained => https://wordpress.org/plugins/make-pdf-newspaper/
* PDF & Print by BestWebSoft 

