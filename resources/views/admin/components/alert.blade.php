
@if (session('success'))
<div class="alert alert-dismissible fade show" role="alert" style="background: rgba(17, 148, 17, 0.822); color:white; font-size:15px">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
