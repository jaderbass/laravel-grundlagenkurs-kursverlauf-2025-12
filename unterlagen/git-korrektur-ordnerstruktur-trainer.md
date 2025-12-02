# Git-Korrektur Tag 1 – Trainer-Version  

Ordnerstruktur auf GitHub korrigieren, ohne Fortschritte zu verlieren

## Ausgangslage

- Lokal in der VM ist die Ordnerstruktur korrekt:

```txt
laravel/
  campusmanager/     (Laravel-Beispiel-Projekt)
  librarymanager/    (leer oder vorbereitet)
```

- Die Teilnehmenden (und auch der Trainer) haben versehentlich direkt das Laravel-Projekt in das GitHub-Repo gepusht.
- Auf GitHub liegt daher keine Ordnerstruktur, sondern das Laravel-Projekt im Root.

Ziel:  
Das Remote-Repo soll exakt wie die lokale VM aussehen, ohne dass Arbeit verloren geht.

---

## Vorgehen für den Trainer

### 1. Im lokalen Kurs-Repo arbeiten

```bash
cd ~/laravel
ls
```

Erwartet:

```txt
campusmanager
librarymanager
```

### 2. Prüfen, ob in den Unterordnern eigene `.git/`-Ordner liegen

In VM:

```bash
ls -a campusmanager
ls -a librarymanager

```

Wenn in einem der Ordner ein `.git/` angezeigt wird → weiter mit Schritt 3.
Wenn kein `.git/` angezeigt wird → direkt zu Schritt 4.

#### 3. Die falschen `.git/`-Ordner löschen

⚠️ Wichtig: Nur die `.git`-Ordner in den Unterordnern löschen – **nicht** den im Projekt-Root!

```bash
rm -rf campusmanager/.git
rm -rf librarymanager/.git
```

Damit werden die Ordner wieder normale Ordner und keine Git-Repos.

---

### 4. Alle Änderungen aufnehmen (Commit)

```bash
git add .
git commit -m "fix: Ordnerstruktur korrigiert"
```

Falls keine Änderungen da sind → alles gut.

---

### 5. Normalen Push versuchen

```bash
git push origin main
```

Wenn das klappt → fertig.

---

### 6. Fehlerfall: Remote einmalig überschreiben

Falls Git meldet:

- non-fast-forward
- tip of your current branch is behind
- rejected → fetch first
- oder ähnliches

dann:

```bash
git push --force
```

Damit wird der Remote-Stand an den lokalen Stand angepasst.

---

## Hinweise für Trainer

- **Nur der Trainer sollte `--force` ausführen**, nicht automatisch alle TN.
- Erst nachdem der Trainer Erfolg hatte, dürfen die TN ihren Stand pushen.
- Die TN-Anleitung steht in der separaten Teilnehmer-Datei.
