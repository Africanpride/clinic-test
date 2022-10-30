@extends('layouts.app')

@section('content')

<div class="panel panel-super2">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($clinic->name) ? $clinic->name : 'Clinic' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('clinics.clinic.destroy', $clinic->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('clinics.clinic.index') }}" class="btn btn-primary" title="Show All Clinic">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('clinics.clinic.create') }}" class="btn btn-success" title="Create New Clinic">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('clinics.clinic.edit', $clinic->id ) }}" class="btn btn-primary" title="Edit Clinic">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Clinic" onclick="return confirm(&quot;Click Ok to delete Clinic.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $clinic->name }}</dd>
            <dt>Description</dt>
            <dd>{{ $clinic->description }}</dd>
            <dt>About Us</dt>
            <dd>{{ $clinic->about_us }}</dd>
            <dt>Email</dt>
            <dd>{{ $clinic->email }}</dd>

        </dl>

    </div>
</div>

@endsection