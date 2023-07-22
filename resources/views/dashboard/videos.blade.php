
@extends('adminlte::page')


@section('title', 'Videos')


@section('content_header')
    <h1 class="m-0 text-dark">Gestion de contenido</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">       
            <div >
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="table-responsive">
                      <table style="width: 100%!important;" class="table table-striped table-hover">
                        <thead
                          class="pl-4 border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                          <tr>
                            <th scope="col" class="px-6 pl-4 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Titulo</th>
                            <th scope="col" class="px-6 py-4">Imagen</th>
                            <th scope="col" class="px-6 py-4">Categoria</th>
                            <th scope="col" class="px-6 py-4">Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                             <tr>
                                <td class="pl-4">{{ $video->id }}</td>
                                <td class="pl-4">{{ $video->title }}</td> 
                                <td class="pl-4">   <img width="60px" src="{{ $video->img }}"> </td> 
                                <td class="pl-4">{{ $video->category }}</td> 
                                <td class="pl-4"><button class="btn btn-primary">GESTIONAR</button></td>                            
                            </tr>   
                            @endforeach
                            
                        </tbody>
                      </table>
                      {{-- pagination --}}
                      <div style="margin-right: 40%;">
                        {{ $videos->links() }}
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@stop
