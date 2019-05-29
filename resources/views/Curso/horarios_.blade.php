@extends('templates.main')

@section('head')
	<link rel="stylesheet" type="text/css" href="/assets/extra-libs/multicheck/multicheck.css">
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="/dist/css/style.min.css" rel="stylesheet">
@endsection

@section('content')
       <div> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Horarios</h5>
                                <div class="table-responsive">
                                    <table id="estudiates" class="table table-striped table-bordered display">                                   
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('script')
 	<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="/dist/js/waves.js"></script>
    <script src="/dist/js/sidebarmenu.js"></script>
    <script src="/dist/js/custom.min.js"></script>
    <script src="/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        var dataSet = [

         <?php

                foreach ($cursos as $key => $item) 
                {
                echo "[ \"".$item->id_curso."\", \"".$item->curso."\", \"".$item->seccion."\", \"".$item->horario."\"
                	, \"".$item->salon."\"
                	, \"".$item->Catedratico."\"
                	, \"".$item->auxiliar."\"
            		],";
                }
        ?>
    ];
    $(document).ready(function() {
        $('#estudiates').DataTable( {
            data: dataSet,
             language : {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            scroller:    true,
            columns: [
            { title: "Código" },
            { title: "Curso" },
            { title: "Sección" },
            { title: "Horario" },
            { title: "Salón" },
            { title: "Catedrático" },
            { title: "Auxiliar" },
            ]
        } );
        var myTable = $('#estudiates').DataTable();

        myTable.fixedHeader.enable();

        $('#estudiates').on( 'click', 'tbody td', function () {
            myTable.cell( this ).edit( 'bubble' );
        } );

    } );
    </script>
@endsection