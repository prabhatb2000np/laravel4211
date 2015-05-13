{{ HTML::style('components/bootstrap334dist/css/bootstrap.min.css') }}
        {{ HTML::style('components/bootstrap334dist/css/bootstrap.theme.css') }}
          <!-- Scripts are placed here -->
        {{ HTML::script('components/bootstrap334dist/js/bootstrap.min.js') }}
        {{ HTML::script('components/bootstrap334dist/js/jquery-1.11.3.min.js') }}
<h1>All Users</h1>
<p>{{ link_to_route('userspra.create', 'Add new user') }}</p>


@if ($userspra->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($userspra as $userpra)
                <tr>
                    <td>{{ $userpra->username }}</td>
          <td>{{ $userpra->password }}</td>
          <td>{{ $userpra->email }}</td>
          <td>{{ $userpra->phone }}</td>
          <td>{{ $userpra->name }}</td>
                    <td>{{ link_to_route('userspra.edit', 'Edit',
 array($userpra->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('userspra.destroy', $userpra->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no users
@endif
{{ $userspra->links(); }}
