<table border='1'>
    <thead>
        <th>ID</th>
        <th>Dailies</th>
        <th>Endgame</th>
        <th>Action</th>
    </thead>
    @foreach($serviceData as $value)
    <tr>
        <td> {{ $value['id'] }} </td>
        <td> {{ $value['dailies'] }} </td>
        <td> {{ $value['endgame'] }} </td>
        <td>
            <a href=" {{ route('service.edit', ['id' => $value['id']]) }} ">Edit</a>
            <a href=" {{ route('service.destroy', ['id' => $value['id']]) }} ">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
