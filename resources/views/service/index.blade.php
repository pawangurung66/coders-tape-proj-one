
<h1>This is service listing from resoure views</h1>
<form action="/service" method="post">
    <input type="text" name="name" autocomplete="off">
    @csrf
    <button>add service</button>
</form>
<ul>
    @forelse($services as $service)
        <li>{{$service->name}}</li>
        <li>{{$service->last_name}}</li>
    @empty
        <li>No service available</li>
    @endforelse
</ul>