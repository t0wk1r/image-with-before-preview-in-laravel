<h1>all data</h1>
<table border="1" align="center" width="500">
    <tr>
        <td>Photo</td>
        <td>Action</td>
    </tr>


    @foreach($allData as $data)
    <tr>
        <td>
            <img src="storage/{{$data->photo}}" alt="" width="100" height="100">
        </td>
        <td>
            <a href="{{route('imagets.show', $data->id)}}">Show</a>||
            <a href="{{route('imagets.edit', $data->id)}}">Edit</a>||

            <form style="display: inline-block;" action="{{route('imagets.destroy', $data->id)}}" method="post">
                @csrf
                @method('delete')
                <button>Delete</button>
            </form>
        </td>
    </tr>

    @endforeach

</table>

<a href="{{url('/')}}">Home/Create</a>