@extends('layouts.default')
@section('titulo_pagina','Nutriólogo | Sección')
@section('titulo','Nutriólogo')
@section('subtitulo','Sección')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sección</h3>
            </div>
            <div class="form-group">
                    <label>Hoy es el dia del ...   </label>
                    <select>
                        <option>Manzana</option>
                        <option>Mango</option>
                        <option>Platano</option>
                        <option>Pera</option>
                    </select>
                
            </div>
            <div></div>
            <button class="btn btn-primary">Evaluar</button>
        </div>
    </div>
</div>
@endsection