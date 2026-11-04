# Portfolio von Janna Syrina Stutz
> Eigenes WordPress-Theme für das Modul Interaktive Medien 5 (IM5, HS26) im Studiengang Multimedia Production. Das Theme basiert auf dem IM5-Starter-Theme von Lea Moser.

## Projektidee
Ein Portfolio, das meine Arbeiten aus Video, Foto, Grafik, Event, Podcast und Social Media zeigt. Die Projekte lassen sich im WordPress-Backend pflegen und auf der Startseite nach Kategorie filtern. Handgeschriebene Titel und handgezeichnete Farb-Bubbles geben jeder Seite eine eigene Farbwelt. In einem nächsten Schritt kommen Scrollytelling-Elemente dazu.

## Funktionen
- Projekte mit Vorschaubild, Text, Kategorie und Galerie im Backend verwalten
- Filter der Projektübersicht ohne Neuladen der Seite
- Projektseite mit Galerie und Grossansicht (Lightbox) zum Durchklicken
- Skills als aufklappbare Liste
- Modulbaukasten für alle Seiten, Farbwelt pro Seite wählbar
- Responsives Layout für Desktop und Mobile

## Technologien
HTML, CSS, JavaScript, PHP, WordPress mit eigenem Theme, Carbon Fields, Adobe Fonts

## Setup
1. WordPress installieren und das Plugin **Carbon Fields** aktivieren.
2. Den Theme-Ordner nach `wp-content/themes/` hochladen und das Theme aktivieren.
3. Im Backend unter **Werkzeuge > Portfolio einrichten** die Seiten und Menüs anlegen.
4. Unter **Globales** das Logo und die Socials erfassen.
5. Unter **Projekte** eigene Projekte erfassen.

Die Schrift Coolvetica wird über ein Adobe-Fonts-Webprojekt geladen und liegt nicht in diesem Repository. Manrope liegt unter der SIL Open Font License im Theme.

## Aufbau des Themes
- `backend`: Funktionen, Post Types, Taxonomien, Inhaltsfelder und Getter
- `frontend`: Views, Styles, Scripts und Assets
- `manuals`: Anleitungen aus dem IM5-Unterricht

Bubbles und Titelgrafiken sind Dateien unter `frontend/assets/`. Ihre Position, Grösse, Drehung und Deckkraft stehen in `frontend/styles/main.css` im Abschnitt «Bubbles pro Farbwelt».

## Screenshots
_Vor der Abgabe ergänzen._

## Learnings
_Vor der Abgabe ergänzen._

## Schwierigkeiten
_Vor der Abgabe ergänzen._

## Ressourcen
- [WordPress Developer Resources](https://developer.wordpress.org/)
- [Carbon Fields Dokumentation](https://docs.carbonfields.net/)
- [Adobe Fonts](https://fonts.adobe.com/)
- [Manrope](https://fonts.google.com/specimen/Manrope)
- IM5-Starter-Theme und Anleitungen im Ordner `manuals`
- Die Umsetzung entstand mit Unterstützung von Claude (KI).
