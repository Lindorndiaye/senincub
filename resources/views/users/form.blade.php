<div class="form-group">
    {{ Form::label('image_path', __('Image'), ['class' => 'control-label']) }}
    {!! Form::file('image_path',  null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('name', __('Nom'), ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', __('Mail'), ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', __('Addresse'), ['class' => 'control-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('work_number', __('Telephone'), ['class' => 'control-label']) !!}
    {!! Form::text('work_number',  null, ['class' => 'form-control']) !!}
</div>

{{-- <div class="form-group">
    {!! Form::label('personal_number', __('Personal number'), ['class' => 'control-label']) !!}
    {!! Form::text('personal_number',  null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group">
    {!! Form::label('password', __('Mot de passe'), ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password_confirmation', __('Confirmer mot de passe'), ['class' => 'control-label']) !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>
<div class="form-group form-inline">
    {!! Form::label('roles', __('Attribuer un rôle'), ['class' => 'control-label']) !!}
    {!!
        Form::select('roles',
        $roles,
        isset($user->role->role_id) ? $user->role->role_id : null,
        ['class' => 'form-control']) !!}

    {!! Form::label('departments', __('Attribuer un département'), ['class' => 'control-label']) !!}

    {!!
        Form::select('departments',
        $departments,
        isset($user)
        ? $user->department->first()->id : null,
        ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
