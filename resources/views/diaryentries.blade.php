@extends('layouts.index_default')

@section('laraheader')
    <h1> About Us </h1>

@endsection

@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">DIARY INPUTS</div>
                    <div class="row">
                        <hr />
                        <h2>
                        UPDATE YOUR DIARY ENTRIES HERE:
                        </h2>
                        <hr />
                    </div>
                    <div>
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" />
                        <br />
                        <label for="diaryentry">Diary Entry:</label>
                        <textarea id="diaryentry" name="diaryentry" rows="10" cols="50">
                        </textarea>
                        <br />
                        <label for="entrydate">Entry Date:</label>
                        <input type="date" id="entrydate" name="entrydate" />
                        <br />
                        <button type="button" onclick="alert('Diary Entry Submitted!')">Submit Entry
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('larafooter')
    <h3> Footer Section </h3>

@endsection