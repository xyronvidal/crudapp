<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Task List</h1>
	    <a href="{{ route('tasks.create') }}">Create New Task</a>
	    <table>
	        <thead>
	            <tr>
	                <th>Title</th>
	                <th>Description</th>
	                <th>Actions</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach ($tasks as $task)
	                <tr>
	                    <td>{{ $task->title }}</td>
	                    <td>{{ $task->description }}</td>
	                    <td>
	                        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
	                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
	                            @csrf
	                            @method('DELETE')
	                            <button type="submit">Delete</button>
	                        </form>
	                    </td>
	                </tr>
	            @endforeach
	        </tbody>
	    </table>

</body>
</html>