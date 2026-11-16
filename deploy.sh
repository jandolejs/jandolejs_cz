#!/usr/bin/env bash
# Deploy on the server: ssh -A root@157.90.172.155 /var/www/jandolejs_cz/deploy.sh
# (git pull goes over the forwarded SSH agent – the server has no own GitHub key)
set -euo pipefail
cd "$(dirname "$0")"
[ -f .env ] || { echo "Chybí .env (viz .env.template)"; exit 1; }

before=$(git rev-parse --short HEAD)
git pull --ff-only -q
after=$(git rev-parse --short HEAD)
echo "kód: $before → $after"

docker compose build -q
docker compose up -d --remove-orphans
docker image prune -f >/dev/null

for i in $(seq 1 30); do
    code=$(curl -s -o /dev/null -w '%{http_code}' http://127.0.0.1:8076/ || true)
    if [ "$code" = 200 ]; then echo "běží ($after)"; exit 0; fi
    sleep 1
done
echo "Web neodpovídá (HTTP $code) – docker logs jandolejs_cz_frontend"; exit 1
