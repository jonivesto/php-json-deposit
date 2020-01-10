# SETUP
1. Setup a password in `auth.php`
2. Make sure `safe` folder has server-only permissions
3. Remove `header("Access-Control-Allow-Origin: *");` from `auth.php` if you don't need CORS

# get.php post params:
- token: any password you choose to setup

# set.php post params:
- token: any password you choose to setup
- json: json value you want to overwrite in `safe/data.json`
