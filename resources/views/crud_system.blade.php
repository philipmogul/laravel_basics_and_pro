@extends('./layouts.index_default')

@section('laraheader')
    <h1> Store Inventory Page </h1>
@endsection

@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">CRUD SYSTEM</div>
                    <div> <h2>CREATE</h2></div>
                    <form action="/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="item_name" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="item_name" name="item_name">
                        </div>
                        <div class="mb-3">
                            <label for="item_description" class="form-label">Item Description</label>
                            <input type="text" class="form-control" id="item_description" name="item_description">
                        </div>
                        <div class="mb-3">
                            <label for="item_quantity" class="form-label">Item Quantity</label>
                            <input type="number" class="form-control" id="item_quantity" name="item_quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Item</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('larafooter')
    <h3> Footer Section </h3>
@endsection