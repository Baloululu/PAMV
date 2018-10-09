<?php
if (!isset($comment))
    $comment = $newComment;
if ($comment->id)
    $option = ['route' => ['livre.update', $comment], 'method' => 'put'];
else
    $option = ['route' => 'livre.store'];
?>

@include('pages/erreurs')

{!! Form::model($comment, $option) !!}

<div class="form-group">
    {!! Form::textArea('content', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}