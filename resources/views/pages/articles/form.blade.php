<?php
if ($article->id)
    $option = ['route' => ['articles.update', $article], 'method' => 'put', 'files' => true];
else
    $option = ['route' => 'articles.store', 'files' => true];
?>

@include('pages/erreurs')

{!! Form::model($article, $option) !!}

<div class="form-group">
    <div class="custom-file">
        {!! Form::label('image', 'Image', ['class' => 'custom-file-label']) !!}
        {!! Form::file('image', ['class' => 'custom-file-input']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Catégorie') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'custom-select']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', null, ['class' => 'form-control '.($errors->has('title') ? ' is-invalid' : ''), 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('intro', 'Présentation de l\'article') !!}
    {!! Form::textArea('intro', null, ['class' => 'form-control', 'style' =>'height: 100px']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textArea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@section('scripts')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: "lists",
            language: "fr_FR"
        });
    </script>

    <script>
        $('#image').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            fileName = fileName.split('\\');
            fileName = fileName[fileName.length - 1];
            //replace the "Choose a file" label
            $('.custom-file-label').html(fileName);
        })
    </script>
@endsection