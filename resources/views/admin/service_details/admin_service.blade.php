@extends('layouts.admin')
@section('title', strtoupper($submodule))
@section('admin-content')
<main class="mb-5">
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span id="addTitle" class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Add Ais</span>
        {{-- <span id="updateTitle" class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Update Ais</span> --}}
    </div>
       <div class="row">
           <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="table-head"><i class="fas fa-cogs me-1"></i>{{ strtoupper($submodule) }} FORM</div>
                    </div>
                        <div class="card-body table-card-body p-3">
                            <form action="{{ url('admin-service') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <input type="hidden" name="id" id="itemId" value="{{ isset($aisItem) ? $aisItem->id : '' }}">

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ isset($aisItem) ? $aisItem->title : '' }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="2" >{{ isset($aisItem) ? $aisItem->description : '' }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" name="image" class="form-control">

                                    <!-- If there is an existing image, show it -->
                                    @if (isset($aisItem) && $aisItem->image_path)
                                        <div class="mt-2">
                                            <img src="{{ asset($aisItem->image_path) }}" alt="Current Image" style="max-width: 200px;">
                                        </div>
                                    @endif
                                </div>

                                <input type="hidden" name="module" value="{{ $module }}">
                                <input type="hidden" name="submodule" value="{{ $submodule }}">
                                <input type="hidden" name="module_title" value="{{ $submodule }}">

                                <!-- Buttons for adding or updating -->
                                <button type="submit" class="btn btn-primary">{{ isset($aisItem) ? 'Update' : 'Submit' }}</button>
                            </form>

                    </div>
                </div>
            </div>
             <div class="col-6">
               <div class="card">
                <div class="card-header">
                    <div class="table-head"><i class="fas fa-table me-1"></i>{{ strtoupper($submodule) }} FORM</div>
                </div>
                <div class="card-body table-card-body p-3">

                    <table id="datatablesSimple">
                        <thead class="text-center bg-light">
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="AisBody">
                            @foreach($aisItems as $aisItem)
                            {{-- {{ dd($aisItem->submodule) }} --}}
                            {{-- @if(strtoupper($aisItem->submodule) == strtoupper($submodule)) --}}
                                <tr>
                                    <td>01</td>
                                    <td>{{ $aisItem->title }}</td>
                                    <td style="vertical-align: middle;">{!! $aisItem->description ?? '' !!}</td>
                                    <td>
                                        <img src="{{ asset($aisItem->image_path) }}" alt="" style="height: 50px; width:50px" >

                                    </td>
                                    <td>
                                        <a href="{{ route('admin-service.edit', $aisItem->id) }}" class="btn btn-small btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $aisItem->id }}').submit();">Delete</a>
                                        <form id="delete-form-{{ $aisItem->id }}" action="{{ route('admin-service.destroy', $aisItem->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            {{-- @endif --}}
                            @endforeach
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
<script src="{{ asset('public/admin/js/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        });
</script>
@endpush

