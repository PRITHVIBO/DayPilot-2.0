# DayPilot 2.3.3 — POST routing/cache-buster fix

Fixed a critical client routing bug in the `api()` helper. The cache-busting `_dp` query parameter is now appended only to GET requests. Previously it was appended directly to POST action names, turning requests such as `action=login` into `action=login_dp=...`, which caused the protected-route fallback to return HTTP 401 `Authentication required`.

This version is intended to remove the desktop login failure while preserving cache-busting for GET API calls.
