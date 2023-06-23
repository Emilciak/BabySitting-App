<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opiekun extends Model
{
    
        // use HasFactory;

    // jeśli nie prowadzimy informacji timestamps
    // to należy zadeklarować to w modelu
    public $timestamps = false;

    //Stałe opisujące dostępne kolumny:
    public const FIELD_ID = 'id';
    public const FIELD_IMIE= 'imie';
    public const FIELD_NAZWISKO = 'nazwisko';
    public const FIELD_WIEK = 'wiek';
    public const FIELD_ILE_W_ZAWODZIE = 'ileLatWzawodzie';

    //Nazwa tabeli powiązanej z modułem
    protected $table = 'opiekun';

    //Klucz główny
    protected $primaryKey = self::FIELD_ID;

    //Pola, które mogą być wypełniane masowo
    protected $fillable = [
        self::FIELD_IMIE,
        self::FIELD_NAZWISKO,
        self::FIELD_WIEK,
        self::FIELD_ILE_W_ZAWODZIE,
    ];

    //Przy pomocy tej metody będzie można pobierać
    // załogantów danego modułu statku
    // public function opiekunModules()
    // {
    //     return $this->hasMany(OpiekunModules::class);
    // }
}
