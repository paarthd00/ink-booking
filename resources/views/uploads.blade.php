<body>
    @foreach ($uploads as $image)
    <img src="{{ asset('storage/' . $image->path) }}" alt="image" />
    @endforeach

    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="uploaded_file" />
        <button type="submit">Upload</button>
    </form>

</body>