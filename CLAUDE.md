# CLAUDE.md

`lensapp-eu/lens-php`: the public Composer package that sends debug payloads
from PHP and Laravel to the Lens desktop app (`127.0.0.1:23600`) and Lens
Cloud (`https://app.lensapp.eu`). PHP 8.0+, `ext-curl`, `ext-json`, no
runtime dependencies.

## Layout

- `src/Lens.php`: the client (payloads, colors, labels, channels, cloud).
- `src/helpers.php`: the global `lens()` helper, autoloaded as a file.
- `src/LensServiceProvider.php` + `config/lens.php`: Laravel auto-discovery,
  exception reporting and the `lens:check`, `lens:test`,
  `lens:install-hooks` commands (`src/Commands/`).
- `src/Composer/LensPlugin.php`: the package is a `composer-plugin`; on
  install and update it writes a git pre-commit hook in Laravel projects that
  blocks leftover `lens()` calls, never overwriting a foreign hook.

Env vars: `LENS_ENABLED`, `LENS_HOST`, `LENS_PORT`, `LENS_LOCAL`,
`LENS_CLOUD`, `LENS_PROJECT_KEY`, `LENS_CLOUD_URL`.

## Releases

Packagist reads the git tags (`v2.1.0`, ...); there is no workflow. Bump the
`version` sent in `meta` in `src/Lens.php` together with the tag.

Installed as a dev dependency, so `lens()` does not exist in production: keep
the helper guarded and never make app code depend on it.
