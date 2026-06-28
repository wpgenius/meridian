# Meridian WordPress Block Theme

A clean, professional personal brand block theme for thought leaders, coaches, and executives.

[![Live Preview](https://img.shields.io/badge/Live%20Preview-Try%20in%20Playground-3858e9?style=for-the-badge&logo=wordpress)](https://playground.wordpress.net/#%7B%22steps%22%3A%5B%7B%22step%22%3A%22installTheme%22%2C%22themeZipFile%22%3A%7B%22resource%22%3A%22url%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fwpgenius%2Fmeridian%2Freleases%2Flatest%2Fdownload%2Fmeridian.zip%22%7D%2C%22options%22%3A%7B%22activate%22%3Atrue%7D%7D%5D%7D)

## Features

- **Two-column layout** with sticky sidebar (profile photo, bio, social links, newsletter opt-in)
- **6 block patterns** ready to use: Hero Bio, Expertise Grid, Experience Timeline, Talks Grid, Publications List, Newsletter CTA
- **6 page templates**: Index, Single Post, Page, Archive, Search, 404 — plus No Sidebar and Full Width variants
- **Professional design system** — Inter font, 8px spacing scale, full color ramps (primary, secondary, accent, success, warning, error + neutrals)
- **Full Site Editing** — works entirely in the WordPress Site Editor, no page builder required
- **Accessibility-ready** — skip links, keyboard navigation, WCAG AA contrast
- **Translation-ready** — includes `.pot` file in `/languages`

## Requirements

- WordPress 6.4 or higher
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
cp .env.example .env   # edit credentials if needed
docker compose up -d
```
WordPress runs at `http://localhost:8080`. The repo root mounts live into the container as the theme — no restart needed when you edit theme files.

Activate the theme from **Appearance > Themes** in either case.

## Font Setup

Meridian uses **Google Fonts** — no local font files needed.

| Font | Weights | Use |
|------|---------|-----|
| [Inter](https://fonts.google.com/specimen/Inter) | 400, 500, 600, 700 | Body text, UI, navigation |
| [DM Serif Display](https://fonts.google.com/specimen/DM+Serif+Display) | 400, 400i | Optional headings / display |

Both are loaded automatically via `wp_enqueue_style` and registered in `theme.json`
with Google Fonts CDN `src` URLs. No downloads or local files required.

## Customization

All design tokens (colors, typography, spacing) are in `theme.json`. To customize:

1. Go to **Appearance > Editor**
2. Click the **Styles** icon (half-circle, top right)
3. Adjust colors, typography, and spacing globally

To edit the sidebar:

1. Go to **Appearance > Editor > Template Parts > Sidebar**
2. Update your profile photo, name, bio, and social links

## File Structure

```
meridian/                   ← repo root = the theme (https://github.com/wpgenius/meridian)
├── .docker/
│   └── uploads.ini         # PHP upload config for Docker
├── .github/
│   ├── blueprints/
│   │   └── playground.json # WordPress Playground live preview config
│   └── workflows/
│       └── release.yml     # Builds & publishes release zip on tag
├── assets/
│   ├── css/
│   │   ├── global.css      # Front-end styles
│   │   └── editor.css      # Editor WYSIWYG styles
│   └── fonts/
│       └── README.txt      # Font download instructions
├── languages/
│   └── meridian.pot        # Translation template
├── parts/
│   ├── header.html
│   ├── footer.html
│   └── sidebar.html
├── patterns/
│   ├── hero-bio.php
│   ├── expertise-grid.php
│   ├── experience-timeline.php
│   ├── talks-grid.php
│   ├── publications-list.php
│   ├── newsletter-cta.php
│   └── volunteering.php
├── styles/                 # JSON style variations (Site Editor palette swaps)
├── templates/
│   ├── index.html          # Main blog index
│   ├── single.html         # Single post
│   ├── page.html           # Static page
│   ├── archive.html        # Category/tag archives
│   ├── search.html         # Search results
│   ├── 404.html            # Not found
│   ├── no-sidebar.html     # Page without sidebar
│   └── full-width.html     # Full-width page
├── .distignore             # Files excluded from release zip
├── .editorconfig
├── .gitattributes
├── docker-compose.yml
├── functions.php
├── index.php
├── readme.txt              # WordPress.org readme
├── screenshot.png          # Theme preview (1200x900)
├── style.css               # Theme header
└── theme.json              # Design tokens
```

## WordPress.org Submission Checklist

- [x] GPLv2 or later license
- [x] `readme.txt` in WordPress.org format
- [x] All required `style.css` headers (Author: mkrndmane)
- [x] `theme.json` version 3
- [x] `templates/index.html`
- [x] Unique prefix `mrdn_` for all PHP identifiers
- [x] No custom post types, blocks, or shortcodes
- [x] Skip links and keyboard navigation
- [x] Translation-ready with `.pot` file
- [x] No forbidden files (`.sql`, `.xml`, `.sh`, etc.)
- [x] Google Fonts loaded via `wp_enqueue_style` and registered in `theme.json`
- [ ] Create `screenshot.png` at 1200×900px
- [ ] Run Theme Check plugin — resolve all errors/warnings
- [ ] Test on latest WordPress with default content (Theme Unit Test data)
- [ ] Submit at https://wordpress.org/themes/upload/

## Changelog

### 1.0.0
- Initial release

## License

Meridian is licensed under the [GNU General Public License v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

Inter font: SIL Open Font License 1.1 — https://rsms.me/inter/
