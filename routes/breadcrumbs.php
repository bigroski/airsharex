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

Breadcrumbs::macro('resource', function (string $name, string $title) {
    // Home > Blog
    Breadcrumbs::for("web.{$name}.index", function (BreadcrumbTrail $trail) use ($name, $title) {
        $trail->parent('home');
        $trail->push($title, route("web.{$name}.index"));
    });

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




Breadcrumbs::for("web.booking.batch-list", function (BreadcrumbTrail $trail) {
    $trail->parent("web.booking.index");
    $trail->push('Bulk Booking', route("web.booking.batch-list"));
});

Breadcrumbs::for("web.booking.manual-bulk", function (BreadcrumbTrail $trail) {
    $trail->parent("web.booking.index");
    $trail->push('Manual Booking');
});

Breadcrumbs::for("web.manifest.inventory", function (BreadcrumbTrail $trail) {
    $trail->parent("web.manifest.index");
    $trail->push('Inventory');
});
Breadcrumbs::for("web.bills.accounts", function (BreadcrumbTrail $trail) {
    $trail->parent("web.bills.index");
    $trail->push('Create Information');
});





Breadcrumbs::for("web.booking.bulk", function (BreadcrumbTrail $trail) {
    $trail->parent("web.booking.batch-list");
    $trail->push('Create ');
});


Breadcrumbs::for("merchendise.receive", function (BreadcrumbTrail $trail) {
    $trail->parent("web.manifest.index");
    $trail->push('Receive Merchandise');
});

Breadcrumbs::for('web.setting.system', function (BreadcrumbTrail $trail){
    $trail->push('System Setting');
});


Breadcrumbs::resource('post', 'Post');
Breadcrumbs::resource('onlineBooking', 'OnlineBooking');
Breadcrumbs::resource('menu', 'Menu');


Breadcrumbs::resource('category', 'Category');
Breadcrumbs::resource('tag', 'Tag');
Breadcrumbs::resource('comment', 'Comment');

Breadcrumbs::resource('booking', 'Booking');
Breadcrumbs::resource('manifest', 'Manifest');
Breadcrumbs::resource('page', 'Page');
Breadcrumbs::resource('bills', 'Bills');
Breadcrumbs::resource('device', 'Device');
// Breadcrumbs::resource('bills-rules','Bill RUles');
// Breadcrumbs::resource('logistic-request','Logistic Request');
// Breadcrumbs::resource('consignee', 'Consignee');
// Breadcrumbs::resource('logistic-provider', 'Logistic Provider');
// Breadcrumbs::resource('cnGroup', 'Cn Group');
// Breadcrumbs::resource('logistics', 'Logistics');
// Breadcrumbs::resource('statement', 'Statement');
// Breadcrumbs::resource('payment', 'Payment');
// Breadcrumbs::resource('credit', 'Credit');
// Breadcrumbs::resource('company', 'Company');
// Breadcrumbs::resource('customer', 'Customer');
// Breadcrumbs::resource('branch', 'Branch');
// Breadcrumbs::resource('employee', 'Employee');
// Breadcrumbs::resource('pickup-request','Pickup Request');
// Breadcrumbs::resource('group', 'Group');
// Breadcrumbs::resource('pickup', 'Pickup');
// Breadcrumbs::resource('drop-off', 'Drop Off');
// Breadcrumbs::resource('role', 'Role');
// Breadcrumbs::resource('location', 'Location');
// Breadcrumbs::resource('customer-rate', 'Customer Rate');
// Breadcrumbs::resource('delivery-rate', 'DeliveryRate');
// Breadcrumbs::resource('sms-group', 'SMSGroup');
// Breadcrumbs::resource('sms', 'SMS');
Breadcrumbs::resource('countries', 'Country');
// Breadcrumbs::resource('countries/{country}/state', 'State');
Breadcrumbs::resource('routes', 'Route');
Breadcrumbs::resource('consignment', 'Consignment');
Breadcrumbs::resource('merchandise-type', 'Merchandise Type');
Breadcrumbs::resource('book', 'Book');
Breadcrumbs::resource('pen', 'Pen');
// Booking
