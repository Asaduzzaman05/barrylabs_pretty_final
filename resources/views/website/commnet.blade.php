<!-- Comment Form -->
<style>
    input{
        margin-bottom: 10px ;

    }
    .comment{
        margin-top: 10px ;
    }
    .replies {
    margin-left: 20px;
}

.reply {
    margin-left: 20px;
}
.comments-section {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.comment {
    background-color: #ffffff;
    margin-bottom: 15px;
    padding: 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.comment:hover {
    background-color: #e9ecef;
}

.replies {
    margin-top: 10px;
    margin-left: 20px;
    padding: 10px;
    background-color: #f1f1f1;
    border-left: 4px solid #007bff;
    border-radius: 5px;
}

.reply {
    margin-left: 10px;
    padding: 5px;
    background-color: #ffffff;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.reply:hover {
    background-color: #e2e6ea;
}

.reply-btn {
    display: inline-block;
    margin-top: 10px;
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.reply-btn:hover {
    background-color: #0056b3;
}

.comment-form-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 30px;
}

.comment-form-container h3 {
    margin-bottom: 20px;
    font-weight: bold;
    color: #333;
}

.form-control {
    border-radius: 5px;
    border: 1px solid #ced4da;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 5px;
    padding: 10px 20px;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.comment-form-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    border: 2px solid transparent;
    background-clip: padding-box;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 30px;
    position: relative;
}

.comment-form-container:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 8px;
    background-image: linear-gradient(45deg, #acee99, #be9ff0);
    z-index: -1;
    padding: 2px;
}

.comment-form-container h3 {
    margin-bottom: 20px;
    font-weight: bold;
    color: #333;
}

.form-control {
    border-radius: 5px;
    border: 1px solid #ced4da;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn-primary {
    background-color: #00ffd5;
    border-color: #007bff;
    border-radius: 5px;
    padding: 10px 20px;
    transition: background-color 0.3s;
    margin-top: 5px;
}

.btn-primary:hover {
    background-color: #55e490;
    border-color: #20c982;
}

/* Fade in effect */
.fade-in {
    animation: fadeIn 0.5s ease forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Fade out effect */
.fade-out {
    animation: fadeOut 0.5s ease forwards; /* Animation for fade-out */
}

@keyframes fadeOut {
    from {
        opacity: 1;
        transform: translateY(0); /* Original position */
    }
    to {
        opacity: 0;
        transform: translateY(-10px); /* Move up a bit */
    }
}


</style>
<div class="row" style="padding-top: 7%">
    {{-- Comment Form Section --}}
    <div class="col-md-12">
        <div class="comment-form-container fade-in wow fadeInUp">
            <h3>Leave a Comment</h3>
            <form action="{{ route('comments.store') }}" method="POST" id="commentForm">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="comment" class="form-control" rows="6" placeholder="Comment" required></textarea>
                        <input type="hidden" name="comnt_or_reply" value="comment">
                        <input type="hidden" name="blog_id" value="{{ $blogs->id }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Comment</button>
            </form>
        </div>
       {{-- Show Comments Section --}}
        <div class="comments-section wow fadeInUp" >
            <h1 class="text-center">Comments</h1>
            @foreach($comments as $comment)
                <div class="comment col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <strong>{{ $comment->name }}</strong>
                            <p>{{ $comment->comment }}</p>

                            <!-- Replies Section -->
                            @if($comment->replies->count())
                                <div class="replies" style="margin-left: 20px;">
                                    @foreach($comment->replies as $reply)
                                        <div class="reply" style="margin-left: 20px;">
                                            <strong>{{ $reply->name }}</strong>
                                            <p>{{ $reply->reply }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <a href="#" class="reply-btn" data-comment-id="{{ $comment->id }}">Reply</a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Image Section --}}
    {{-- <div class="col-md-6 img">
        <img src="{{ asset('public/uploads/service/erp.jpg') }}" alt="no image" class="img-fluid side-image">

    </div> --}}
</div>

@include('website.replycomment')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {

    $('.comments-section .comment').hide().fadeIn(1000);

    $('.reply-btn').on('click', function(e) {
        e.preventDefault();
        var commentId = $(this).data('comment-id');
        $(this).siblings('.replies').fadeToggle(300);
    });
});

$(document).ready(function () {
        // Fade out the form when submitted
        $('#commentForm').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission
            var form = $(this);
            form.addClass('fade-out'); // Add fade-out class

            // Delay the actual form submission until the animation is complete
            setTimeout(function () {
                form.off('submit'); // Remove the submit event handler
                form.submit(); // Submit the form
            }, 500); // Match this duration with the fade-out animation
        });
    });
</script>
