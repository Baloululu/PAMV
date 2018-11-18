<?php
if ($article->id)
    $option = ['route' => ['articles.update', $article], 'method' => 'put', 'files' => true];
else
    $option = ['route' => 'articles.store', 'files' => true];
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script src="{{ asset('js/summernote-fr-FR.js') }}"></script>

@include('pages/erreurs')

{!! Form::model($article, $option) !!}

<div class="form-group">
    {!! Form::label('category_id', 'Catégorie') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', null, ['class' => 'form-control '.($errors->has('title') ? ' is-invalid' : '')]) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    {!! Form::file('image', ['class' => 'form-control-file']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textArea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
</div>

<script>
    $('#content').summernote({
        tabsize: 2,
        height: 300,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        lang: "fr-FR"
    });
</script>

{!! Form::close() !!}