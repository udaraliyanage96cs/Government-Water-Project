<div>
    <div class="row">
        @foreach($project as $pro)
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="/attachuser/{{$pro->id}}">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">account_tree</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Users Count</p>
                        </div>
                        </div>
                        <div class="card-footer ">
                            <h4 class="mb-0">{{$pro->name}}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>