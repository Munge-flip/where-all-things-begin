<form action=" {{ route('service.store') }} " method="get">
    <input type="hidden" value=" {{ $serviceData['id'] }} " name="id">
    <label for="">Dailies</label><br>
    <input type="text" value=" {{ $serviceData['dailies'] }} " name="dailies"><br>
    <label for="">Endgame</label><br>
    <input type="text" value=" {{ $serviceData['endgame'] }} " name="endgame"><br>
    <button>Submit</button>
</form>
