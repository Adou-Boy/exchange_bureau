<div class="container-fluid">
    <div class="row mt-5"></div>
    <form action="{{ route($routePage) }}" method="post"  autocomplete="off" class="form-horizontal mt-4">
        @csrf
        <div class="card-header bg-gradient-primary">
            <h3 class="card-title pt-3 font-weight-bold">{{$modalTitle}}</h3>
            @include('pages.includes.back')
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="row col-md-6">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="row col-md-6">
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>