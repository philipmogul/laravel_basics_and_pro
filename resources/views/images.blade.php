@extends('./layouts.index_blade')

@section('laraheader')
    <h1> Images IN Laravel </h1>
    <hr />
@endsection
    
@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">IMAGES UPLOAD AND DISPLAY</div>
                    <div> <h2>UPLOAD IMAGE</h2></div>
                    <form action="/uploadimage" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image_title" class="form-label">Image Title</label>
                            <input type="text" class="form-control" id="image_title" name="image_title">
                        </div>
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Select Image</label>
                            <input type="file" class="form-control" id="image_file" name="image_file">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Image</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('larafooter')
    <h3> Footer Section </h3>

@endsection