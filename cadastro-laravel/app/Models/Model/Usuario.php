<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limite)
    {
        $sql = self::select(['id', 'nome', 'email', 'data_cadastro'])->limit(
            $limite
        );
        dd($sql->toSqlt());
    }

    public static function cadastrar(Request $request)
    {
        $sql = self::insert([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'data_cadastro' => DB::raw('now()'),
        ]);

        dd($sql->toSqlt(), $request->all());
    }
}
