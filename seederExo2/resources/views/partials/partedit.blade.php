<section class="container">
    <a href="{{URL::previous()}}" class="btn btn-outline-success">Back</a>
    <form action="/company/{{ $company->id }}" method="POST">
        @csrf
        @method('PUT')
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name of Company</label>
                <input type="text" class="form-control" id="inputEmail4" name="nameCompany"
                    value="{{ $company->nameCompany }}">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="inputPassword4" name="email"
                    value="{{ $company->email }}">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="adresse"
                    value="{{ $company->adresse }}">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Door Number</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
                    name="doornumber" value="{{ $company->doornumber }}">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Postal Code</label>
                <input type="number" class="form-control" id="inputCity" name="postalcode"
                    value="{{ $company->postalcode }}">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Telephone</label>
                <input type="number" class="form-control" id="inputZip" name="telephone" value="{{ $company->telephone }}">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputZip" name="name" value="{{ $company->name }}">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">FirstName</label>
                <input type="text" class="form-control" id="inputZip" name="firstname"
                    value="{{ $company->firstname }}">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">URL image</label>
                <input type="text" class="form-control" id="inputZip" name="src" value="{{ $company->src }}">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </form>
</section>
