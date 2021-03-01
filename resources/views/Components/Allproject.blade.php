<div class="container mt-5">
    <div class="row">

        @foreach($projects as $projects)
        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="{{$projects->project_image}}" alt="Card image cap">
                    <h5 class="service-card-title mt-4">{{$projects->project_title}} </h5>
                    <h6 class="service-card-subTitle p-0 m-0">{{$projects->project_des }} </h6>
                    <a href="{{}}" class="normal-btn mt-2 mb-4 btn">বিস্তারিত</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
