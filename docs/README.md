---
title: UI Module — Overview
module: UI
type: readme
status: approved
tags: [ui, components, blade, filament, widgets, assets]
updated: "2026-07-28"
related:
  - ./INDEX.md
  - ./PATTERNS.md
  - ./TROUBLESHOOTING.md
---

# UI Module — Documentazione

> Componenti Blade condivisi, widget Filament, e asset management per tutti i moduli e temi.

## 📋 Quick Navigation

| Link | Descrizione |
| --- | --- |
| [INDEX](./INDEX.md) | Indice completo della documentazione (900+ file organizzati) |
| [PATTERNS](./PATTERNS.md) | Decisioni architetturali e anti-pattern |
| [TROUBLESHOOTING](./TROUBLESHOOTING.md) | Errori comuni e soluzioni |

---

## 🎯 Overview

Il modulo **UI** fornisce:

- **50+ Blade components** con prefisso `x-ui::ui.` (button, card, form, layout)
- **20+ Filament widgets** per admin dashboard (stats, calendar, charts)
- **Asset management** via Tailwind compilation e custom CSS
- **Custom form fields** (AddressField, FileUpload, OpeningHoursField, etc.)
- **Enums** per type-safe state management (TableLayoutEnum)
- **ChartJS integration** con data labels plugin
- **Translation support** (IT/EN multilingua)

---

## 📁 Struttura Modulo

```
Modules/UI/
├── app/
│   ├── Enums/                      # Enum definitions (TableLayoutEnum)
│   ├── Filament/
│   │   ├── Forms/                  # Custom form fields
│   │   ├── Resources/              # Filament resources
│   │   └── Widgets/                # Dashboard widgets
│   ├── Services/                   # Business logic
│   ├── View/
│   │   ├── Components/             # PHP component classes
│   │   └── Composers/              # View composers
│   └── Providers/
│       └── UIServiceProvider.php   # Service provider & plugin registration
├── resources/
│   ├── css/                        # Custom Tailwind + global styles
│   ├── js/                         # JavaScript (ChartJS integrations, etc.)
│   ├── views/
│   │   └── components/
│   │       └── ui/                 # Blade components
│   │           ├── buttons/
│   │           ├── cards/
│   │           ├── forms/
│   │           └── layout/
│   └── lang/
│       ├── it/                     # Italian translations
│       └── en/                     # English translations
├── tests/                          # Pest tests (feature, unit)
├── database/                       # Migrations
└── docs/                           # Documentation
    ├── INDEX.md                    # Complete file listing
    ├── PATTERNS.md                 # Architectural decisions
    ├── TROUBLESHOOTING.md          # Error solutions
    └── README.md                   # This file
```

---

## 🚀 Utilizzo Rapido

### Componente Blade

```blade
<!-- Utilizzo con prefisso x-ui::ui. -->
<x-ui::ui.button :label="'Salva'" color="primary" />

<x-ui::ui.card>
    <x-slot name="header">
        Titolo Scheda
    </x-slot>
    Contenuto della scheda...
</x-ui::ui.card>

<!-- Form input -->
<x-ui::ui.form.input
    name="email"
    label="Email"
    type="email"
    required
/>
```

### Widget Filament

```php
// Dashboard registration
public function panel(Panel $panel): Panel {
    return $panel
        ->widgets([
            \Modules\UI\Filament\Widgets\StatsOverviewWidget::class,
            \Modules\UI\Filament\Widgets\CalendarWidget::class,
        ]);
}
```

### TableLayoutEnum

```php
use Modules\UI\Enums\TableLayoutEnum;

if ($layout === TableLayoutEnum::LIST) {
    // Render as list
} elseif ($layout === TableLayoutEnum::GRID) {
    // Render as grid
}
```

---

## ✅ Stato Qualità

| Aspetto | Stato | Note |
| --- | --- | --- |
| PHPStan Level 10 | ✅ Compliant | Zero errors, L10 verified |
| Translation (IT/EN) | ✅ 100% | Completo per tutte risorse |
| Blade Components | ✅ 50+ | Prefix x-ui::ui., PHPDoc completo |
| Filament Widgets | ✅ 20+ | Dashboard + custom fields |
| Tests (Pest) | ✅ Present | Feature + unit tests |
| Asset Build | ✅ Tailwind | CSS compiled, no inline styles |

---

## 🏗️ Decisioni Architetturali Chiave

