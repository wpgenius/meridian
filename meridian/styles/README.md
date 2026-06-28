# Style Variations

This folder contains JSON style variations for the Meridian block theme.

WordPress automatically discovers any `.json` file placed here and presents it
as a selectable design variation in the Site Editor under **Styles → Browse styles**.

## How it works

Each file is a partial `theme.json` — it only needs to declare the values it
overrides (colors, typography, spacing). WordPress merges it on top of the
base `theme.json` at runtime, so you only need to specify what changes.

## Adding a variation

1. Create a new file: `styles/your-variation-name.json`
2. Add a `title` key so it appears with a human-readable label in the editor:

```json
{
  "$schema": "https://schemas.wp.org/trunk/theme.json",
  "version": 3,
  "title": "Your Variation Name",
  "settings": {},
  "styles": {}
}
```

3. Reload the Site Editor — the variation appears immediately, no build step needed.

## Naming conventions

Use lowercase kebab-case filenames (e.g. `dark-mode.json`, `warm-sand.json`).
The filename is used as the variation slug internally by WordPress.
