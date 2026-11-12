# Portfolio von Janna Syrina Stutz
> Eigenes WordPress-Theme für das Modul Interaktive Medien 5 (IM5, HS26) im Studiengang Multimedia Production.

## Projektidee
Im Rahmen vom IM5 erstelle ich eine Portfolio-Website, welche meine Arbeiten aus Video, Foto, Grafik, Event, Podcast und Social Media zeigt. Um die Website in Zukunft bestmöglich aktuell zu halten, wird ein CMS (Wordpress) eingebunden. Die einzelnen Projekte lassen sich so im WordPress-Backend pflegen und auf der Startseite nach Kategorie filtern. Für das Design wurde in Figma mit einem Moodboard, Farbpaletten und mehreren Design-Schlaufen gearbeitet. Das finale Design soll minimalistisch aber klar sein und meine kreative Ader durchblicken lassen - mit handgeschriebenen Titeln und selbst gezeichneten Farb-Bubbles, die jeder Seite eine eigene Farbwelt geben.

## Funktionen
- Projekte mit Vorschaubild, Text, Kategorie und Galerie im Backend verwalten
- Filter der Projektübersicht ohne Neuladen der Seite
- Projektseite mit Galerie und Grossansicht zum Durchklicken
- Skills als aufklappbare Liste
- Modulbaukasten für alle Seiten, Farbwelt pro Seite wählbar
- Responsives Layout für Desktop und Mobile

## Technologien
HTML, CSS, JavaScript, PHP, WordPress mit eigenem Theme

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
<img width="889" height="405" alt="Bildschirmfoto 2026-11-12 um 10 57 53" src="https://github.com/user-attachments/assets/21b85d6e-8cbf-4c31-be61-433e972541c6" />
Moodboard, Ideenfindung und Farbauswahl


<img width="686" height="517" alt="Bildschirmfoto 2026-11-12 um 10 57 01" src="https://github.com/user-attachments/assets/cbc5a384-b33b-4fd8-9109-7775d848acba" />
Erstellung & Ausprobieren von Schriftbildern für die Titel


<img width="891" height="400" alt="Bildschirmfoto 2026-11-12 um 10 59 26" src="https://github.com/user-attachments/assets/671b9344-4800-46fa-810e-3f99cf522ff5" />
Fertiges Website-Design im Figma

## Learnings
Bei dieser Arbeit habe ich zum ersten Mal mit Wordpress gearbeitet. Ich verstehe jetzt, wie man ein eigenes Theme für Wordpress aufbaut und wie das Prinzip der Verlinkung zwischen Code und Wordpress-Backend funktioniert. Da ich später nicht vorhabe, in meiner weitere Laufbahn das Programmieren von Hand weiter auszuüben, habe ich mich in diesem Projekt zum ersten Mal mit Vibe-Coding ausprobiert, indem ich zusammen mit Claude die Website Stück für Stück aufgebaut habe - dabei habe ich gelernt, was gutes Prompten ausmacht. Je mehr Informationen der KI zur Verfügung gestellt werden, desto besser auch das Ergebnis. Für maximalen Lerngewinn habe ich Claude aber nicht kompletten Zugang zu meinen Dateien und Ordnern gegeben, sondern den gebauten Code dann selbst an der richtigen Stelle implementiert.

## Schwierigkeiten
Zu Beginn war ich etwas überfordert mit den vielen Fachbegriffen - mit der Zeit gewöhnte ich mich aber an die neuen Wörter und sie ergaben Sinn. Auch fand ich es schwer, mein kreatives Design so runterzubrechen, dass es logisch programmierbar war. Claude half mir oft, Konzepte und den Aufbau vom Code zu verstehen. Auch eine Schwierigkeit war manchmal abzuschätzen, ob Claude wirklich verstanden hat, was ich vor habe oder ob er einfach etwas gemacht hat, im Gegensatz zu ChatGPT (was ich sonst immer nutzte) fand ich aber, dass er viel weniger zustimmend und bejahend war - sondern auch einige Schritte von mir kritisch hinterfragte.

## Ressourcen
- [WordPress Developer Resources](https://developer.wordpress.org/)
- [Carbon Fields Dokumentation](https://docs.carbonfields.net/)
- [Adobe Fonts](https://fonts.adobe.com/)
- [Manrope](https://fonts.google.com/specimen/Manrope)
- IM5-Starter-Theme und Anleitungen im Ordner `manuals`
- Die Umsetzung entstand mit Unterstützung von Claude (KI).
