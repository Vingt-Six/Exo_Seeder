<section>
    <a href="{{URL::previous()}}" class="btn btn-outline-success">Back</a>
    <div class="card" style="width: 18rem;">
        <img src="{{$company -> src}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">{{$company -> nameCompany}}</h4>
            <p class="card-text">{{$company -> adresse .' '. $company -> doornumber . ', ' . $company -> postalcode}}</p>
            <h6>{{$company -> telephone}}</h6>
            <h6>{{$company -> email}}</h6>
            <h6>{{$company -> name}}</h6>
            <h6>{{$company -> firstname}}</h6>
        </div>
    </div>
</section>
