# Contributing to Meridian

Thank you for your interest in contributing. Meridian is a WordPress Full Site Editing block theme, so contributions touch HTML templates, block patterns (PHP), `theme.json`, CSS, and occasionally PHP functions.

---

## Reporting Bugs

1. Search [existing issues](https://github.com/wpgenius/meridian/issues) first — the bug may already be tracked.
2. Open a new issue and include:
   - WordPress version and PHP version
   - Steps to reproduce
   - Expected vs. actual behavior
   - Screenshot or screen recording if the issue is visual
   - Whether the bug appears with all other plugins disabled

---

## Suggesting Features or Patterns

Open an issue with the label `enhancement` and describe:

- The use case — who needs this and why
- How it fits a personal brand / portfolio theme
- Whether it requires new PHP, new CSS, or only block markup

Keep the theme's scope in mind: Meridian is intentionally focused on personal brand sites. Features that belong in a plugin (custom post types, shortcodes, dynamic functionality) are out of scope.

---

## Submitting a Pull Request

1. **Fork** the repository and create a feature branch from `main`.
2. Make your changes following the coding standards below.
3. Test against the latest stable WordPress release.
4. Open a PR against `main` with a clear description of what changed and why.
5. Add yourself to `CONTRIBUTORS.md` and, if the change is user-facing, add an entry to `CHANGELOG.md` under `[Unreleased]`.

PRs are reviewed by the maintainer. Small focused changes are easier to review and merge than large catch-all PRs.

---

## Coding Standards

### PHP

- Follow the [WordPress PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- All functions, hooks, and globals must use the `mrdn_` prefix.
- No shortcodes, custom post types, or custom blocks — core blocks only.
- Escape all output: `esc_html__()`, `esc_attr__()`, `esc_url()`, `wp_kses_post()`.
- Never use `exit` or `die` outside the ABSPATH guard at the top of `functions.php`.

### Block Patterns (`patterns/*.php`)

- Register via `register_block_pattern()` inside a plain PHP file — no class wrappers.
- Use theme preset references (`var:preset|color|primary`, `var:preset|spacing|6`) — never hardcode hex values or pixel sizes that duplicate `theme.json` tokens.
- Remove `id` attributes from image blocks and `queryId` from query blocks before committing.
- Internationalize all user-visible strings with `esc_html__()` or `esc_html_x()`.
- Assign patterns to the appropriate category: `mrdn-hero` for hero/profile sections, `mrdn-content` for everything else.

### Templates & Template Parts (`templates/*.html`, `parts/*.html`)

- Pure block markup — no PHP, no inline scripts.
- All spacing, color, and typography values must reference `theme.json` presets via `var:preset|…` notation.
- Remove the `theme` attribute from `wp:template-part` references before committing (e.g. use `{"slug":"header"}` not `{"slug":"header","theme":"meridian"}`).

### `theme.json`

- Add new color palette entries to the `settings.color.palette` array; do not add one-off inline colors in templates.
- Font sizes must include a `fluid` range for sizes `lg` and above.
- New block style overrides go in `styles.blocks`, not in CSS, unless a CSS selector is unavoidable.

### CSS (`assets/css/global.css`, `assets/css/editor.css`)

- Follow the [WordPress CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- Use `var(--wp--preset--…)` custom properties — never hardcode colors, font families, or spacing values that exist as `theme.json` presets.
- Scope component styles to their BEM class (`.post-card`, `.timeline-item`, etc.) rather than generic element selectors.
- Add new sections with a matching comment header (see the existing section pattern in `global.css`).

---

## Local Development

```bash
git clone https://github.com/wpgenius/meridian.git
cd meridian
docker compose up -d
```

WordPress runs at `http://localhost:8080`. The repo root mounts live into the container — file changes appear immediately without a restart.

Activate the theme from **Appearance > Themes** after first boot.

---

## License

By contributing, you agree that your changes are licensed under the [GNU General Public License v2 or later](https://www.gnu.org/licenses/gpl-2.0.html), the same license as the theme.
