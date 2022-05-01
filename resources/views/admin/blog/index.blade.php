@extends('layouts.adminLayout')


@section('content')
    

   <div class="articles">
        <div class="py-5">
            <h1 class="special-heading float-left">
                Mes <span>articles</span> :
                
            </h1>
            <div class="float-right">
                <a href="{{ route('admin.blog.create') }}" class="font-weight-bold btn btn-success"><i class="fas fa-plus"></i> Nouvel article</a>
            </div>
        </div>
        <div class="clearfix"></div>


       @forelse($posts as $post) 
            <div class="article mb-3 bg-white py-4 rounded shadow-sm px-3">
                <div style="font-size: 17px" class="title special-heading pb-2">{{ $post->title }}</div>
  
                <p class="pb-4" style="font-size: 15px">
                    <i class="fas fa-eye pr-2"></i> 
                    <strong>{{ $post->seens_count }}</strong> <br>
                    <i class="fas fa-clock pr-2"></i> Crée {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }} <br>
                    Dérniére modification : {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}
                </p>
                <a href="{{ route('admin.blog.edit', ["id" => $post->id]) }}" class="pr-3 btn btn-info btn-sm">edit</a>

                <form action="{{ route('admin.blog.delete', ["id" => $post->id] ) }}" method="POST" class="d-inline-block">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm return-confirm">Supprimer</button>
                </form>
                
            </div>
       @empty
            <p class="py-5">
                Aucun article
            </p>
       @endforelse


        <div class="pagination pt-4">
            {{ $posts->links() }}
        </div>


   </div>

@endsection

