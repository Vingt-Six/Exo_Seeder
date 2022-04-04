<section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telephone</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <th scope="row">{{$loop -> iteration}}</th>
                    <td>{{$member -> nom}}</td>
                    <td>{{$member -> age}}</td>
                    <td>{{$member -> email}}</td>
                    <td>{{$member -> telephone}}</td>
                    <td>
                        <a href="/members/{{$member -> id}}" class="btn btn-outline-success">Show</a>
                    </td>
                    <td>
                        <a href="/members/{{$member -> id}}/edit" class="btn btn-outline-warning">Edit</a>
                    </td>
                    <td>
                        <form action="/members/{{$member -> id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
