<h1>Single data</h1>
<table border="1" align="center" width="500">
    <tr>
        <td>Photo</td>
        <td>Action</td>
    </tr>
    <tr>
        <td>
            <img src="{{asset('storage/'.$imaget->photo)}}" alt="" width="100" height="100">
        </td>
        <td>
            <a href="{{route('imagets.edit', $imaget->id)}}">Edit</a>||
            <form style="display: inline-block;" action="{{route('imagets.destroy', $imaget->id)}}" method="post">
                @csrf
                @method('delete')
                <button>Delete</button>
            </form>
        </td>
    </tr>



</table>