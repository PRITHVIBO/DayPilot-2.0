# DayPilot 2.3.3 boot hardening

- Adds dedicated `boot.php` for initial app bootstrap.
- Normalizes `api.php?action=` to prevent harmless encoding/whitespace mismatches from becoming Unknown action.
- Versioned frontend assets and service-worker cache at 2.3.3.
- AI provider and memory failures are isolated during boot.

Deploy the whole tree while preserving `config.local.php` and `.git`.
