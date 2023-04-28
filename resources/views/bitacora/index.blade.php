@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Bitácora</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!--Se muestran los registros de la bitácora de la db-->
                            <table class="table table-striped mt-2">
                                <thead style="background: #667080;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Usuario</th>
                                    <th style="color:#fff;">Contexto del evento</th>
                                    <th style="color:#fff;">Evento</th>
                                    <th style="color:#fff;">Dirección IP</th>
                                </thead>

                                <tbody>
                                    @foreach ($bitacoras as $bitacora)
                                    <tr>
                                        <td style="display: none">{{$bitacora->id_bitacora}}</td>
                                        <td>{{$bitacora->hora_accion}}</td>
                                        <td>{{$bitacora->relacionUsuarios->name}}</td>
                                        <td>{{$bitacora->contexto_Evento}}</td>
                                        <td>{{$bitacora->nombre_Evento}}</td>
                                        <td>{{$bitacora->ip_Equipo}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

