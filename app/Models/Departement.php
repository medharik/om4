<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'adresse'];
    /**
     * Get all of the personnels for the Departement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnels(): HasMany
    {

        return $this->hasMany(Personnel::class, 'departement_id');
    }
    public static function couleur($nombre)
    {
        $col = "primary";
        if ($nombre == 0) {
            $col = "danger";
        }
        return $col;
    }
}
