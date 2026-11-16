# jandolejs.cz

My personal website

## Production
Runs on root@157.90.172.155 from a git checkout in `/var/www/jandolejs_cz`
(no Portainer, no GHCR – the image is built on the server).

- `.env` next to the checkout (chmod 600) holds `dsn`, `user`, `password` – see `.env.template`
- deploy after pushing to main: `ssh -A root@157.90.172.155 /var/www/jandolejs_cz/deploy.sh`

## Init - local
- copy .env.template to .env
- modify .env as you want
- copy src/config/local.plain.neon to src/config/local.neon
- modify src/config/local.neon as you want
- docker compose up -d --build
