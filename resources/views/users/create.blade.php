<x-app-layout>

    <x-app-data />

    <a href="{{ route('users.index') }}"><button class="btn btn-outline  btn-sm my-8">Back to Users</button></a>

    {!! Form::open(['route' => 'users.store']) !!}
    {!! Form::token() !!}
    <div class="space-y-8">
        <div class="grid md:grid-cols-2 gap-4 ">

            <div class="">
                {!! Form::label('firstName', 'First Name', ['class' => ' text-sm text-gray-700 block mb-1 font-medium']) !!}
                {!! Form::text('firstName', 'First Name', ['class' => 'w-full text-sm text-gray-700 block mb-1 font-medium']) !!}
            </div>
            <div class="">
                {!! Form::label('lastName', 'Last Name', ['class' => 'text-sm text-gray-700 block mb-1 font-medium']) !!}
                {!! Form::text('lastName', 'Last Name', ['class' => 'w-full text-sm text-gray-700 block mb-1 font-medium']) !!}
            </div>
        </div>

        <div>
            {!! Form::label('email', 'E-Mail Address', ['class' => 'text-sm text-gray-700 block mb-1 font-medium']) !!}
            {!! Form::email('email', 'example@gmail.com', ['class' => 'w-full text-sm text-gray-700 block mb-1 font-medium']) !!}
        </div>

        <div class="w-full">
            {!! Form::label('role', 'Pick a Role for User', ['class' => 'text-sm text-gray-700 block mb-1 font-medium']) !!}
            {!! Form::select('role', [  'writer' => 'Writer' , 'admin' => 'Admin', 'super-admin' => 'Super Admin'], 'writer',['class' => 'w-full text-sm text-gray-700 block mb-1 font-medium '], ['placeholder' => 'Pick a Role...']) !!}
        </div>

        <div class="grid md:grid-cols-2 gap-4 ">

            <div class="">
                {!! Form::label('password', 'Password', ['class' => ' text-sm text-gray-700 block mb-1 font-medium']) !!}
                {!! Form::password('password', ['class' => 'w-full text-sm text-gray-700 block mb-1 font-medium']) !!}
            </div>
            <div class="">
                {!! Form::label('password', 'Confirm Password', ['class' => ' text-sm text-gray-700 block mb-1 font-medium']) !!}
                {!! Form::password('password_confirmation', ['class' => 'w-full text-sm text-gray-700 block mb-1 font-medium']) !!}
            </div>
        </div>


    </div>
    {!! Form::submit('Create New User', ['class' => 'text-sm block mb-1 font-medium btn hover:btn-outline  btn-block  btn-sm my-5']) !!}
    {!! Form::close() !!}
</x-app-layout>
