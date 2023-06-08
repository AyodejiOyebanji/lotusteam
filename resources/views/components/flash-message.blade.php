@if(session()->has('message'))
<div  class="d-flex justify-content-end">
    <div x-data="{show: true}" x-init='setTimeout(()=>show= false, 3000)' x-show='show' class="alert alert-danger w-25  ">
        <p>{{session('message')}}</p>
    </div>

</div>
@endif


