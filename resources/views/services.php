
<h1>This is service listing from resoure views</h1>
<ul>
    @forelse($services as $service)

        <li>{{$service}}</li>
    @empty
        <li>No service available</li>
    @endforelse
</ul>