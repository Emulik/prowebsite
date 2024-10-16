@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Student List</h1>
        <a class="btn btn-success float-end" href="javascript:void(0)" id="createNewStudent">Add</a>
        <table class = "table table-bordered data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>


    
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
    <script>
        window.studentUrl = "{{ route('students.index')}}";
        console.log(studentUrl);
    </script>
@endsection