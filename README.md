# jandolejs.cz

My personal website – plain static HTML served by nginx (no PHP, no database).

- `site/` – the pages: `/`, `/about/`, `/kontakt/`, `/bank/`, `/cv/`, `/me/`, `404.html`
- `site/media/` – images; `plan.png` is the flat floor plan used by Home Assistant
- `nginx.conf` – server config (directory URLs, 404 page, caching of `/media`)

## Production
Runs on root@157.90.172.155 from a git checkout in `/var/www/jandolejs_cz`
(the image is built on the server).

Deploy after pushing to master: `ssh -A root@157.90.172.155 /var/www/jandolejs_cz/deploy.sh`

## Local
`docker compose up -d --build` → http://localhost:8076