### 1. Blade Prefixing

Tutti i componenti usano `x-ui::ui.` per evitare collisioni:

```blade
<!-- ✅ CORRETTO -->
<x-ui::ui.button label="Click" />

<!-- ❌ SBAGLIATO -->
<x-button label="Click" />
```

**Motivo**: Evita namespace collisions con Filament e package third-party.

### 2. No Hardcoded Labels

Tutte le labels da translation file (multilingua automatico):

```php
// ✅ CORRETTO: Legge da lang/it/widget.php
class MyWidget extends Widget {
    protected static ?string $heading = null;
}

// ❌ SBAGLIATO: Hardcoded
class MyWidget extends Widget {
    protected static ?string $heading = 'My Widget';
}
```

### 3. Tailwind-Only Styling

Nessun inline style nel template:

```blade
<!-- ✅ CORRETTO: Tailwind utilities -->
<div class="bg-blue-600 p-4 rounded-lg shadow-md">Content</div>

<!-- ❌ SBAGLIATO: Inline style -->
<div style="background-color: #2563eb; padding: 16px;">Content</div>
```

### 4. Enum for Type-Safety

Usa Enum per state management:

```php
// ✅ CORRETTO
if ($layout === TableLayoutEnum::LIST) { }

// ❌ SBAGLIATO
if ($layout === 'list') { }
```

### 5. Custom Fields via Filament

Estendi Filament fields, non reimplementa:

```php
// ✅ CORRETTO
class AddressField extends \Filament\Forms\Components\Field {
    protected string $view = 'ui::filament.fields.address';
}

// ❌ SBAGLIATO
class AddressField { } // Incompatibile Filament
```

---

## 📚 Documentazione Dettagliata

- **[INDEX.md](./INDEX.md)** — File listing completo organizzato per categoria (900+ file)
- **[PATTERNS.md](./PATTERNS.md)** — 5 decisioni architetturali, 6 anti-pattern, checklist implementazione
- **[TROUBLESHOOTING.md](./TROUBLESHOOTING.md)** — Blade, Filament, TableLayoutEnum, Charts, Assets, Testing

---

## 🔗 Moduli Correlati

- **[Xot](../Xot/docs/README.md)** — Framework core, base classes
- **[User](../User/docs/README.md)** — Gestione utenti e autorizzazione
- **[Lang](../Lang/docs/README.md)** — Traduzioni centrali (IT/EN)
- **[Notify](../Notify/docs/README.md)** — Email templates, notifications
- **[Performance](../Performance/docs/README.md)** — Data tables e list rendering

---

## 🔧 Setup & Configuration

### Installation

```bash
# Component discovery (auto-register in ServiceProvider)
php artisan optimize

# Build assets
npm run build

# Run tests
php artisan test Modules/UI
```

### Tailwind Configuration

```javascript
// tailwind.config.js
module.exports = {
  content: [
    './laravel/Modules/UI/resources/views/**/*.blade.php',
    './laravel/Modules/UI/app/**/*.php',
  ],
  // ... theme, plugins
}
```

### PHPStan Verification

```bash
# Level 10 compliance
./vendor/bin/phpstan analyse laravel/Modules/UI --level=max
```

---

## 📊 Statistics

| Category | Count | Status |
| --- | --- | --- |
| Blade Components | 50+ | ✅ Active |
| Filament Widgets | 20+ | ✅ Active |
| Custom Form Fields | 6+ | ✅ Active |
| Enums | 5+ | ✅ Active |
| Asset Files | 10+ | ✅ Compiled |
| Language Files | 2 (IT/EN) | ✅ Complete |
| Tests | 20+ | ✅ Passing |

---

## 🔄 CI/CD & Versioning

- **Semantic Versioning**: `.github/workflows/semantic-versioning.yml`
- **Current Version**: 4.1.0
- **License**: MIT

---

## 📞 Support & Escalation

For issues:
1. Check [TROUBLESHOOTING.md](./TROUBLESHOOTING.md)
2. Review [PATTERNS.md](./PATTERNS.md) for anti-patterns
3. Consult [INDEX.md](./INDEX.md) for detailed documentation
4. Run PHPStan (`./vendor/bin/phpstan analyse laravel/Modules/UI --level=max`)

---

**Last Updated**: 2026-07-28  
**Module Version**: 4.1.0  
**Status**: Production Ready ✅