{{ HTML::style('components/bootstrap334dist/css/bootstrap.min.css') }}
        {{ HTML::style('components/bootstrap334dist/css/bootstrap.theme.css') }}
          <!-- Scripts are placed here -->
        {{ HTML::script('components/bootstrap334dist/js/bootstrap.min.js') }}
        {{ HTML::script('components/bootstrap334dist/js/jquery-1.11.3.min.js') }}
<h1>Edit User</h1>
{{ Form::model($userpra, array('method' => 'PATCH', 'route' =>
 array('userspra.update', $userpra->id))) }}
    <ul>
        <li>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </li>
        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
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
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('userspra.show', 'Cancel', $userpra->
id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
