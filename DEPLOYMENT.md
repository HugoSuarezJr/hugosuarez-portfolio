# Free hosting migration guide

## Recommended setup

Host the generated static site on **GitHub Pages** and keep `hugosuarez.com` as the custom domain. Hosting costs $0 for a public repository on GitHub Free. The only ongoing cost is the annual domain renewal.

This repository now includes an automated deployment workflow. Every push to `main` installs locked dependencies, builds the assets, exports the Laravel home page to static HTML, and deploys the result. The public site does not run PHP, expose a database, or need environment secrets.

## 1. Verify the site locally

Install PHP 8.2+, Composer, and Node.js 20+, then run:

```bash
composer install
npm ci
cp .env.example .env
php artisan key:generate
npm run build:static
```

The deployable site will be in `dist/`. Preview it with:

```bash
php -S localhost:8080 -t dist
```

Open <http://localhost:8080> and verify the links and images.

## 2. Publish the code

Commit the changes and push them to the repository's `main` branch:

```bash
git add .
git commit -m "Optimize portfolio and add free static hosting"
git push origin main
```

## 3. Enable GitHub Pages

1. Open the GitHub repository.
2. Go to **Settings → Pages**.
3. Under **Build and deployment**, choose **GitHub Actions** as the source.
4. Open the repository's **Actions** tab and select **Deploy portfolio to GitHub Pages**.
5. Wait for the workflow to finish. GitHub will show a temporary `github.io` address.

## 4. Connect `hugosuarez.com`

Do this before cancelling Hostinger so there is no avoidable downtime.

1. In **GitHub → repository → Settings → Pages**, enter `hugosuarez.com` under **Custom domain** and save it.
2. At the company that manages the domain's DNS, replace the current website records with GitHub Pages records.
3. For the apex domain (`hugosuarez.com`), add these four `A` records:

   ```text
   185.199.108.153
   185.199.109.153
   185.199.110.153
   185.199.111.153
   ```

4. For `www`, add a `CNAME` record pointing to:

   ```text
   hugosuarezjr.github.io
   ```

5. Remove old `A`, `AAAA`, or `CNAME` records for `@` and `www` that still point to Hostinger. Do not remove MX/TXT records if Hostinger currently handles email for the domain.
6. Wait for GitHub Pages to confirm the DNS check, then enable **Enforce HTTPS**.
7. Test both `https://hugosuarez.com` and `https://www.hugosuarez.com` in a private browser window.

DNS changes commonly take minutes but can take up to 24 hours. Keep Hostinger active until the custom domain works over HTTPS everywhere you care about.

## 5. Leave Hostinger safely

1. Download a final backup of the Hostinger files, databases, and any email you need.
2. Confirm the GitHub Pages site works and that domain email still sends and receives.
3. Turn off Hostinger auto-renewal or cancel the hosting plan.
4. If Hostinger is also the domain registrar, keep the domain registration there or transfer it separately. Cancelling web hosting must not cancel the domain.

## Updating the portfolio later

Edit the existing Laravel Blade files as before. Test with `npm run build:static`, then push to `main`. GitHub Actions will redeploy automatically.

## Optional Cloudflare Pages alternative

Cloudflare Pages also has a generous free tier and supports custom response headers. If you prefer it, connect this GitHub repository in **Workers & Pages**, use `npm run build:static` as the build command, and `dist` as the output directory. Add `APP_ENV=production`, `APP_DEBUG=false`, `SESSION_DRIVER=array`, and a generated `APP_KEY` as build variables. Connect the custom domain only after the first Pages deployment succeeds.

GitHub Pages is the default recommendation here because the deployment workflow is already included and it avoids another hosting account.
