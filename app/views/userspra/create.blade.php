{{ HTML::style('components/bootstrap334dist/css/bootstrap.min.css') }}
        {{ HTML::style('components/bootstrap334dist/css/bootstrap.theme.css') }}
          <!-- Scripts are placed here -->
        {{ HTML::script('components/bootstrap334dist/js/bootstrap.min.js') }}
        {{ HTML::script('components/bootstrap334dist/js/jquery-1.11.3.min.js') }}
<h1>Create User</h1>

{{ Form::open(array('route' => 'userspra.store')) }}
    <ul>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </li>

        <li>
            {{ Form::label('password', 'Confirm Password:') }}
            {{ Form::password('password_confirmation') }}
        </li>        

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::text('phone') }}
        </li>


        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
