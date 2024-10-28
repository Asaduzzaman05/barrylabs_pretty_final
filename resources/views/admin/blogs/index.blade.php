@extends('layouts.admin')
@section('title', 'Blogs')
@section('admin-content')
<main class="mb-5">
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span id="addTitle" class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Add Blogs</span>
        <span id="updateTitle" class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Update Blogs</span>
    </div>
       <div class="row">
           <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="table-head"><i class="fas fa-cogs me-1"></i>Blogs Form</div>
                    </div>
                        <div class="card-body table-card-body p-3">

                        <form action="{{ route('blog.store') }}" id="chooseUsStore" class="chooseUsForm"  method="post" enctype="multipart/form-data">
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
                            <button type="submit" id="updateBtn" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
             <div class="col-6">
               <div class="card">
                <div class="card-header">
                    <div class="table-head"><i class="fas fa-table me-1"></i>Blogs List</div>
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
                        <tbody id="blogBody">
                            @foreach($aisItems as $aisItem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $aisItem->title }}</td>
                                <td style="vertical-align: middle;">{!! $aisItem->description ?? '' !!}</td>
                                <td>
                                    <img src="{{ asset($aisItem->image_path) }}" alt="" style="height: 50px; width:50px" >

                                </td>
                                <td>
                                    <a href="{{ route('admin-service.edit', $aisItem->id) }}" class="btn btn-small btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $aisItem->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $aisItem->id }}" action="{{ route('blog.destroy', $aisItem->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
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

<script src="{{ asset('public/admin/js/sweetalert2.all.js') }}"></script>
<script>
    $('#addBtn').show();
    $('#updateBtn').hide();
    $('#addTitle').show();
    $('#updateTitle').hide();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //GetChoose
    // function GetBlog(){
    //     $.ajax({
    //         url:'{{ route("blog.show") }}',
    //         type:'GET',
    //         dataType:'json',
    //         success:function(response){
    //             console.log(response.title);
    //             data = ''
    //            $.each(response, function(key, value){
    //              var key = key + 1
    //              data = data + '<tr>'
    //              data = data + '<td>'+key+'</td>'
    //              data = data + '<td>'+value.title+'</td>'
    //              data = data + '<td>'+value.description+'</td>'
    //              data = data + '<td class="text-center">'
    //              data = data + '<a href="" onclick="EditBlog('+value.id+')" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>'
    //              data = data + '<a href="" onclick="DeleteChoose('+value.id+')" class="btn btn-delete"><i class="far fa-trash-alt"></i></a>'
    //              data = data + '</td>'
    //              data = data + '</tr>'
    //            })
    //            $('#blogBody').html(data);
    //         }
    //     })
    // }
    // GetBlog();

  // Choose edit data
  function EditBlog(id){
    event.preventDefault();
    $.ajax({
        type:'GET',
        url:'{{ url("edit-blog") }}/' + id,
        dataType:'json',
        success:function(response){
            $('#addBtn').hide();
            $('#updateBtn').show();
            $('#addTitle').hide();
            $('#updateTitle').show();
            $('#chooseUsStore').removeClass('chooseUsForm');
            $('#chooseUsStore').addClass('chooseUsUpdateForm');
            $('#id').val(response.id);
            $('#title').val(response.title);
            $('#description').val(response.description);
        }

    });
  }
  //update data
  $(document).on('submit','.chooseUsUpdateForm',function(e){
    event.preventDefault();
    var id = $('#id').val();
    var formData = new FormData(this);
      $.ajax({
         type:'POST',
         url:'{{ url("blog.update") }}/' + id,
         data:formData,
         cache:false,
         contentType:false,
         processData:false,
         success:function(data){
           if(data){
             toastr.success('Data Save Successfully');
           }else{
            toastr.error('Something is wrong');
           }
           GetBlog();
           $('.chooseUsUpdateForm')[0].reset();
            $('#addBtn').show();
            $('#updateBtn').hide();
            $('#addTitle').show();
            $('#updateTitle').hide();
            $('#chooseUsStore').removeClass('chooseUsUpdateForm');
            $('#chooseUsStore').addClass('chooseUsForm');
         },
         error:function(error){

            $('#titleError').text(error.responseJSON.errors.title);
            $('#descriptionError').text(error.responseJSON.errors.description);

         }
      });
  });

  //data delete
  function DeleteChoose(id){
    event.preventDefault();
     $.ajax({
        type:'DELETE',
        url:'{{ url("delete-blog") }}/' + id,
        dataType:'json',
        success:function(data){
            if(data){
                toastr.success('Data Delete Successfully');
            }else{
                toastr.error('Something is Worng');
            }
            GetBlog();
        }
     })
  }
    function deleteUser(id) {
            swal({
                title: 'Are you sure?',
                text: "You want to Delete this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
</script>
@endpush
