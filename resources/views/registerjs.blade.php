<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form id="formulario" method="POST" action="/register" enctype="multipart/form-data">
                        <div class="form-group row"> <label for="name"
                                class="col-md-4 col-form-label text-md-right">Name</label>
                            <div id="name" class="col-md-6"> <input id="name" type="text" class="form-control"
                                    name="name" required autocomplete="name" autofocus> </div>
                        </div>
                        <div class="form-group row"> <label for="email"
                                class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div id="email" class="col-md-6"> <input id="email" type="email" class="form-control"
                                    name="email" required autocomplete="email"> </div>
                        </div>
                        <div class="form-group row"> <label for="img"
                                class="col-md-4 col-form-label text-md-right">Image</label>
                            <div id="img" class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row"> <label for="password"
                                class="col-md-4 col-form-label text-md-right">Password</label>
                            <div id="password" class="col-md-6"> <input id="password" type="password"
                                    class="form-control" name="password" required autocomplete="new-password"> </div>
                        </div>
                        <div class="form-group row"> <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-md-6"> <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"> </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4"> <button type="submit" class="btn btn-primary"> Register
                                </button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>