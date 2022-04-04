<section>
    <form action="/members/{{$member -> id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <input type="text" name="nom" value="{{$member -> nom}}" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="number" name="age" value="{{$member -> age}}" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" name="email" value="{{$member -> email}}" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" name="telephone" value="{{$member -> telephone}}" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-dark">Update</button>
    </form>
</section>
