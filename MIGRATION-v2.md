# DayPilot 2.0 database migration

`database.sql` already contains the full additive schema, so there is no destructive migration in this release.

## Added tables

### `projects`
Stores named project context and project lifecycle state.

### `work_logs`
Stores daily brain dumps, work updates, blockers, decisions, learning notes and daily summaries.

### `daily_reviews`
Stores one generated/local review per user and date.

### `memory_chunks`
Stores chunked retrieval records and optional OpenRouter free embeddings for personal RAG.

## Recommended Hostinger procedure

1. Export the current DayPilot database.
2. Open phpMyAdmin for the DayPilot database.
3. Import the updated `database.sql`.
4. Confirm the four new tables exist.
5. Deploy the updated source through Hostinger native Git.
6. Sign in and open **Memory**.
7. Run keyword search first.
8. Use **Build semantic memory** when semantic retrieval is desired and the embedding provider/quota is available.

The API also checks for the 2.0 tables on authenticated requests and can create them when absent. This is intended as a safety net, not as a replacement for a controlled database backup/import.
