@extends('layouts.master')
@section('heading')
    <h1>{{ __('Créer Rendez-vous') }}</h1>
@stop

@section('content')

    {!! Form::open([
            'route' => 'leads.store'
            ]) !!}

    <div class="form-group">
        {!! Form::label('title', __('Titre'), ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', __('Description'), ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    
    <div class="form-inline">
        <div class="form-group col-lg-3 removeleft">
              {!! Form::label('status', __('Status'), ['class' => 'control-label']) !!}
              {!! Form::select('status', array(
              '1' => 'Contact Client','2' => 'Contact SenIncurb' ), null, ['class' => 'form-control'] )
           !!}
          </div>  
          <div class="form-group col-lg-5 removeleft">
              {!! Form::label('contact_date', __('Date'), ['class' => 'control-label']) !!}
              {!! Form::date('contact_date', \Carbon\Carbon::now()->addDays(7), ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-lg-4 removeleft removeright">
              {!! Form::label('contact_time', __('Heure'), ['class' => 'control-label']) !!}
              {!! Form::time('contact_time', '11:00', ['class' => 'form-control']) !!}
          </div>
  
      </div>



    <div class="form-group">
        {!! Form::label('user_assigned_id', __('Attribuer un utilisateur'), ['class' => 'control-label']) !!}
        {!! Form::select('user_assigned_id', $users, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        @if(Request::get('client') != "")
            {!! Form::hidden('client_id', Request::get('client')) !!}
        @else
            {!! Form::label('client_id', __('Assigner un client'), ['class' => 'control-label']) !!}
            {!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}
        @endif
    </div>

    {!! Form::submit(__('Créer un nouveau rendez-vous'), ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


@stop