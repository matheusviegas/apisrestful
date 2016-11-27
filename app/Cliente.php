<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

     protected $fillable = ['nome', 'sobrenome', 'email'];

     protected $table = "clientes";

}
?>
