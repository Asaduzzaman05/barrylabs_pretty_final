@extends('layouts.admin')
@section('title', 'Company')
@section('admin-content')
<main class="mb-5">
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span id="addTitle" class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Add Ais</span>
        <span id="updateTitle" class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Update Ais</span>
    </div>
       <div class="row">
           <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="table-head"><i class="fas fa-cogs me-1"></i>Ais Form</div>
                    </div>
                        <div class="card-body table-card-body p-3">

                        <form action="{{ url('admin-inventory') }}" id="chooseUsStore" class="chooseUsForm"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" rows="2" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <input type="hidden" id="id">
                            <button type="submit" id="addBtn" class="btn btn-primary">Submit</button>
                            {{-- <button type="submit" id="updateBtn" class="btn btn-primary">Update</button> --}}
                        </form>

                    </div>
                </div>
            </div>
             <div class="col-6">
               <div class="card">
                <div class="card-header">
                    <div class="table-head"><i class="fas fa-table me-1"></i>Ais List</div>
                </div>
                <div class="card-body table-card-body p-3">
                    <table id="datatablesSimple">
                        <thead class="text-center bg-light">
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="AisBody">

                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</main>
@endsection
@push('admin-js')


</script>
@endpush
