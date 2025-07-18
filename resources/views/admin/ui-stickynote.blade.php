<?php $page = 'ui-stickynote'; ?>
@extends('layout.mainlayout_admin')
@section('content')
<div class="page-wrapper cardhead">
    <div class="content ">
    
        <!-- Page Header -->
        @component('admin.components.breadcrumb_admin')
        @slot('title')
     Sticky Note
        @endslot
    @endcomponent	
        
        <div class="row">
        
            <!-- Sticky -->
            <div class="col-md-12">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Sticky Note <a class="btn btn-primary float-sm-end m-l-10" id="add_new" href="javascript:void(0);">Add New Note</a></h5>
                    </div>
                    <div class="card-body">
                         <div class="sticky-note" id="board"></div>
                    </div>
                </div>
            </div>
            <!-- /Sticky -->
                
        </div>
    
    </div>		
</div>
@component('admin.components.themesettings')
@endcomponent
@endsection
