# Änderungen gegenüber deinem Ordner

Grundlage war die Kopie deines Ordners `im5` vom 04.11.2026.

## Hochladen
1. Dein aktueller Stand liegt in GitHub. Lokale, noch nicht committete Änderungen zuerst committen.
2. Den Inhalt dieses Ordners in deinen Theme-Ordner auf dem Server hochladen.
3. `.git` und `.vscode` sind hier nicht enthalten. Deine Zugangsdaten bleiben also, wo sie sind.
4. Im Backend **Werkzeuge > Portfolio einrichten** öffnen.
5. **Seiten und Menüs anlegen** klicken, danach **12 Demo-Projekte anlegen**.
6. Unter **Globales > Socials** prüfen: Bestehende Einträge werden nicht überschrieben. Dort den **Anzeigetext** und den **Titel im Footer** ergänzen und die echte LinkedIn-URL eintragen.

Die Einrichtung überschreibt keine Seiten mit Inhalt und keine erfassten Socials. Sie setzt aber die Seite **Home** als Startseite. Bestehende Menüs werden nur mit **Menüs neu aufbauen** ersetzt.

## Neu
| Datei | Inhalt |
|---|---|
| `backend/cpt/_project.php` | Post Type «Projekte» |
| `backend/tax/_project_category.php` | Kategorien für den Filter |
| `backend/carbonfields/_project.php` | Felder der Projekte, Reihenfolge der Filter |
| `backend/carbonfields/_page.php` | Farbwelt pro Seite |
| `backend/getter/_project.php`, `_page.php` | Daten für die Views |
| `backend/setup/index.php` | Einrichtungsseite im Backend |
| `single-project.php`, `404.php` | WordPress-Templates |
| `frontend/views/pages/project.php`, `404.php` | Projektseite, Fehlerseite |
| `frontend/views/teaser/project.php` | Projekt in der Übersicht |
| `frontend/views/layout/bubbles.php` | Ebenen für die Bubbles |
| `frontend/views/modules/` | hero, projects, skills, about, contact, text |
| `frontend/scripts/_header.js`, `_filter.js`, `_lightbox.js` | Sticky Navigation, Filter, Grossansicht |
| `frontend/assets/` | Manrope, Logo, Titel, Bubbles, Platzhalter |
| `AENDERUNGEN.md` | Diese Datei |

## Geändert
| Datei | Änderung |
|---|---|
| `header.php` | Adobe-Fonts-Link, Seitentitel, Farbwelt am `body`, Cache-Schutz für CSS |
| `footer.php` | Cache-Schutz für JS |
| `functions.php` | Einrichtungsseite geladen |
| `style.css` | Autorin und Beschreibung |
| `.gitignore` | `.DS_Store` ergänzt |
| `README.md` | Für die Abgabe neu aufgebaut, Learnings, Schwierigkeiten und Screenshots fehlen noch |
| `backend/carbonfields/_globals.php` | Socials: Anzeigetext und Titel im Footer |
| `backend/carbonfields/_modules.php` | Neue Module |
| `backend/carbonfields/index.php`, `backend/cpt/index.php`, `backend/tax/index.php`, `backend/getter/index.php` | Neue Dateien geladen |
| `backend/getter/_globals.php` | Logo-Ersatz aus dem Theme, Links für den Footer |
| `frontend/views/layout/header.php` | Logo verlinkt, `target`-Fehler behoben, aktive Seite |
| `frontend/views/layout/footer.php` | Aufbau wie im Design, `target`-Fehler behoben |
| `frontend/styles/main.css` | Komplettes Design |
| `frontend/styles/_fonts.css` | Manrope |
| `frontend/scripts/main.js` | Lädt Navigation, Filter und Grossansicht |

## Entfernt
- `frontend/views/modules/example.php` und das Beispielmodul
- `.gitkeep` in `frontend/assets/fonts` und `frontend/views/teaser`
- `.DS_Store`-Dateien

In GitHub sind die `.DS_Store`-Dateien noch eingecheckt. Sie verschwinden dort erst, wenn du sie aus dem Repo löschst.

## Platzhalter, die du ersetzen musst
| Was | Wo | Wie |
|---|---|---|
| Titel | `frontend/assets/titles/` | Original-PNG unter demselben Namen speichern |
| Bubbles | `frontend/assets/bubbles/` | Originale ablegen, Werte in `main.css` anpassen |
| Fotostreifen | Seite About me, Modul «Über mich» | Bilder hochladen |
| Projekte | Backend, Menüpunkt Projekte | Demo-Projekte löschen, eigene anlegen |
| Skill-Texte, About-Text | Modul der jeweiligen Seite | Texte ersetzen |
| Adresse in Impressum und Privacy | Modul «Text» der jeweiligen Seite | Eckige Klammern ersetzen, Texte vor dem Go-Live prüfen |
