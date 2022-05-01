@extends('layouts.adminLayout')


@section('styles')
    <script src="https://cdn.tiny.cloud/1/arfumr62tgjc3d58fow8b4v0f9jrj3437rwlh7vke5meqmwl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('content')
    
<div class="container">
    <div class="text-center py-4 special-heading">Modifier l'article</div>
    <div class="path">
        <a href="{{ route('admin.blog.index') }}">Blog</a> > <a href="">Modifier l'article n° {{ $post->id }}</a>
    </div>

    
    <form action="{{ route('admin.blog.update', ['id' => $post->id ]) }}" method="POST" class="py-5" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="title">Titre de l'article</label>
            <input type="text" id="title" value="{{ $post->title }}" name="title" placeholder="Titre de l'article" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description de l'article</label>
            <textarea id="description" placeholder="Description de l'article" name="summary" id="" cols="30" rows="5" class="form-control">
                {{ $post->summary }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <br>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </div>
        <script>

            tinymce.init({
                selector: '#content',
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright  alignjustify | bullist numlist outdent indent | link  a11ycheck  casechange checklist code formatpainter pageembed permanentpen table',
                toolbar_mode: 'floating',
                block_unsupported_drop: true,
                plugins: [
                    'advlist autolink lists link charmap print preview anchor',
                    'searchreplace visualblocks fullscreen',
                    'insertdatetime media table paste wordcount',
                    'a11ychecker code advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker'
                ],
                height: 500,
                automatic_uploads : true,
                images_upload_url : "{{ route('admin.blog.uploadImages') }}",
                image_title: true,
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',

            });
        </script>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </div>

    </form>
    
</div>

@endsection



