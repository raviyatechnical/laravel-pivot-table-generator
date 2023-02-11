<br />
<div align="center">
<img src="https://www.rajtechnologies.com/ui/images/raj-technologies-logo-top-panel.jpg" alt="Logo" width=120>
  
<h1 align="center">Laravel Pivot Table Generator</h1>

  <p align="center">
    Quickly generate pivot tables for your projects!
  </p>
<br><br>
</div>

## Table of Contents
  <ol>
    <li><a href="#installation">Installation</a></li>
    <li>
      <a href="#usage">Usage</a>
    </li>
    <li><a href="#more-generator-packages">More generator packages</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
  </ol>

## Installation
Install the package with composer.
```bash
composer require raviyatechnical/laravel-pivot-table-generator
```

## Usage
Run the following command on the command-line to generate a new migration for the pivot table.
```
php artisan make:pivot {first_table_name} {second_table_name}
```

The command will create a new migration in ```database/migrations```. Run the migrations to create the table.
```
php artisan migrate
```

## Contributing
Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.