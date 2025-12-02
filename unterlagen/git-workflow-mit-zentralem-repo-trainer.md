# 📘 **Trainer-Version: Sicherer Workflow für Campusmanager & Librarymanager**

## Ziel

* **Nur ein Git-Repo** im Root (korrekt!).
* TN sollen **nicht durcheinanderkommen**, obwohl mehrere Projekte in einem Repo liegen.
* VS Code zeigt **nur das gerade relevante Projekt**, aber Git funktioniert trotzdem.

---

## 1) Struktur im Repo

```txt
laravel/
  .git/
  campusmanager/
  librarymanager/
```

Git liegt **im Root**.

---

## 2) Projekte einzeln in VS Code öffnen (CLI-sicher)

Da in der VM nur CLI läuft, öffnen die TN VS Code **per SSH**.
Dort können sie direkt die einzelnen Ordner öffnen:

### Campusmanager öffnen

```bash
code campusmanager
```

### Librarymanager öffnen

```bash
code librarymanager
```

VS Code macht Folgendes automatisch:

* zeigt **nur den geöffneten Ordner** an → TN arbeiten sauber getrennt
* erkennt das **Git im Root**, auch wenn nur ein Unterordner geöffnet ist
* Git-Tab funktioniert ganz normal (Änderungen, Commits, Push)

---

## 3) Git-Push am Tagesende

Egal welcher Ordner geöffnet ist:

```bash
cd ~/laravel
git add .
git commit -m "Tag X abgeschlossen"
git push
```

---

## 4) Optional: Alias-Befehle (sehr TN-freundlich)

In `~/.bashrc` der TN einfügen:

```bash
alias cm='code ~/laravel/campusmanager'
alias lm='code ~/laravel/librarymanager'
```

Dann:

* `cm` → öffnet Campusmanager
* `lm` → öffnet Librarymanager

**Absolut idiotensicher.**

---

## 5) Empfohlener Kursablauf

**Jeden Tag zu Beginn:**

1. TN verbinden sich per SSH
2. TN öffnen nur den heutigen Projektordner:

   ```bash
   cm   # z. B. am Campusmanager-Tag
   ```

**Am Tagesende:**

```bash
cd ~/laravel
git add .
git commit -m "Tag X abgeschlossen"
git push
```

Fertig.
