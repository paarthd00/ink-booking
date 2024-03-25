<!-- loop over artist -->
@foreach($artists as $artist)
<div class="card">
    <img src="{{ asset('storage/'.$artist->image) }}" alt="{{ $artist->name }}">
    <div class="card-body">
        <h2>{{ $artist->name }}</h2>
        <p>{{ $artist->bio }}</p>
        <p>{{ $artist->price }}</p>
        <a href="mailto:{{ $artist->email }}">{{ $artist->email }}</a>
        <a href="tel:{{ $artist->phone }}">{{ $artist->phone }}</a>
    </div>
</div>
@endforeach