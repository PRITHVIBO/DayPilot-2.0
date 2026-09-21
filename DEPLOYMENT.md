# DayPilot 2.0 deployment checklist

## 1. Back up the current production site

Before changing production, keep a copy of the current Hostinger files and database export.

## 2. GitHub

Push the DayPilot source to `PRITHVIBO/daypilot` and keep `main` as the production branch.

```bash
git add .
git commit -m "Release DayPilot 2.0 personal work intelligence"
git push origin main
```

GitHub Actions in the repository are validation-only. They are not the production file-transfer mechanism.

## 3. Hostinger Git deployment

In Hostinger:

- Repository: `PRITHVIBO/daypilot`
- Branch: `main`
- Deployment path: the domain's `public_html`
- Domain: `projects.bhavyagupta.space`

Use the native Hostinger Git deployment flow. Do not add the old FTP deployment secrets back to GitHub Actions.

## 4. Database

Import the updated `database.sql` in the DayPilot MySQL database.

The release adds:

```text
projects
work_logs
daily_reviews
memory_chunks
```

The API includes a lightweight first-request schema check as a deployment safety net, but database import remains the preferred step.

## 5. Server-only config

On Hostinger create/update:

```text
config.local.php
```

Keep it server-only. Do not commit it. Preserve the production DB credentials already used by the current installation and configure AI/OpenRouter/VAPID values as needed.

## 6. Verify PHP / Composer

Required PHP extensions include:

- pdo_mysql
- curl
- openssl
- mbstring

Install Composer dependencies for Web Push before enabling reminders.

## 7. HTTPS

Keep HTTPS enabled because the PWA service worker, push notifications and secure session cookie rely on a secure production origin.

## 8. First production smoke test

After Hostinger finishes the Git deployment:

```text
https://projects.bhavyagupta.space
```

Verify in this order:

1. login/register;
2. task create / complete / delete;
3. Brain Dump / work update capture;
4. project creation;
5. Memory search;
6. Build semantic memory only after confirming the AI key/quota is available;
7. Daily Review;
8. AI Assistant;
9. calendar navigation and event creation;
10. logout / login again;
11. mobile PWA install and offline capture.

## 9. Mobile verification

Open the HTTPS site on the phone, sign in and install it as a PWA. Create a work update while online, then temporarily disconnect the phone and create another update. Reconnect and confirm the sync badge returns to `Online`.

## 10. Reminder cron

For Web Push reminders, configure a Hostinger cron that runs approximately every 5 minutes:

```bash
php /home/ACCOUNT/domains/YOUR_DOMAIN/public_html/cron/reminders.php
```

Use the real Hostinger account/domain path shown by the hosting panel; do not copy the example path literally.

## 11. RAG usage strategy

To conserve embedding quota:

- daily work capture is stored without an embedding request;
- Memory search uses keyword + recency by default;
- click **Build semantic memory** only when you want semantic retrieval;
- rebuild after a meaningful batch of new notes/work logs rather than after every keystroke.

## 12. Rollback

If the release has a production problem, restore the backed-up files and database. Keep the prior Git commit available for a fast Hostinger Git rollback.
