@extends("layout.main")

@section("styles")

@endsection

@section("content")
    <div class="container">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid bg-light rounded mb-4 mb-lg-0" src="{{asset("img/banana-roll.png")}}" alt="LOGO"/></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">BananaRoll</h1>
                <p>GEDANG GULUNG YANG ARTINYA PISANG DIGULUNG MERUPAKAN MAKANAN DENGAN ISIAN PISANG yang dibalut dengan kulit lumpia yang digoreng kering di minyak panas.</p>
                <a class="btn btn-primary" href="{{route("shop")}}">Shop Here</a>
            </div>
        </div>
    </div>
@endsection
