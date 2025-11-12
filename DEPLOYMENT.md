# 🚂 Railway Deployment Guide for SeedShare

## Prerequisites
- Railway account (sign up at https://railway.app)
- Git installed
- Your code pushed to GitHub (or use Railway CLI)

## 🚀 Deployment Steps

### Option 1: Deploy via GitHub (Recommended)

1. **Push your code to GitHub:**
   ```bash
   git init
   git add .
   git commit -m "Initial commit - Ready for Railway deployment"
   git branch -M main
   git remote add origin https://github.com/isuru882/seed_share.git
   git push -u origin main
   ```

2. **Set up Railway Project:**
   - Go to https://railway.app/new
   - Click "Deploy from GitHub repo"
   - Select your `seed_share` repository
   - Railway will auto-detect PHP and deploy

3. **Add MySQL Database:**
   - In your Railway project dashboard
   - Click "+ New" → "Database" → "Add MySQL"
   - Railway will automatically provide connection environment variables

4. **Configure Environment Variables** (Auto-configured):
   Railway MySQL automatically sets:
   - `MYSQLHOST`
   - `MYSQLUSER`
   - `MYSQLPASSWORD`
   - `MYSQLDATABASE`
   - `MYSQLPORT`

5. **Initialize Database:**
   - Go to MySQL service in Railway
   - Click "Data" tab
   - Click "Query" and run the contents of `init.sql`
   
   OR use Railway CLI:
   ```bash
   railway run mysql -h $MYSQLHOST -u $MYSQLUSER -p$MYSQLPASSWORD $MYSQLDATABASE < init.sql
   ```

6. **Access Your App:**
   - Railway generates a public URL: `https://yourapp.up.railway.app`
   - Click on your web service → "Settings" → "Generate Domain"

---

### Option 2: Deploy via Railway CLI

1. **Install Railway CLI:**
   ```bash
   npm i -g @railway/cli
   ```

2. **Login to Railway:**
   ```bash
   railway login
   ```

3. **Initialize Project:**
   ```bash
   railway init
   ```

4. **Add MySQL Database:**
   ```bash
   railway add --database mysql
   ```

5. **Deploy:**
   ```bash
   railway up
   ```

6. **Open in Browser:**
   ```bash
   railway open
   ```

---

## 🔧 Configuration Files Explained

### `nixpacks.toml`
- Configures PHP 8.2 with required extensions (mysqli, pdo)
- Sets the start command for PHP built-in server

### `railway.json`
- Defines build and deployment configuration
- Specifies restart policies

### `dataBase.php`
- Updated to use Railway environment variables
- Falls back to localhost for local development

### `init.sql`
- Database schema for seeds table
- Run this in Railway MySQL to create tables

---

## 📝 Environment Variables Reference

Your `dataBase.php` now reads from these Railway-provided variables:

| Variable | Description | Auto-set by Railway |
|----------|-------------|---------------------|
| `MYSQLHOST` | Database host | ✅ Yes |
| `MYSQLUSER` | Database username | ✅ Yes |
| `MYSQLPASSWORD` | Database password | ✅ Yes |
| `MYSQLDATABASE` | Database name | ✅ Yes |
| `MYSQLPORT` | Database port (3306) | ✅ Yes |

---

## 🧪 Local Testing

To test locally with Railway's database:

```bash
# Link to your Railway project
railway link

# Run locally with Railway environment
railway run php -S localhost:8000
```

Visit: http://localhost:8000

---

## 🐛 Troubleshooting

### Database Connection Issues
```bash
# Check environment variables
railway variables

# View logs
railway logs
```

### Port Issues
Railway automatically sets `$PORT` - the app uses this in `nixpacks.toml`

### MySQL Not Connected
- Make sure MySQL service is running in Railway
- Verify environment variables are set
- Check that `init.sql` was executed

---

## 💰 Pricing

- **Free Tier**: $5 credit/month (enough for hobby projects)
- **Pro Plan**: $20/month for unlimited usage
- Each service (web + database) consumes resources

---

## 📚 Additional Resources

- [Railway Docs](https://docs.railway.app/)
- [Railway PHP Guide](https://docs.railway.app/guides/php)
- [Railway MySQL](https://docs.railway.app/databases/mysql)

---

## ✅ Post-Deployment Checklist

- [ ] MySQL database is running
- [ ] Environment variables are configured
- [ ] Database tables created (`init.sql` executed)
- [ ] Custom domain generated
- [ ] App is accessible via URL
- [ ] Test add seed functionality
- [ ] Test view seeds functionality

---

🎉 **Your SeedShare app should now be live on Railway!**
