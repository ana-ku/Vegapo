<?php

namespace app\string;

use m4\m4mvc\helper\Str;

class Url
{

  public function __construct ()
  {
    Str::$url = (object) self::$url;
  }

  protected static $url = [
  'CATEGORY_ADMIN_DELETE' => "/admin/kategorie/vymazat/",
	'CATEGORY_ADMIN_ADD' => "/admin/kategorie/pridat/",
	'CATEGORY_UPLOADS' => "/uploads/categories/",

	'ADMIN_CATEGORIES' => "/admin/kategorie/",
  'ADMIN_CATEGORIES_EDIT' => "/admin/kategorie/upravit/",
	'ADMIN_MESSAGES' => "/admin/messages/",
	'ADMIN_SUPERMARKETS' => "/admin/obchody/",
	'ADMIN_TAGS' => "/admin/tagy/",
	'ADMIN_PRODUCTS' => "/admin/produkty/",
	'ADMIN_TRASH' => "/admin/produkty/trash/",
	'ADMIN_REQUESTS' => "/admin/produkty/ziadosti/",
  'ADMIN_SUGGESTIONS' => "/admin/suggestions/",
  'ADMIN_NEWSLETTER' => "/admin/newsletter/",

	'ADMIN_ACCOUNT_UPDATE' => "/admin/users/update",
	'ADMIN_USERS' => "/admin/users/",
	'ADMIN_SETTINGS' => "/admin/home/settings",
	'ADMIN_CHANGELOG' => "/admin/home/changelog",
  'ADMIN_LOCALE' => '/admin/locale',
  'ADMIN_INFO' => '/admin/info',
  'ADMIN_EDITS' => '/admin/edits',

	'LOGOUT' => "/users/logout/",
	'LOGIN' => "/users/login",
	'ADMIN' => "/admin",
	'INDEX' => "/",
  'REGISTER' => "/users/register",

  'USER_UPDATE' => '/users/update',

	'SUPERMARKET_ADMIN_DELETE' => "/admin/obchody/vymazat/",
	'SUPERMARKET_ADMIN_EDIT' => "/admin/obchody/upravit/",
	'SUPERMARKET_ADMIN_ADD' => "/admin/obchody/pridat/",
	'SUPERMARKET_UPLOADS' => "/uploads/supermarkets/",

	'TAG_ADMIN_DELETE' => "/admin/tagy/vymazat/",
	'TAG_ADMIN_EDIT' => "/admin/tagy/upravit/",
	'TAG_ADMIN_ADD' => "/admin/tagy/pridat/",
	'TAG_UPLOADS' => "/uploads/tags/",

	'PRODUCT_ADMIN_DELETE' => "/admin/produkty/vymazat/",
	'PRODUCT_ADMIN_EDIT' => "/admin/produkty/upravit/",
  'PRODUCT_ADMIN_ADD' => "/admin/produkty/pridat/",
  'PRODUCT_ADD' => "/produkty/pridat/",
	'PRODUCT_UPLOADS' => "/uploads/products/",

	'TRASH_DELETE' => "/admin/produkty/trash/delete/",
	'TRASH_RECOVER' => "/admin/produkty/trash/recover/",
	'TRASH_MOVE' => "/admin/produkty/trash/move/",

	'REQUEST_ACCEPT' => "/admin/produkty/ziadosti/accept/",
	'REQUEST_DENY' => "/admin/produkty/ziadosti/deny/",

	'PROFILE_PAGE' => "/users",
  ];

  public static function get($key)
  {
    return self::$url[$key];
  }

  public static function getAll()
  {
    return self::$url;
  }

}
