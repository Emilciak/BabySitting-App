<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dziecko extends Model
{
    // use HasFactory;
    public $timestamps = false;

    //Stałe opisujące dostępne kolumny:
    public const FIELD_ID = 'id';
    public const FIELD_IMIE= 'imie';
    public const FIELD_ID_RODZICA = 'idRodzica';

    //Nazwa tabeli powiązanej z modułem
    protected $table = 'dziecko';

    //Klucz główny
    protected $primaryKey = self::FIELD_ID;

    //Pola, które mogą być wypełniane masowo
    protected $fillable = [
        self::FIELD_IMIE,
        self::FIELD_ID_RODZICA,
    ];

    //Przy pomocy tej metody będzie można pobierać
    // załogantów danego modułu statku
    // public function Opiekun()
    // {
    //     return $this->hasMany(Opiekun::class);
    // }
}
