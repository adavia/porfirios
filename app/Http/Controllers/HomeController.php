<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
  public function index() {
    $menu = [
      "starters" => [
        [
          "name" =>"EL TÍPICO ELOTE",
          "img" => "/images/menu_elote.jpg",
          "description" => "Prepáralo a tu gusto con mayonesa, chile piquín, limón y queso canasto."
        ],
        [
          "name" =>"TAMAL PORFIRIO’S",
          "img" => "/images/menu_tamal.jpg",
          "description" => "De pollo con salsa verde, aguacate, queso canasto y crema."
        ],
        [
          "name" =>"GUACAMOLE",
          "img" => "/images/menu_guacamole.jpg",
          "description" => "Preparado en molcajete."
        ],
        [
          "name" =>"HUARACHITOS DE CARNE – (2 piezas)",
          "img" => "/images/menu_tamal.jpg",
          "description" => "Con arrachera, frijol, lechuga, queso y crema."
        ],
        [
          "name" =>"TORTITAS AHOGADAS – (3 piezas)",
          "img" => "/images/menu_guacamole.jpg",
          "description" => "Mini birotes, salsa roja y carnitas de cerdo."
        ],
        [
          "name" =>"ESQUITES DE CARRITO – (3 piezas)",
          "img" => "/images/menu_elote.jpg",
          "description" => "Preparados al gusto."
        ],
        [
          "name" =>"CALAMAR EN COSTRA DE CHILES",
          "img" => "/images/menu_tamal.jpg",
          "description" => "Aros de calamar empanizados con chile guajillo, ancho, chipotle, de árbol y pasilla."
        ],
        [
          "name" =>"CHICHARRÓN TAMULADO",
          "img" => "/images/menu_guacamole.jpg",
          "description" => "Con salsa tamulada (chile habanero, tomate verde, ajo, cebolla, cilantro y jalapeño)."
        ],
        [
          "name" =>"TAQUITOS DORADOS DE JAIBA",
          "img" => "/images/menu_elote.jpg",
          "description" => "Tradicional receta veracruzana."
        ],
        [
          "name" =>"TACOS DE CANASTA – (8 piezas)",
          "img" => "/images/menu_tamal.jpg",
          "description" => "Chicharrón, pollo en adobo, papa y frijol."
        ],
        [
          "name" =>"CAZUELA DE TUÉTANO – (2 piezas)",
          "img" => "/images/menu_guacamole.jpg",
          "description" => "Tuétano asado."
        ],
        [
          "name" =>"PULPO A LA MEXICANA",
          "img" => "/images/menu_tamal.jpg",
          "description" => "Preparado con jitomate, cebolla y cilantro."
        ],
        [
          "name" =>"CARNITAS DE ATÚN",
          "img" => "/images/menu_elote.jpg",
          "description" => "Cubos de atún con aguacate, cilantro, cebolla y limón."
        ],
        [
          "name" =>"CARNITAS DE PULPO",
          "img" => "/images/menu_guacamole.jpg",
          "description" => "Cubos de pulpo con aguacate, cilantro, cebolla y limón."
        ]
      ],
      "salads" => [
        [
          "name" =>"SOPA MANOLO",
          "img" => "/images/menu_elote.jpg",
          "description" => "Mezcla de crema de frijol con tocino y sopa de fideos."
        ],
        [
          "name" =>"FIDEO SECO",
          "img" => "/images/menu_guacamole.jpg",
          "description" => "Servido con crema, queso panela, aguacate y chipotle."
        ],
        [
          "name" =>"JUGO DE CARNE",
          "img" => "/images/menu_tamal.jpg",
          "description" => "Servido con cebolla, cilantro, chile jalapeño y limón."
        ],
        [
          "name" =>"SOPA DE TORTILLA",
          "img" => "/images/menu_elote.jpg",
          "description" => "La receta tradicional."
        ]
      ]
    ];

    $locations = [
      "masaryk" => [
        "name" => "Masaryk CDMX",
        "map" => "map-masaryk",
        "lat" => 40.674,
        "lng" => -73.945,
        "address" => "Av. Presidente Masaryk No. 214. Col. Polanco, Del. Miguel Hidalgo, Ciudad de México. C.P. 11580",
        "open_hours" => "13:00hrs – 1:00hrs",
        "phones" => "(55) 5280 1494",
        "contact_reservation" => "ventas@andermail.com",
        "contact_restaurant" => "info.polanco@porfirios.com.mx"
      ],
      "altavista" => [
        "name" => "Altavista CDMX",
        "map" => "map-altavista",
        "lat" => 40.674,
        "lng" => -73.945,
        "address" => "Av. Desierto de los Leones No. 67, Col. San Ángel, Ciudad de México, C.P. 01000",
        "open_hours" => "13:00hrs – 1:00hrs",
        "phones" => "(55) 5616 3645",
        "contact_reservation" => "ventas@andermail.com",
        "contact_restaurant" => "info.altavista@porfirios.com.mx"
      ],
      "arcosbosque" => [
        "name" => "Arcos Bosques CDMX",
        "map" => "map-arcosbosques",
        "lat" => 40.674,
        "lng" => -73.945,
        "address" => "Paseo de los Tamarindos No. 90, Loc PB-42, Col. Bosques de las Lomas, Del. Cuajimalpa, Ciudad de México, C.P. 05120",
        "open_hours" => "13:00hrs – 1:00hrs",
        "phones" => "(55) 9135 0215 / 0216 / 0217",
        "contact_reservation" => "ventas@andermail.com",
        "contact_restaurant" => "info.arcosbosques@porfirios.com.mx"
      ],
      "cancun" => [
        "name" => "Cancún",
        "map" => "map-cancun",
        "lat" => 40.674,
        "lng" => -73.945,
        "address" => "Blvd. Kukulcan Km 14.2, No.1, Zona Hotelera, Cancún, Q. Roo., C.P.77500",
        "open_hours" => "3:00hrs – 1:00hr",
        "phones" => "(998) 840 6040",
        "contact_reservation" => "ventas@andermail.com",
        "contact_restaurant" => "info.cancun@porfirios.com.mx"
      ]
    ];

    return view("home.index", compact("menu", "locations"));
  }

  public function events() {
    return view("home.event");
  }

  public function gallery() {
    $items = [];

    $client = new \GuzzleHttp\Client;
    $url = sprintf("https://www.instagram.com/%s/media", "porfiriosrestaurante");
    $response = $client->get($url);
    $items = json_decode((string) $response->getBody(), true)["items"];

    return view("home.gallery", compact("items"));
  }

  public function groups() {
    return view("home.group");
  }
}
