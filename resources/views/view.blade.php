<table border="1">
    <tr>
        <th>ID</th>
        <th>Dailies</th>
        <th>Endgame</th>
        <th>Action</th>
    </tr>
    @foreach($serviceData as $value)
    <tr>
        <td> {{ $value['id'] }} </td>
        <td> {{ $value['dailies'] }} </td>
        <td> {{ $value['endgame'] }} </td>
        <td>
            <a href=" {{ route("Service.update", ['id' => $value['id']]) }} ">Edit</a>
            <a href=" {{ route("Service.destroy", ['id' => $value['id']]) }} ">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
