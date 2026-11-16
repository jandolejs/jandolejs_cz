# jandolejs.cz

My personal website – plain static HTML on **GitHub Pages** (served from `docs/`, custom domain in
`docs/CNAME`, proxied through Cloudflare). No PHP, no database, no server.

- `docs/` – the pages: `/`, `/about/`, `/kontakt/`, `/bank/`, `/cv/`, `/me/`, `404.html`
- `docs/media/` – images; `plan.png` is the flat floor plan used by Home Assistant

Deploy: push to `master` – Pages rebuilds automatically.
Local preview: `python3 -m http.server -d docs 8076`
