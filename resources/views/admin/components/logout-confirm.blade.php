  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tizimdan chiqish?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"><h6>Rostanham tizimni tark etmoqchimisiz ?</h6></div>
        <div class="modal-footer">
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Yo'q</button>
                <button class="btn btn-primary" >Chiqish</button>
              </form>
        </div>
      </div>
    </div>
  </div>
