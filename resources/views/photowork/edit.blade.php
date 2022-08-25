<h1>This Is Edit Page</h1>
<form action="{{route('imagets.update', $imaget->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <img src="{{asset('storage/'.$imaget->photo)}}" /><br>
    <input type="file" name="photo"><br>
    <input type="submit" Value="Update">
</form>