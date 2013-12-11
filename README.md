# Web-FindHireMe

**FindHireMe** is a website to find information about open jobs and apply to it. There are three types of user’s role in this website: Recruiter, Job Seeker, and Guest (non-logged-in user). The recruiter can manage the open job on the website, the job seeker can look at the information and apply for the job, while the guest can only look at the information of the jobs.


## Contributors

<table>
  <tr>
    <td align="center">
      <a href="https://AVM-Martin.my.id/">
        <img src="https://github.com/AVM-Martin.png" width="100px;" alt=""/><br />
        <sub><b>Andreas Martin</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/ekeitaro/">
        <img src="https://github.com/ekeitaro.png" width="100px;" alt=""/><br />
        <sub><b>Edward Keitaro</b></sub>
      </a>
    </td>
  </tr>
</table>


## Creative Thinking

  * Use SOFT DELETE to keep data integrity on the status page.
  * Create a lot of view components to prevent duplicate codes.
  * Use factory faker as database seeder (with a lot of settings).
  * Hide unused timestamps from database tables.


## Deployment

  * Create MySQL database named `findhireme` on `127.0.0.1:3306` with `root` username and no password. You can customize the ip address, port, database username or password based on your own machine setup.
  * Run `composer install` to download all dependencies needed.
  * Run `cp .env.example .env && php artisan key:generate` to prepare all important data.
  * Run `php artisan storage:link` to create symbolic link to public storage directory.
  * Run `composer dump-autoload` to autoload seeder files.
  * Run `php artisan migrate --seed` to create and fill the database.
  * Run `php artisan serve` and access the webapp on localhost port 8000.


## References

Here a list of URLs that had been accessed and (maybe) give some insights to this project

  * [Laravel Blade Documentation](https://laravel.com/docs/7.x/blade)
  * [Inline Radio Button](https://stackoverflow.com/questions/49797169/multiple-radio-buttons-on-one-line-bootstrap-4/49797531)
  * [Catatan Laravel :: Upload Image Via Laravel Storage](https://alfinchandra4.medium.com/catatan-laravel-upload-imagevia-laravel-storage-379a1dc9373)
  * [Password Validation with Rules](https://www.itsolutionstuff.com/post/laravel-change-password-with-current-password-validation-exampleexample.html)
  * [Remember Logged-In User](https://laravel.com/docs/7.x/authentication#remembering-users)
  * [Get soft-deleted data with Eloquent](https://laraveldaily.com/belongsto-and-withtrashed-linking-to-deleted-row/)
  * [Display line break inside Laravel Blade](https://www.quora.com/How-can-I-use-a-line-break-tag-inside-Laravel-blade-template-engine)
  * [Eloquent Query with Eager Loading](https://stackoverflow.com/questions/29989908/laravel-where-on-relationship-object/29990340#29990340)
  * [Change Faker locale](https://stackoverflow.com/questions/34496720/change-faker-locale-in-laravel-5-2/42594893#42594893)
  * [Filter queries with pagination](https://www.codermen.com/blog/93/how-to-keep-filter-data-after-the-click-to-next-button-in-laravel-pagination)
  * [Laravel factory states](https://laravel-news.com/laravel-model-factory-states)


## Image Resources

  * https://commons.wikimedia.org/wiki/File:Google_%22G%22_Logo.svg
  * https://www.stickpng.com/img/icons-logos-emojis/social-media-icons/square-facebook-icon
  * https://seeklogo.com/free-vector-logos/twitter
  * https://www.linkedin.com/company/traveloka-com
  * https://www.tiket.com/
  * https://www.tokopedia.com/merchandise
  * https://www.pngdownload.id/download/shopee.html
  * https://www.bukalapak.com/c/komputer/laptop/m-lenovo


<hr/>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
