<?php


// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;
use App\Models\Manifest;
// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Breadcrumbs::for('web.airports.create', function (BreadcrumbTrail $trail) {
//     $trail->push('Airports', route('web.airports.create'));
// });
// Breadcrumbs::for('web.vendors.create', function (BreadcrumbTrail $trail) {
//     $trail->push('Vendors', route('web.vendors.create'));
// });

// Breadcrumbs::for('web.testimonials.create', function (BreadcrumbTrail $trail) {
//     $trail->push('testimonials', route('web.testimonials.create'));
// });
// Breadcrumbs::for('web.passengers.create', function (BreadcrumbTrail $trail) {
//     $trail->push('passengers', route('web.passengers.create'));
// });
// Breadcrumbs::for('web.gallery.create', function (BreadcrumbTrail $trail) {
//     $trail->push('gallery', route('web.gallery.create'));
// });
Breadcrumbs::macro('resource', function (string $name, string $title) {
    // Home > Blog
    Breadcrumbs::for("web.{$name}.index", function (BreadcrumbTrail $trail) use ($name, $title) {
        $trail->parent('home');
        $trail->push($title, route("web.{$name}.index"));
    });
    // Breadcrumbs::for("web.{$name}.edit", function (BreadcrumbTrail $trail, $model) use ($name, $title) {
    //     $trail->parent("web.{$name}.show", $model);
    //     $trail->push("Edit {$title}", route("web.{$name}.edit", $model->id));
    // });
    // Home > Blog > New
    Breadcrumbs::for("web.{$name}.create", function (BreadcrumbTrail $trail) use ($name, $title) {
        $trail->parent("web.{$name}.index");
        $trail->push('New '.$title, route("web.{$name}.create"));
    });

    // // Home > Blog > Post 123
    Breadcrumbs::for("web.{$name}.show", function (BreadcrumbTrail $trail) use ($name) {
        $trail->parent("web.{$name}.index");
        $trail->push('Details');
    });

    // Home > Blog > Post 123 > Edit
    // $modelName = 'App\Models\\'.$modelName;
    Breadcrumbs::for("web.{$name}.edit", function (BreadcrumbTrail $trail) use ($name) {

        $trail->parent("web.{$name}.index");
        $trail->push('Edit');
    });
});
Breadcrumbs::resource('post', 'Post');
Breadcrumbs::resource('category', 'Category');
Breadcrumbs::resource('tag', 'Tag');
Breadcrumbs::resource('vendors', 'Vendors');
Breadcrumbs::resource('airports', 'Airports');
Breadcrumbs::resource('passengers', 'Passengers');
Breadcrumbs::resource('testimonials', 'Testimonials');
Breadcrumbs::resource('gallery', 'Gallery');
Breadcrumbs::resource('leadership', 'Leadership');
Breadcrumbs::for('web.setting.system', function (BreadcrumbTrail $trail){
    $trail->push('System Setting');
});


// Breadcrumbs::resource('post', 'Post');
// Breadcrumbs::resource('onlineBooking', 'OnlineBooking');
Breadcrumbs::resource('menu', 'Menu');
// Breadcrumbs::resource('routes', 'Route');
// Breadcrumbs::resource('consignment', 'Consignment');
// Breadcrumbs::resource('merchandise-type', 'Merchandise Type');
// Breadcrumbs::resource('book', 'Book');
// Breadcrumbs::resource('pen', 'Pen');
// Booking
