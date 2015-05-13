<html>
	<head>
 {{ HTML::style('components/bootstrap334dist/css/bootstrap.min.css') }}
        {{ HTML::style('components/bootstrap334dist/css/bootstrap.theme.css') }}
          <!-- Scripts are placed here -->
        {{ HTML::script('components/bootstrap334dist/js/bootstrap.min.js') }}
        {{ HTML::script('components/bootstrap334dist/js/jquery-1.11.3.min.js') }}
        <title>Login Form</title>
        </head>
        <body onload='document.getElementById("username").focus();'>
			<div style='border:0px solid black;width:40%;height:40%;margin:0 auto;';>
{{ Form::open( array('url' => '/login', 'method' => 'post','class' => 'form-inline') ) }}
 
    @if (Session::has('login_errors'))
        <span class="error">Username or password incorrect.</span>
    @endif
  
    <p>{{ Form::label('username', 'Username',array('class' => 'a')) }}</p>
    <p>{{ Form::text('username','',array('class' => 'form-control')) }}</p>
    
    <p>{{ Form::label('password', 'Password',array('class' => 'b')) }}</p>
    <p>{{ Form::password('password',array('class' => 'form-control')) }}</p>
    
    <p>{{ Form::submit('Login',array('class' => 'btn btn-primary')) }}</p>
    
{{ Form::close() }}
</div>
</body>
      
</html>
