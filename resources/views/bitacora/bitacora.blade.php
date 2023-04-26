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
                            <a class="btn btn-warning" href="">Nuevo</a>
                            <!--Se muestra la bitácora-->
                            <table class="table table-striped mt-2">
                                <thead style="background: #6777ef;">
                                    <th style="color:#fff;">ID</th>
                                    <th style="color:#fff;">Datos</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Casa</td>
                                        <td>Prueba</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

