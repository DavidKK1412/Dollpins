@extends('dashboard')

@section('dashboard-styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <link rel="stylesheet" href="{{asset('css/panels/employees/new.css')}}">
@endsection

@section('dashboard-panel')
    <div class="form-container">
        <h2>Detalle de transacción</h2>

        <img alt="Company logo" class="logo" height="50" src="{{ asset('assets/logo.png') }}" width="50"/>

        <form action="" method="" id="">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <select name="type_id" class="form-select" id="prepend-button-single-field" data-placeholder="Categoría" disabled>
                        <option value="{{$transaction->type->id}}">{{$transaction->type->name}}</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input name="amount" value="{{$transaction->amount}}" class="form-control" placeholder="Precio" type="number" disabled/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea name="description" class="form-control" placeholder="Descripción" disabled>{{$transaction->description}}</textarea>
                </div>
            </div>


        </form>
    </div>
@endsection

@section('dashboard-scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        $( '#prepend-button-single-field' ).select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ),
        } );

    </script>
@endsection