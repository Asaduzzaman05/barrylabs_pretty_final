

<!-- Reply Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="replyModalLabel">Reply to Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('comments.reply') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Phone</label>
                        <input type="phone" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="reply">Your Reply</label>
                        <textarea class="form-control" id="comment" name="reply" rows="3" required></textarea>
                    </div>
                    <input type="hidden" name="comment_id" id="parent_id" value="">
                    <button type="submit" class="btn btn-primary">Submit Reply</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelectorAll('.reply-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            let commentId = this.getAttribute('data-comment-id');
            // Set the comment ID in the hidden input of the form
            document.getElementById('parent_id').value = commentId;
            // Show the modal
            $('#replyModal').modal('show');

        });
    });
</script>



