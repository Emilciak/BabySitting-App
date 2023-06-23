<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zlecenia extends Model
{
    // use HasFactory;

    // jeśli nie prowadzimy informacji timestamps
    // to należy zadeklarować to w modelu
    public $timestamps = false;

    //Stałe opisujące dostępne kolumny:
    public const FIELD_ID = 'id';
    public const FIELD_ID_DZIECKA = 'idDziecka';
    public const FIELD_ID_OPIEKUNA = 'idOpiekuna';
    public const FIELD_CZAS = 'czasWminutach';
    //Nazwa tabeli powiązanej z modułem
    protected $table = 'zlecenia';

    //Klucz główny
    protected $primaryKey = self::FIELD_ID;

    //Pola, które mogą być wypełniane masowo
    protected $fillable = [
        self::FIELD_ID_DZIECKA,
        self::FIELD_ID_OPIEKUNA,
        self::FIELD_CZAS,

    ];

    // public function moduleRozliczenia()
    // {
    //     return $this->hasMany(RozliczeniaModules::class);
    // }
}
