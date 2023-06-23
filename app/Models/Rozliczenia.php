<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rozliczenia extends Model
{
    public $timestamps = false;

    //Stałe opisujące dostępne kolumny:
    public const FIELD_ID = 'id';
    public const FIELD_ID_ZLECENIA = 'idZlecenia';
    public const FIELD_ID_OPIEKUNA = 'idOpiekuna';
    public const FIELD_ROZLICZENIA = 'rozliczenieFinansowe';
    //Nazwa tabeli powiązanej z modułem
    protected $table = 'rozliczenia';

    //Klucz główny
    protected $primaryKey = self::FIELD_ID;

    //Pola, które mogą być wypełniane masowo
    protected $fillable = [
    self::FIELD_ID_ZLECENIA,
    self::FIELD_ID_OPIEKUNA,
    self::FIELD_ROZLICZENIA,
    ];
}
