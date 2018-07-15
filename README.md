# UGM Online Proceeding
Online proceeding of Universitas Gadjah Mada

## How to Install
1. Clone this repository to your local.
2. Run `composer install`
3. Make new `.env` based on `.env.example`. Don't forget to modify the database connection on `.env`.
4. Run `php aritsan key:generate`.
5. Run `php artisan migrate --seed`.
8. Run `php artisan passport:install`. Copy passport grant `client id` and `client_secret` to your `.env`.
9. Run `npm install` to install the frontend dependency
10. Run `npm run dev` to compile frontend assets 
11. Login and create a Private Access Token. Copy the token to `API_TOKEN_DEVELOPMENT` in `.env`.

# Credits
## Contributors
- [@w1lldone](https://github.com/w1lldone)

## Development
- Built with [Laravel 5.6](https://laravel.com) PHP Framework
- [Passport](https://laravel.com/docs/5.6/passport) for API Security
- Frontend using [Vue.js 2.5](https://vuejs.org/), [Vuex](https://vuex.vuejs.org/), [Vue Router](https://router.vuejs.org/)
