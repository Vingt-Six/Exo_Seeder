<section>
    <a href="/destroyall" class="btn btn-danger">DESTROY</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name of company</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">FirstName</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $item)
                <tr>
                    <th scope="row">{{$loop -> iteration}}</th>
                    <td>{{$item -> nameCompany}}</td>
                    <td>{{$item -> email}}</td>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> firstname}}</td>
                    <td>
                        <a href="/company/{{$item -> id}}" class="btn btn-outline-dark">Show</a>
                    </td>
                    <td>
                        <a href="/company/{{$item -> id}}/edit" class="btn btn-outline-secondary">Edit</a>
                    </td>
                    <td>
                        <form action="/company/{{$item -> id}}" method="POST">
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
