# 🎨 UI

[![Domain-UI](https://img.shields.io/badge/Domain-UI%20Kit-7B1FA2.svg)](#)
[![Laravel 12](https://img.shields.io/badge/Laravel-12-red.svg)](https://laravel.com/)
[![Filament 5](https://img.shields.io/badge/Filament-5-ffab00.svg)](https://filamentphp.com/)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4+-777BB4.svg)](https://php.net/)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-Level%2010-brightgreen.svg)](https://phpstan.org/)
[![PSR-12](https://img.shields.io/badge/Code-PSR--12-blue.svg)](https://www.php-fig.org/psr/psr-12/)
[![Strict Types](https://img.shields.io/badge/PHP-strict__types-1-informational.svg)](#)
[![Laraxot Modules](https://img.shields.io/badge/Architecture-Modular-purple.svg)](#)
<<<<<<< HEAD
[![FixCity Platform](https://img.shields.io/badge/Platform-FixCity-008758.svg)](#)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
[![<nome progetto> Platform](https://img.shields.io/badge/Platform-<nome progetto>-008758.svg)](#)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
[![Current Platform](https://img.shields.io/badge/Platform-progetto corrente-008758.svg)](#)
=======
[![<nome progetto> Platform](https://img.shields.io/badge/Platform-<nome progetto>-008758.svg)](#)
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)

> **Componenti che non reinventano la ruota.** Design system condiviso tra moduli e tema.

---

## Perché esiste

Coerenza visiva e DRY su Blade/Livewire/Filament.

## Superpoteri

- Component library riusabile
- Token e pattern documentati
- Integrazione Tailwind/DaisyUI
- Filament custom components

## Certificazioni

| Certificazione | Stato |
|----------------|-------|
| PHPStan livello 10 | Target progetto |
| `declare(strict_types=1)` | Su nuovo codice PHP |
| Filament 5 + XotBase | Admin enterprise |
| Test PHPUnit / Pest | Suite modulo |
| Documentazione wiki | Cartella `docs/` |

## Vuoi entrare nel team?

UI **consistente** = brand PA forte.

Stack frontoffice: **Tailwind · Alpine · Lit · DaisyUI · Flowbite · Filament v5** — vedi [STORY-133](../../../docs/stories/STORY-133-frontend-stack-religion-tailwind-alpine-lit.md).

---

## Regola di Dipendenza

UI è una **dipendenza condivisa** — la freccia è unidirezionale:

```
Xot ← UI ← Geo, User, Tenant, Activity, …
```

- UI **NON dipende** da moduli domain-specific (Geo, Activity, Media, ecc.)
- Geo (e altri moduli) **possono dipendere** da UI
- Componenti geografici (mappe, geocoding) → `Modules/Geo/`, non qui

Dettagli: [`docs/dependency-rules.md`](./docs/dependency-rules.md)

---


## Documentazione

| Lingua | Link |
|--------|------|
| 🇮🇹 Presentazione | Questo file (`README.md`) |
| 🇬🇧 Business card | [docs/readme-en.md](./docs/readme-en.md) |
| 📚 Wiki tecnica | [./docs/wiki/](./docs/) |

---

<<<<<<< HEAD
**Modulo** `ui` · **Laraxot** · **FixCity Platform** · PHPStan 10 · Filament 5
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
**Modulo** `ui` · **Laraxot** · **<nome progetto> Platform** · PHPStan 10 · Filament 5
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
**Modulo** `ui` · **Laraxot** · **Current Platform** · PHPStan 10 · Filament 5
=======
**Modulo** `ui` · **Laraxot** · **<nome progetto> Platform** · PHPStan 10 · Filament 5
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
