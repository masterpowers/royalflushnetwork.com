# Royal Flush Network - Built With Fastest Server Implementation Built For Performance!

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

[Royal Flush Network](http://royalflushnetwork.com)

**To Do**
- [ ] Products(name,photo,model) and categories (many to many & nested)
- [ ] Admin CRUD Categories , Products, Show Products and Filter by Category
- [ ] Customer can Signup , Show Products, filter by category

** Added **
- [x] Links
- [x] Reviews


**Set Up **
- [x] Compile PHPRedis

**ENV SET UP **
- [x] Forge Server Set UP HHVM + Nginx + MariaDB + Socket.io + PHPRedis
- [x] PHP Redis for PHP7 As Broadcast Driver and Queue Driver
- [x] Memcached As Cached Driver
- [x] Database As Session Driver
- [x] Options To Use BrainTree or Stripe For Subscription
- [x] Facebook Apps Ready
- [x] Google Recaptcha Ready
- [x] Laravel ACL (Must Used Memcached as Cached Driver)
- [x] Russian Doll Caching Ready (Must used Memcached as Cached Driver)

** Optional **
- [ ] Uncomment AppServiceProvider Bouncer and Subscription(Braintree/Stripe)
- [ ] Option.Json Install the Array to Composer.json for (BrainTree/Stripe)

** Configureable **
```php artisan vendor:publish```
- [x] config/avatar.php [Laravolt/Avatar](https://github.com/laravolt/avatar) fonts located in resources/laravolt/avatar/fonts
- [x] AdminTableSeeder For Adding Roles and Permission [Silber/Bouncer](https://github.com/JosephSilber/bouncer)
- [x] Facebook Apps Config /config/laravel-facebook-sdk.php [SammyK/LaravelFacebookSdk](https://github.com/SammyK/LaravelFacebookSdk)
- [x] Eloquent Sluggable Config /config/sluggable.php [Cviebrock/Eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable)
- [x] Intervention Image Config /config/image.php [Intervention/image](https://github.com/Intervention/image)

** Facade Usable **
- [x] Bouncer [Silber/Bouncer](https://github.com/JosephSilber/bouncer)
- [x] Uuid [Webpatser/Laravel-Uuid](https://github.com/webpatser/laravel-uuid)
- [x] Facebook [SammyK/LaravelFacebookSdk](https://github.com/SammyK/LaravelFacebookSdk)
- [x] Avatar [Laravolt/Avatar](https://github.com/laravolt/avatar)
- [x] PHPRedis [Vetruvet/Laravel-Phpredis](https://github.com/vetruvet/laravel-phpredis)
- [x] NestedSet [lazychaser/Laravel-Nestedset](https://github.com/lazychaser/laravel-nestedset)


## Initial Set Up For Productions

1. Create FB Developers App

2. Create Google Recaptcha 

3. Create BrainTree / Stripe 

4. Create Cloudflare

5. Create Forge

6. Apply SSL

## Gulp Command Available ##
- [x] gulp
- [x] gulp watch
- [x] gulp compress (html-minifier)

## Artisan Optimization To be Added Upon Deployed##
```
php artisan clear-compiled
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan config:cache
php artisan route:cache
php artisan optimize
composer dumpautoload -o
php artisan queue:restart
```