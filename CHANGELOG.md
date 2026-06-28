# Changelog

All notable changes to the Meridian WordPress block theme are documented here.

The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).
Versions correspond to tags in this repository and to releases on WordPress.org.

---

## [Unreleased]

### Added
- `templates/front-page.html` — dedicated static front page template using the 30/70 sidebar layout
- Blueprint demo content: auto-creates a Home page with all profile patterns and sets it as the static front page on WordPress Playground
- `setSiteOptions` step in Playground blueprint sets site title and tagline automatically

### Changed
- `parts/sidebar.html` — replaced static placeholder image and hardcoded "Your Name" / tagline text with `wp:site-logo`, `wp:site-title`, and `wp:site-tagline` blocks so the sidebar reflects real site settings
- Font loading modernized: removed PHP `wp_enqueue_style` Google Fonts call; fonts are now declared exclusively via `theme.json` `fontFace` entries (the WordPress 6.x block theme standard — no PHP required)

---

## [1.0.0] — 2024-11-01

### Added
- Initial release
- Two-column layout with sticky sidebar (profile photo, bio, social links, newsletter opt-in)
- Seven block patterns: Hero Bio, Expertise Grid, Experience Timeline, Talks & Speaking, Publications List, Volunteering, and Newsletter CTA
- Professional color system: primary blue, secondary teal, accent, success, warning, error ramps plus full neutral scale
- Fluid typography: Inter (400/500/600/700) and DM Serif Display (400/400i) via Google Fonts CDN
- Eight page templates: Index (blog feed), Single Post, Page, Archive, Search, 404, No Sidebar, Full Width
- Template parts: Header (sticky, with logo and navigation), Footer (three-column with social links and newsletter form), Sidebar
- `theme.json` version 3 with full design token system (colors, font families, font sizes, spacing, border, shadows)
- Accessibility: skip links, visible focus indicators, `screen-reader-text` utility, WCAG AA color contrast throughout
- RTL language support
- Translation-ready with `.pot` file in `/languages`
- WordPress Playground live preview via `.github/blueprints/playground.json`
- GitHub Actions release workflow — builds and publishes a clean theme zip on version tag push
- Docker Compose local development environment

[Unreleased]: https://github.com/wpgenius/meridian/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/wpgenius/meridian/releases/tag/v1.0.0
