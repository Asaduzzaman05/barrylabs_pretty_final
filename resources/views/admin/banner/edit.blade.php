@extends('layouts.admin')
@section('title', 'Slider')
@section('admin-content')
<main>
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="{{route('admin.index')}}">Home</a> >Slider</span>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-plus"></i>
            Slider
        </div>
        <div class="card-body table-card-body p-3 mytable-body">
            <form action="{{route('slider.update',$sliders->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <strong><label>Slider Title</label> <span class="float-right">:</span></strong>
                            </div>
                            <div class="col-md-10">
                                <input type="text" value="{{$sliders->slider_title_one}}" name="slider_title" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <strong><label>Slider Title</label> <span class="float-right">:</span></strong>
                            </div>
                            <div class="col-md-10">
                                <input type="text" value="{{$sliders->slider_title_two}}" name="slider_title" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Slider Image </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" onchange="readURL(this);">
                                </div>
                                <div class="col-md-3 mt-1">
                                  <img class="form-controlo img-thumbnail" src="#" id="previewImage" style="width: 100px;height: 80px; background: #3f4a49;">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mt-2 float-right" value="Submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
</main>
@endsection
@push('admin-js')

<script>
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#previewImage')
                    .attr('src', e.target.result)
                    .width(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("previewImage").src = "{{ asset($sliders->image) }}";
</script>


<script>
    $(document).on('click', '.close-btn', function () {
           var imageId = $(this).data('image_id');
           if (imageId) {
               $.ajax({
                   url: '{{url("/")}}/remove-other-image/'+ imageId,
                   method: 'DELETE',
                   success: function (res) {
                       if (res) {
                           $(this).parent().remove();
                       } else {
                           alert('Something went wrong :(');
                       }
                   }.bind(this)
               })
           }
       });
  </script>
<script>
  // multiple image
//  $(document).ready(function() {
//   if (window.File && window.FileList && window.FileReader) {
//     $("#slider_image").on("change", function(e) {
//       var files = e.target.files,
//         filesLength = files.length;
//       for (var i = 0; i < filesLength; i++) {
//         var f = files[i]
//         var fileReader = new FileReader();
//         fileReader.onload = (function(e) {
//           var file = e.target;
//           $("<span class=\"pip\">" +
//             "<img class=\"otherImage\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
//             "<br/><span class=\"remove\">Remove</span>" +
//             "</span>").insertAfter("#slider_image");
//         });
//         fileReader.readAsDataURL(f);
//       }
//     });
//   } else {
//     alert("Your browser doesn't support to File API")
//   }

//   $(document).on('click',".remove",function(){
//     $(this).parent(".pip").remove();
//   });
// });
</script>
<script>
    // multiple image
    $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#slider_image").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove</span>" +
            "</span>").insertAfter("#slider_image");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
  </script>
@endpush
