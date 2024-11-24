@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ __('menu.Menu') }} </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="">{{ __('menu.Dashboard') }}</a></li>
            <li class="breadcrumb-item active"> {{ __('menu.Menu Items') }} </li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                {{ __('menu.Manage Menu') }} 

                @if(auth()->user()->can('service.create'))
                <a href="{{ route('admin.menus.create',['type'=>'menu'])}}" class="btn btn-primary btn-sm btn_modal">
                        {{ __('menu.Item Add') }}
                </a>
                @endif
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>{{ __('menu.Sl') }}</th>                                        
                                        <th>{{ __('menu.Title') }}</th>                                
                                        <th>{{ __('menu.Serial') }}</th>                                
                                                                    
                                        <th style="width: 125px;">{{ __('menu.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $key=>$item)
                                    <tr>                                      
                                    
                                        <td> {{$key+1}}</td>                                                                    
                                        <td> {{$item->page->title}}</td>                                        
                                        <td> {{$item->serial}}</td>                                       
                                           
                                        <td>
                                            @can('menu.edit')
                                            <a href="{{ route('admin.menus.edit',[$item->id])}}" class="btn-sm btn_modal btn btn-primary"> 
                                                <i class="fa fa-edit "></i></a>
                                            @endcan
                                            @can('menu.delete')
                                                <a href="{{ route('admin.menus.destroy',[$item->id])}}" class="delete btn-sm btn btn-danger"> 
                                                    <i class="fa fa-trash "></i></a>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>


                
@endsection



