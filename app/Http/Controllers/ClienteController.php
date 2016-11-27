<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ClienteController extends Controller{

      public function index(){
          $Clientes  = Cliente::all();
          return response()->json($Clientes);
      }

      public function get($id){
          $Cliente  = Cliente::find($id);
          return response()->json($Cliente);
      }

      public function create(Request $request){
          $Cliente = Cliente::create($request->all());
          return response()->json($Cliente);
      }

      public function delete($id){
          $Cliente  = Cliente::find($id);
          $Cliente->delete();

          return response()->json('excluído com sucesso');
      }

      public function update(Request $request,$id){
          $Cliente  = Cliente::find($id);
          $Cliente->nome = $request->input('nome');
          $Cliente->sobrenome = $request->input('sobrenome');
          $Cliente->email = $request->input('email');
          $Cliente->save();

          return response()->json($Cliente);
      }

}
?>
