@extends('layouts.adminLayout')

@section('content')
    <div class="special-heading py-4">Paramétres</div>
    @if (!$errors->isEmpty())
        <div class="alert alert-danger p-3">
            @foreach ($errors->all() as $error)
                <div style="list-style: none">{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <form action="{{ route('admin.settings.edit') }}" class="pb-5" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="fb">Lien de la page facebook</label>    
                    <input value="{{ $settings->facebook }}" type="url" name="facebook" id="fb" class="form-control" placeholder="Lien de la page Facebook">
                </div> 
                <div class="form-group">
                    <label for="insta">Lien du compte instagram</label>    
                    <input value="{{ $settings->instagram }}" type="url" name="instagram" id="insta" class="form-control" placeholder="Lien de la page Instagram">
                </div>  
                <div class="form-group">
                    <label for="ytb">Lien de la chaine YouTube</label>    
                    <input value="{{ $settings->youtube }}" type="url" name="youtube" id="ytb" class="form-control" placeholder="Lien de la chaine YouTube">
                </div>    
                <div class="form-group">
                    <label for="description">Déscription du site</label>  
                    <textarea name="description" id="description" cols="10" rows="10" class="form-control" placeholder="Description du site">{{ $settings->description }}</textarea>   
                </div>  
                <div class="form-group">
                    <label for="tags">Les mots-clés du site ( meta keywords )</label>   
                    <textarea name="tags" id="tags" cols="10" rows="10" class="form-control" placeholder="Mot-clés">{{ $settings->tags }}</textarea> 
                </div>   
            </div>
            

            <div class="col-md-4">
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="logo" hidden accept="image/*" id="logo">
                    <label for="logo" class="import-img">
                        @if ($settings->logo)
                            <img src="{{ asset("storage/".$settings->logo)}}" alt="">
                            <a href="{{ route('admin.settings.deleteLogo') }}">supprimer le logo</a>
                        @else
                            <div class="add-img">
                                <i class="far fa-image"></i>
                            </div>
                        @endif
                    </label>
                </div>

                <div class="form-group">
                    <label>Favicon</label>
                    <input type="file" name="favicon" hidden accept="image/*" id="favicon">
                    <label for="favicon" class="import-img">
                        @if ($settings->favicon)
                            <img src="{{ asset("storage/".$settings->favicon)}}" alt="">
                            <a href="{{ route('admin.settings.deleteFavicon') }}">supprimer le favicon</a>

                        @else
                            <div class="add-img">
                                <i class="far fa-image"></i>
                            </div>
                        @endif
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="main-btn">
            Save
        </button>
       
    
    </form>    

@endsection


