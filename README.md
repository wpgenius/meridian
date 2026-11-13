# Meridian WordPress Block Theme

A clean, professional personal brand block theme for thought leaders, coaches, and executives.

[![Live Preview](https://img.shields.io/badge/Live%20Preview-Try%20in%20Playground-3858e9?style=for-the-badge&logo=wordpress)](https://playground.wordpress.net/#%7B%22steps%22%3A%5B%7B%22step%22%3A%22installTheme%22%2C%22themeZipFile%22%3A%7B%22resource%22%3A%22url%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fwpgenius%2Fmeridian%2Freleases%2Flatest%2Fdownload%2Fmeridian.zip%22%7D%2C%22options%22%3A%7B%22activate%22%3Atrue%7D%7D%5D%7D)

## Features

- **Two-column layout** with a sticky profile sidebar (logo, site title, tagline, bio, social links)
- **7 block patterns** ready to use: Hero Bio, Expertise Grid, Experience Timeline, Talks & Speaking, Publications List, Volunteering, Work With Me CTA
- **Templates**: Blog, Single Post, Page, Archive, Search, 404 — plus Landing Page (no title), No Sidebar and Full Width page templates
- **Professional design system** — bundled Inter and DM Serif Display fonts, 8px spacing scale, full color ramps (primary, secondary, accent, success, warning, error + neutrals)
- **Full Site Editing** — works entirely in the WordPress Site Editor, no page builder required
- **Accessible** — core skip link, visible focus styles, AA-contrast text colors
- **Translation-ready** — includes `.pot` file in `/languages`

## Requirements

- WordPress 6.6 or higher
- PHP 7.4 or higher

## Installation

### From WordPress Admin

1. Go to **Appearance > Themes > Add New**
2. Search for **Meridian**
3. Click **Install** then **Activate**

### Manual / Development

**Option A — Clone directly into themes:**
```bash
git clone https://github.com/wpgenius/meridian.git wp-content/themes/meridian
```

**Option B — Docker (recommended for local dev):**
```bash
git clone https://github.com/wpgenius/meridian.git
cd meridian
docker compose up -d
```
WordPress runs at `http://localhost:8080`. The repo root mounts live into the container as the theme — no restart needed when you edit theme files.

Activate the theme from **Appearance > Themes** in either case.

## Fonts

Fonts are bundled in `assets/fonts/` and registered through `fontFace` entries in `theme.json`, so no requests go to third-party font servers (a WordPress.org requirement).

| Font | Weights | Use |
|------|---------|-----|
| [Inter](https://github.com/rsms/inter) | Variable 100–900 | Body text, UI, navigation |
| [DM Serif Display](https://fonts.google.com/specimen/DM+Serif+Display) | 400, 400 italic | H1, H2 and post titles |

Both are SIL Open Font License 1.1; license texts sit next to the font files.

## Customization

All design tokens (colors, typography, spacing) are in `theme.json`. To customize:

1. Go to **Appearance > Editor**
2. Click the **Styles** icon (half-circle, top right)
3. Adjust colors, typography, and spacing globally

To edit the sidebar:

1. Go to **Appearance > Editor > Patterns > Template Parts > Sidebar**
2. Update your bio and social links (logo, title and tagline come from site settings)

## File Structure

```
meridian/                   ← repo root = the theme (https://github.com/wpgenius/meridian)
├── .docker/uploads.ini     # PHP upload config for Docker
├── .github/                # Playground blueprint + release workflow
├── assets/
│   ├── css/theme.css       # Styles theme.json can't express (front end + editor)
│   ├── fonts/              # Bundled Inter + DM Serif Display (OFL)
│   └── images/             # Avatar placeholder used in patterns
├── languages/meridian.pot  # Translation template (wp i18n make-pot)
├── parts/                  # header, footer, sidebar (footer/sidebar load hidden patterns)
├── patterns/
│   ├── hero-bio.php, expertise-grid.php, experience-timeline.php,
│   │   talks-grid.php, publications-list.php, volunteering.php,
│   │   call-to-action.php  # Inserter patterns
│   └── hidden-*.php        # Translatable template content (404, footer, loops…)
├── styles/                 # Style variations (none yet)
├── templates/              # index, single, page, archive, search, 404,
│                           # page-landing, no-sidebar, full-width
├── functions.php
├── readme.txt              # WordPress.org readme
├── screenshot.png          # Theme preview (1200×900)
├── style.css               # Theme header
└── theme.json              # Design tokens and block styles
```

## WordPress.org Submission Checklist

- [x] GPLv2 or later license; all bundled assets GPL-compatible
- [x] `readme.txt` in WordPress.org format with Resources section
- [x] `theme.json` version 3 (requires WordPress 6.6)
- [x] Fonts bundled locally — no third-party requests
- [x] All user-facing strings translatable; template text lives in patterns
- [x] Unique `meridian_` prefix for PHP functions
- [x] No custom post types, blocks or shortcodes
- [x] `screenshot.png` at 1200×900, created from the theme itself
- [x] All patterns, templates and parts pass block validation
- [ ] Run the Theme Check plugin — resolve all errors/warnings
- [ ] Test with the Theme Unit Test data
- [ ] Confirm the name "Meridian" is free on WordPress.org
- [ ] Submit at https://wordpress.org/themes/upload/

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for the full version history.

## License

Meridian is licensed under the [GNU General Public License v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

Inter and DM Serif Display fonts: SIL Open Font License 1.1 — see `assets/fonts/`.
