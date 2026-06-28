# Meridian WordPress Block Theme

A clean, professional personal brand block theme for thought leaders, coaches, and executives.

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

1. Clone this repository into your WordPress `wp-content/themes/` folder:
   ```bash
   git clone https://github.com/yourusername/meridian-wp-theme.git meridian
   ```
2. Activate the theme from **Appearance > Themes**

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
meridian/
├── assets/
│   ├── css/
│   │   ├── global.css        # Front-end styles
│   │   └── editor.css        # Editor WYSIWYG styles
│   └── fonts/
│       └── README.txt        # Font download instructions
├── languages/
│   └── meridian.pot          # Translation template
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
├── templates/
│   ├── index.html            # Main blog index
│   ├── single.html           # Single post
│   ├── page.html             # Static page
│   ├── archive.html          # Category/tag archives
│   ├── search.html           # Search results
│   ├── 404.html              # Not found
│   ├── no-sidebar.html       # Page without sidebar
│   └── full-width.html       # Full-width page
├── functions.php
├── index.php
├── readme.txt                # WordPress.org readme
├── screenshot.png            # Theme preview (1200x900)
├── style.css                 # Theme header
└── theme.json                # Design tokens
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
