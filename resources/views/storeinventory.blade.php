@extends('./layouts.index_default')

@section('laraheader')
    <h1> Store Inventory Page </h1>
@endsection

@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">Store Inventory</div>
                    <div> <h2>Store Inventory Content</h2></div>
                    <h2>Activities</h2>
                    <ol>
                        <li>Made a store inventory model!</li>
                        <li>Made migrations for the store inventory!</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('larafooter')
    <h3> Footer Section </h3>
@endsection