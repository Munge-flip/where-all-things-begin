<form action=" {{ route("Service.store") }} " method="get">
    <input type="hidden"  value=" {{ $serviceData['id'] ?? '' }} " name="id"><br>
    <label>Dailies</label><br>
    <input type="text"  value=" {{ $serviceData['dailies'] ?? '' }} " name="dailies"><br>
    <label>Endgame</label><br>
    <input type="text"  value=" {{ $serviceData['endgame'] ?? '' }} " name="endgame"><br>
    <button>Submit</button>
</form>