<!-- Confirmation Modal-->
<div class="modal fade bd-example-modal-lg" id="showModal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-black" id="myLargeModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> ×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <img src="" id="data_img" alt=""><p></p>
                    <p id="data_p"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Chiqish</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var destroyModal = $('#showModal');
        $('body').on('click', '.show-btn', function() {
            var title = $(this).data('title');
            var img = $(this).data('img');
            var desc = $(this).data('desc');
            if (img == '') {
                img = 'https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg';
            } else {
                img = '/storage/' + img;
            }
            $('#myLargeModalLabel').html(title);
            $('#data_img').attr('src', img);
            $('#data_p').html(desc);
            destroyModal.modal('show');
        });
    </script>
@endpush
