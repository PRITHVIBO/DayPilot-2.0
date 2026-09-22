# DayPilot 2.3.1 stability fix

- Removed the provider-specific tool-calling dependency from the primary AI chat path.
- Workspace actions (plan, reminders, task operations, revision/local review) can run through deterministic local handlers even when an online model fails.
- RAG/context retrieval failures are isolated from AI provider requests.
- MariaDB schema detection uses `information_schema.tables`; no `SHOW TABLES LIKE ?`.
- OpenRouter text generation uses a plain chat-completion request without tools by default.
- Offline sync keeps failed operations in IndexedDB and retries automatically after reconnect and on a 30-second backoff while pending.
- Remote dashboard refresh uses `Promise.allSettled` so one optional endpoint cannot blank the rest of the workspace.
- API responses are marked no-store and include a cookie variance hint.
