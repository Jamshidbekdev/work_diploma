@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Great job! </strong>{{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Great job! </strong>{{ session()->get('danger') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Great job! </strong>{{ session()->get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
