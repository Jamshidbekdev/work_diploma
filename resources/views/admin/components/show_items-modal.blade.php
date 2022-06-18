<!-- Confirmation Modal-->
<div class="modal fade bd-example-modal-lg" id="showItemsModal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h3 class="modal-title text-white" id="myLargeModalLabel">O'quv markaz</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> ×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tr>
                        <td class="font-weight-bold">Nomi</td>
                        <td id="name"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Logo</td>
                        <td>
                            <img id="img" src="" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Manzil</td>
                        <td id="address"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Fanlar</td>
                        <td id="subjectss">
                            {{-- @foreach ($educationCenter->subjects()->get() as $item)
                                <li style="list-style-type: none;">{{ $item->name}}</li>
                            @endforeach --}}
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Telefon raqami</td>
                        <td id="phone"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Qisqacha malumot</td>
                        <td id="desc"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">O'qishga topshirganlar soni</td>
                        <td id="all"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">O'qishga budget asosida qabul qilinganlar soni</td>
                        <td id="grand"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">O'qishga shartnoma asosida qabul qilinganlar soni</td>
                        <td id="contract"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Chiqish</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        var destroyModal = $('#showItemsModal');
        var id;
        $('body').on('click', '.show_item', function() {
            var data = $(this).data('array').split(",");
            var subjects = $(this).data('subjects').toString().split(",");
            var name = data[0];
            var address = data[1];
            var img = data[2];
            var phone = data[3];
            var all = data[4];
            var grand = data[5];
            var contract = data[6];
            var desc = data[7];
            if (img == '') {
                img = 'https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg';
            } else {
                img = '/storage/' + img;
            }
            $('#name').html(name);
            $('#img').attr('src', img);
            $('#address').html(address);
            $('#phone').html(phone);
            $('#all').html(all);
            $('#grand').html(grand);
            $('#contract').html(contract);
            $('#desc').html(desc);
            var str = '<ol>'
            subjects.forEach(function(slide) {
                str += '<li>' + slide + '</li>';
            });
            str += '</ol>';
            $("#subjectss").html(str);
            destroyModal.modal('show');
        });
    </script>
@endpush
